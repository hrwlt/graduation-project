<!DOCTYPE html>
<html>
<head>
    <title>登录注册</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/bootstrap/css/bootstrap.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/material-dashboard.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/login/login.css' ?>">
</head>
<body>
<section>
    <h1>HZNU-DODO试题平台</h1>
    <div class="stage">

        <div class="cbImage">
            <h3>找回密码</h3>
            <form id="retrieveForm" action="" method="post">
                <div>
                    <input name="username" type="text" placeholder="用户名" required="">
                </div>
                <div class="radioText">
                    <input name="identity" type="radio" value="0" checked="checked"><span>教师</span>
                    <input name="identity" type="radio" value="1"><span>学生</span>
                </div>
                <div>
                    <input id="retrieve" type="button" value="确认">
                </div>
            </form>
        </div>

        <div class="cbImage active">
            <h3>登录</h3>
            <form id="loginForm" action="" method="post">
                <div>
                    <input id="username" name="username" type="text" placeholder="用户名" required="">
                </div>
                <div>
                    <input id="password" name="password" type="password" placeholder="密码" required="">
                </div>
                <div class="radioText">
                    <input name="identity" type="radio" value="0" checked="checked"><span>教师</span>
                    <input name="identity" type="radio" value="1"><span>学生</span>
                </div>
                <div>
                    <input id="login" type="button" value="登录">
                </div>
            </form>
        </div>
        <div class="cbImage">
            <h3>注册</h3>
            <form id="registerForm" action="" method="post">
                <div>
                    <input type="text" class="name" name="username" placeholder="用户名" required="">
                </div>
                <div>
                    <input type="password" class="password" name="password" placeholder="密码" required="">
                </div>
                <div>
                    <input type="password" class="password" name="confirm_password" placeholder="确认密码" required="">
                </div>
                <div>
                    <input type="text" class="email" name="email" placeholder="邮箱" required="">
                </div>
                <div class="radioText">
                    <input name="identity" type="radio" value="0" checked="checked">教师
                    <input name="identity" type="radio" value="1">学生
                </div>
                <div>
                    <input id="register" type="button" value="注册">
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="foot">
        <p>&copy; 2018 HZNU DODO All Design By HR</p>
    </div>
</section>
<script src="<?= base_url() . 'resource/jquery-3.3.1.min.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/sweetalert.js' ?>"></script>
<script src="<?= base_url() . 'resource/login/login.js' ?>"></script>
</body>
</html>
