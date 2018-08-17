<?php

namespace App\Http\Controllers;
require_once "BaiduBce.phar";

use BaiduBce\Services\Bos\BosClient;
use Illuminate\Http\Request;
use BaiduBce\Services\Sts\StsClient;

class BosController extends Controller
{
    //

    public function test(Request $request)
    {

//        $sql = $request->input("sql");
//        $sql = addslashes($sql);
//        var_dump($sql);
//        die();


        $para = file_get_contents("php://input");
//        $para = $request->all();
        var_dump($para);
        die();

        $bos_sts_config =
            array(
                'credentials' => array(
                    'accessKeyId' => config("bos.ak"),
                    'secretAccessKey' => config("bos.sk"),
                ),
                'stsEndpoint' => 'http://sts.bj.baidubce.com',
            );
        $acl = array(
            "accessControlList"=>[
                [
                    "service"=>'bce:bos',
                    'region'=>"*",
                    'effect'=>'Allow',
                    'permission'=>['READ'],
                    'resource'=>["slowbro-test/*"],
                ]
            ]
        );

        $StsClient = new StsClient($bos_sts_config);
        $token = $StsClient->getSessionToken([
            'config'=>$bos_sts_config,
            'acl'=>json_encode($acl)
        ]);

        $bos_test_config = array(
            'credentials' => array(
                'accessKeyId' => $token->accessKeyId,
                'secretAccessKey' => $token->secretAccessKey,

                'sessionToken' => $token->sessionToken
            ),
            'endpoint' => 'http://gz.bcebos.com',
        );
        $bos_client = new BosClient($bos_test_config);
        try{
//            $bos_string = $bos_client->getObjectAsString("slowbro-test",'test.txt');
//            $bos_string = $bos_client->generatePreSignedUrl("slowbro-test",'test.txt');
            $bos_string = $bos_client->listBuckets();
            var_dump($bos_string);
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
        }


    }
}
