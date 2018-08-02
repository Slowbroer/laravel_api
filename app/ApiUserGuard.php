<?php
/**
 * Created by PhpStorm.
 * User: mj157
 * Date: 2018/7/27
 * Time: 14:23
 */

namespace App;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;

class ApiUserGuard implements Guard
{

    public function check()
    {
        // TODO: Implement check() method.
    }

    public function guest()
    {
        // TODO: Implement guest() method.
    }

    public function user()
    {
        // TODO: Implement user() method.
    }

    public function id()
    {
        // TODO: Implement id() method.
    }

    public function validate(array $credentials = [])
    {
        // TODO: Implement validate() method.
    }

    public function setUser(Authenticatable $user)
    {
        // TODO: Implement setUser() method.
    }



}