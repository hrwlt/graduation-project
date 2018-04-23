<!DOCTYPE html>
<html>
<head>
    <title>试题库管理系统</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/bootstrap/css/bootstrap.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/font-awesome.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/ico-awesome.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/material-dashboard.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/common.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/person/person.css' ?>">
</head>
<body>
<div class="wrapper" id="container">
    <div class="sidebar" data-image="/resource/imgs/background_img1.jpg">
        <div class="user">
            <div class="photo">
                <img src="<?php echo $avatar; ?>">
            </div>
            <div class="info">
                <a href="/home/index/home/home/home"><?php echo $username; ?></a>
            </div>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <!-- 个人中心 -->
                <li>
                    <a data-toggle="collapse" href="#personsExamples">
                        <i class="pe-7s-user"></i>
                        <p>个人中心<b class="caret"></b></p>
                    </a>
                    <div id="personsExamples" class="collapse">
                        <ul class="nav">
                            <li>
                                <a href="/home/index/personedit/person/personedit">基本设置</a>
                            </li>
                            <li>
                                <a href="/home/index/personavatar/person/personavatar">头像设置</a>
                            </li>
                            <li>
                                <a href="/home/index/personsafe/person/personsafe">安全设置</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 课程管理 -->
                <li>
                    <a data-toggle="collapse" href="#questionsExamples">
                        <i class="pe-7s-note2"></i>
                        <p>课程管理<b class="caret"></b></p>
                    </a>
                    <div id="questionsExamples" class="collapse">
                        <ul class="nav">
                            <li>
                                <a href="/home/index/myCourse/myCourse/myCourse">我的课程</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 考试管理 -->
                <li>
                    <a data-toggle="collapse" href="#examinationExamples">
                        <i class="pe-7s-plugin"></i>
                        <p>考试管理<b class="caret"></b></p>
                    </a>
                    <div id="examinationExamples" class="collapse">
                        <ul class="nav">
                            <li>
                                <a href="javascript:;">我的考试</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <!-- 页面主题 -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="javascript:;">我的学习</a>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- 更多 -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown dropdown-with-icons">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i>
                                <p class="hidden-md hidden-lg">
                                    More<b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="">
                                        <i class="pe-7s-mail"></i> 信息
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="pe-7s-help1"></i> 帮助
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="pe-7s-tools"></i> 设置
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/login/logout" class="text-danger">
                                        <i class="pe-7s-close-circle"></i> 退出登录
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $course_name; ?></h4>
                            </div>
                            <div class="content">
                                <ul role="tablist" class="nav nav-tabs">
                                    <li role="presentation" class="active">
                                        <a href="#info" data-toggle="tab">课程信息</a>
                                    </li>
                                    <li>
                                        <a href="#message" data-toggle="tab">消息通知</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="info" class="tab-pane active">
                                        <label>任课老师：</label>
                                        <p style=" font-size: 15px;"><?php echo $course_teacher; ?></p>
                                        <label>课程简介：</label>
                                        <p style=" font-size: 15px;"><?php echo $course_instruction; ?></p>
                                    </div>
                                    <div id="message" class="tab-pane">
                                        <p style="font-size: 15px;">暂无消息</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-target="#data" href="javascript:;" data-toggle="collapse">
                                                    学习资料
                                                    <b class="caret"></b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="data" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p style="font-size: 15px;">暂无内容</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-target="#work" href="javascript:;" data-toggle="collapse">
                                                    我的作业
                                                    <b class="caret"></b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="work" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p style="font-size: 15px;">暂无内容</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-target="#assessment" href="javascript:;"
                                                   data-toggle="collapse">
                                                    互评任务
                                                    <b class="caret"></b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="assessment" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p style="font-size: 15px;">暂无内容</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-target="#experiment" href="javascript:;"
                                                   data-toggle="collapse">
                                                    我的实验
                                                    <b class="caret"></b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="experiment" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p style="font-size: 15px;">暂无内容</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-target="#simulate" href="javascript:;"
                                                   data-toggle="collapse">
                                                    模拟练习
                                                    <b class="caret"></b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="simulate" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p style="font-size: 15px;">暂无内容</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-target="#discuss" href="javascript:;"
                                                   data-toggle="collapse">
                                                    讨论区
                                                    <b class="caret"></b>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="discuss" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p style="font-size: 15px;">暂无内容</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">&copy;2018 HZNU DODO All Design By HR</p>
            </div>
        </footer>
    </div>
</div>
</body>
<script type="text/javascript" src="<?= base_url() . 'resource/jquery-3.3.1.min.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/bootstrap/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/common/material-dashboard.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/jquery-datatable.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/vue.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/common/common.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/person/person.js' ?>"></script>
</html>
