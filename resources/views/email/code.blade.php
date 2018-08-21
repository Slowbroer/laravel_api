<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>云岫科技</title>
</head>
<body>

<div class="content">
    <div><h4 class="title">云岫科技</h4></div>
    <div class="code-content">
        <div>您正在使用该邮箱进行注册，这是您的验证码：</div>
        <div class="code">{{ $code }}</div>
        <div>验证码的有效期为5分钟，请尽快进行验证；如果这不是您的操作，请忽略！</div>
    </div>
</div>
<style type="text/css">

    .content {
        width: 500px;
        height: 300px;
        margin: 20px auto;
        background-color: #000e1e;
        padding: 10px;
        color: white;
        /*border-radius: 5px;*/

    }
    .title {
        border-bottom: 1px solid #CCCCCC;
        padding-bottom: 10px;
        font-size: 25px;
        color: #457ae6;
    }
    .code-content {
        font-size: 12px;
        padding: 10px;
        height: 200px;
        color: #CCCCCC;
    }
    .code {
        font-size: 26px;
        margin: 20px;
        color: #457ae6;
    }

</style>
</body>
</html>