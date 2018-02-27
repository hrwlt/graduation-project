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
<div class="logo">
    <img src="<?= base_url() . 'resource/login/login_imgs/login_logo.png' ?>">
</div>
<form action="login" method="post">
    <div class="header">请使用平台账号登录</div>
    <div class="body">
        <div class="form-group">
            <input name="username" type="text" placeholder="用户名">
        </div>
        <div class="form-group">
            <input name="password" type="password" placeholder="密码">
        </div>
        <div class="form-radio">
            <input type="radio" name="identity" value="0" checked="checked" class="first-radio">教师
            <input type="radio" name="identity" value="1" class="second-radio">学生
        </div>
    </div>
    <div class="form-button">
        <button type="submit" class="btn bg">登 录</button>
        <button type="button" onclick="sign()" class="btn sign">注 册</button>
    </div>
</form>
<div class="footer">&copy;2018 —— HZNU DODO</div>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/bootstrap/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/login/login.js' ?>"></script>
</body>
</html>