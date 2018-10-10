<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册确认连接</title>
</head>
<body>
    <h1>sample网站注册</h1>

    <p>
        点击下面的链接完成注册：
        <a href="{{route('confirm_email',$user->activation_token)}}">
            {{route('confirm_email',$user->activation_token)}}
        </a>
    </p>
</body>
</html>