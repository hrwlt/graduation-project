<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/bootstrap/css/bootstrap.min.css' ?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/login/login.css' ?>"/>
    <title><?php echo $title; ?></title>
</head>
<body>
<form id="myForm" method="post" action="">
    <div>
        <input id="username" name="username" type="text" placeholder="用户名">
    </div>
    <div>
        <input id="password" name="password" type="password" placeholder="密码">
    </div>
    <div>
        <input name="identity" type="radio" value="0" checked="checked">教师
        <input name="identity" type="radio" value="1">学生
    </div>
    <div>
        <input id="login" type="button" value="登录">
        <a href="../register/index">立即注册</a>
    </div>
</form>
<div>&copy;2018 —— HZNU DODO</div>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/bootstrap/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/login/login.js' ?>"></script>
</body>
</html>