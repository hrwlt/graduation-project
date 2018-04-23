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
                <!-- 题库管理 -->
                <li>
                    <a data-toggle="collapse" href="#questionsExamples">
                        <i class="pe-7s-note2"></i>
                        <p>题库管理<b class="caret"></b></p>
                    </a>
                    <div id="questionsExamples" class="collapse">
                        <ul class="nav">
                            <li>
                                <a href="/home/index/question/question/questionlist">我的题库</a>
                            </li>
                            <li>
                                <a href="/home/index/knowledge/question/knowledgelist">我的知识点库</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- 教学管理 -->
                <li>
                    <a data-toggle="collapse" href="#teachExamples">
                        <i class="pe-7s-news-paper"></i>
                        <p>教学管理<b class="caret"></b></p>
                    </a>
                    <div id="teachExamples" class="collapse">
                        <ul class="nav">
                            <li>
                                <a href="/home/index/course/course/courselist">我的课程</a>
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
                                <a href="/home/index/exam/exam/examlist">考试列表</a>
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
                    <div class="col-md-12">
                        <div class="card">
                            <button data-toggle="modal" data-target="#addQuestion" type="button" class="btn btn-primary question">添加题目</button>
                            <div class="content">
                                <div class="fresh-datatables">
                                    <table id="question_list" class="table table-striped table-no-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">题库ID</th>
                                            <th class="text-center">题目ID</th>
                                            <th class="text-center">题目</th>
                                            <th class="disabled-sorting text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (!is_null($question_list)) {
                                            foreach ($question_list as $key => $question) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $question_id; ?></td>
                                                    <td class="text-center"><?php echo $key; ?></td>
                                                    <td class="text-center"><?php echo $question->question_name; ?></td>
                                                    <td class="text-center">
                                                        <a href="javascript:;" data-toggle="modal" data-target="#editQuestion<?php echo $key; ?>" class="btn btn-simple btn-warning btn-icon">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-simple btn-danger btn-icon remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="question_add" method="post" action="">
                                        <div class="modal-header">
                                            <label>题目：</label><input type="text" name="question_name">
                                        </div>
                                        <div class="modal-body">
                                            <div><label>A：</label><input type="text" name="question_option_A"></div>
                                            <div><label>B：</label><input type="text" name="question_option_B"></div>
                                            <div><label>C：</label><input type="text" name="question_option_C"></div>
                                            <div><label>D：</label><input type="text" name="question_option_D"></div>
                                            <div><label>正确选项：</label><input type="text" name="right_option">（请填A、B、C或者D）</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" onclick="question_add(<?php echo $question_id; ?>)">
                                                确认添加并保存
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php if (!is_null($question_list)) {
                            foreach ($question_list as $key => $question) { ?>
                                <div class="modal fade" id="editQuestion<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form id="question_list_eidt<?php echo $key; ?>" method="post" action="">
                                                <input name="question_id" value="<?php echo $question_id; ?>" style="display: none;">
                                                <input name="question_list_id" value="<?php echo $key; ?>" style="display: none;">
                                                <div class="modal-header">
                                                    <label>题目：</label><input style="width: 350px;" type="text" name="question_name" value="<?php echo $question->question_name; ?>">
                                                </div>
                                                <div class="modal-body">
                                                    <div><label>A：</label><input type="text" name="question_option_A" value="<?php echo $question->option[0]; ?>"></div>
                                                    <div><label>B：</label><input type="text" name="question_option_B" value="<?php echo $question->option[1]; ?>"></div>
                                                    <div><label>C：</label><input type="text" name="question_option_C" value="<?php echo $question->option[2]; ?>"></div>
                                                    <div><label>D：</label><input type="text" name="question_option_D" value="<?php echo $question->option[3]; ?>"></div>
                                                    <div><label>正确选项：</label><input type="text" name="right_option" value="<?php echo $option_array[$question->right_option]; ?>">（请填A、B、C或者D）</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" onclick="edit_question_list(<?php echo $question_id; ?>,<?php echo $key; ?>)">
                                                        确认修改并保存
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <? }
                        } ?>
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
<script type="text/javascript" src="<?= base_url() . 'resource/sweetalert.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/vue.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/common/common.js' ?>"></script>
<script type="text/javascript" src="<?= base_url() . 'resource/person/person.js' ?>"></script>
</html>