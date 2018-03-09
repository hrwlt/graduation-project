<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/bootstrap/css/bootstrap.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/common.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/font-awesome.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/ico-awesome.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/material-dashboard.css' ?>">
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="">
        <div class="logo">
            <a href="#" class="simple-text">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="material-icons">content_paste</i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="material-icons">library_books</i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="material-icons">bubble_chart</i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="material-icons">location_on</i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="material-icons">person</i>
                        <p>个人信息</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="material-icons text-gray">notifications</i>
                        <p>消息系统</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Material Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Mike John responded to your email</a></li>
                                <li><a href="">You have 5 new tasks</a></li>
                                <li><a href="">You're now friend with Andrew</a></li>
                                <li><a href="">Another Notification</a></li>
                                <li><a href="">Another One</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;2018 HZNU DODO All Design By HR
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<script src="<?= base_url() . 'resource/jquery-3.3.1.min.js' ?>" type="text/javascript"></script>
<script src="<?= base_url() . 'resource/bootstrap/js/bootstrap.min.js' ?>" type="text/javascript"></script>
<script src="<?= base_url() . 'resource/common/common.js' ?>" type="text/javascript"></script>
</html>
