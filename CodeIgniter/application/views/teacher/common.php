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
<div id="title" title="<?php echo $title; ?>"></div>
<div id="operate" operate="<?php echo $operate; ?>"></div>
<div id="seen" seen="<?php echo $seen; ?>"></div>
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
                <li :class="{active:operate==='person'}">
                    <a data-toggle="collapse" href="#personsExamples"
                       :aria-expanded="operate==='person'?'true':'false'">
                        <i class="pe-7s-user"></i>
                        <p>个人中心<b class="caret"></b></p>
                    </a>
                    <div id="personsExamples"
                         :class="operate==='person'?'collapse in':'collapse'">
                        <ul class="nav">
                            <li :class="{active:seen==='personedit'}">
                                <a href="javascript:;" @click="edit">基本设置</a>
                            </li>
                            <li :class="{active:seen==='personavatar'}">
                                <a href="javascript:;" @click="avatar">头像设置</a>
                            </li>
                            <li :class="{active:seen==='personsafe'}">
                                <a href="javascript:;" @click="safe">安全设置</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 题库管理 -->
                <li :class="{active:operate==='question'}">
                    <a data-toggle="collapse" href="#questionsExamples"
                       :aria-expanded="operate==='question'?'true':'false'">
                        <i class="pe-7s-note2"></i>
                        <p>题库管理<b class="caret"></b></p>
                    </a>
                    <div id="questionsExamples"
                         :class="operate==='question'?'collapse in':'collapse'">
                        <ul class="nav">
                            <li :class="{active:seen==='questionlist'}">
                                <a href="javascript:;" @click="questionlist" onclick="question()">我的题库</a>
                            </li>
                            <li :class="{active:seen==='knowledgelist'}">
                                <a href="javascript:;" @click="knowledgelist" onclick="knowledge()">我的知识点库</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 教学管理 -->
                <li :class="{active:operate==='course'}">
                    <a data-toggle="collapse" href="#teachExamples"
                       :aria-expanded="operate==='course'?'true':'false'">
                        <i class="pe-7s-news-paper"></i>
                        <p>教学管理<b class="caret"></b></p>
                    </a>
                    <div id="teachExamples"
                         :class="operate==='course'?'collapse in':'collapse'">
                        <ul class="nav">
                            <li :class="{active:seen==='courselist'}">
                                <a href="javascript:;" @click="courselist" onclick="course()">我的课程</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 考试管理 -->
                <li :class="{active:operate==='exam'}">
                    <a data-toggle="collapse" href="#examinationExamples"
                       :aria-expanded="operate==='exam'?'true':'false'">
                        <i class="pe-7s-plugin"></i>
                        <p>考试管理<b class="caret"></b></p>
                    </a>
                    <div id="examinationExamples"
                         :class="operate==='exam'?'collapse in':'collapse'">
                        <ul class="nav">
                            <li :class="{active:seen==='examlist'}">
                                <a href="javascript:;" @click="exam" onclick="teach_exam()">考试列表</a>
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
                    <a class="navbar-brand" href="javascript:;">{{title}}</a>
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
                                    <a href="javascript:;">
                                        <i class="pe-7s-mail"></i> 信息
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="pe-7s-help1"></i> 帮助
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
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

                <?php $this->load->view('home/index'); ?>

                <?php $this->load->view('persons/personedit'); ?>

                <?php $this->load->view('persons/personavatar'); ?>

                <?php $this->load->view('persons/personsafe') ?>

                <?php $this->load->view('teacher/question') ?>

                <?php $this->load->view('teacher/knowledge') ?>

                <?php $this->load->view('teacher/course') ?>

                <?php $this->load->view('teacher/exam') ?>

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
<script type="text/javascript" src="<?= base_url() . 'resource/sweetalert.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/vue.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/common/common.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/person/person.js' ?>"></script>
</html>
