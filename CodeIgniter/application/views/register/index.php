<!DOCTYPE html>
<html>
<head>
    <title>登录注册</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/register/login.css' ?>">
</head>
<body>
<section>
    <h1>HZNU-DODO试题平台</h1>
    <div class="stage">
        <div class="cbImage">
            <h3>找回密码</h3>
            <form action="" method="post">
                <input type="text" class="email" name="email" placeholder="Email" required="">
                <input type="text" class="number" name="phone_number" placeholder="Phone Number" required="">
                <input type="submit" class="done" value="提交">
            </form>

        </div>
        <div class="cbImage active signin agileits">
            <h3>登录</h3>
            <form action="" method="post">
                <input type="text" class="name" name="username" placeholder="用户名" required="">
                <input type="password" class="password" name="password" placeholder="密码" required="">
                <input type="submit" value="登录">
            </form>
        </div>
        <div class="cbImage agileinfo">
            <h3>注册</h3>
            <form action="" method="post">
                <input type="text" class="name" name="username" placeholder="用户名" required="">
                <input type="password" class="password" name="password" placeholder="密码" required="">
                <input type="password" class="password" name="confirm_password" placeholder="确认密码" required="">
                <input type="text" class="email" name="email" placeholder="邮箱" required="">
                <input type="submit" value="注册">
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="footer">
        <p>&copy 2018 HZNU DODO All Design By HR</p>
    </div>
</section>
<script src="<?= base_url() . 'resource/register/jquery-2.1.4.min.js' ?>"></script>
<script src="<?= base_url() . 'resource/register/login.js' ?>"></script>
</body>
</html>
