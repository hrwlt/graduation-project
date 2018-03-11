<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/bootstrap/css/bootstrap.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/font-awesome.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/ico-awesome.min.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/material-dashboard.css' ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/common/common.css' ?>">
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="../../assets/img/full-screen-image-3.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="logo-text">
                Creative Tim
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="http://www.creative-tim.com" class="logo-text">
                Ct
            </a>
        </div>

        <div class="sidebar-wrapper">

            <div class="user">
                <div class="photo">
                    <img src="../picture/default-avatar.png"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        Tania Andrew
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                <li>
                    <a href="../dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a data-toggle="collapse" href="#componentsExamples" aria-expanded="true">
                        <i class="pe-7s-plugin"></i>
                        <p>Components
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse in" id="componentsExamples">
                        <ul class="nav">
                            <li><a href="buttons.html">Buttons</a></li>
                            <li class="active"><a href="grid.html">Grid System</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="notifications.html">Notifications</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#formsExamples">
                        <i class="pe-7s-note2"></i>
                        <p>Forms
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li><a href="../forms/regular.html">Regular Forms</a></li>
                            <li><a href="../forms/extended.html">Extended Forms</a></li>
                            <li><a href="../forms/validation.html">Validation Forms</a></li>
                            <li><a href="../forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#tablesExamples">
                        <i class="pe-7s-news-paper"></i>
                        <p>Tables
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="tablesExamples">
                        <ul class="nav">
                            <li><a href="../tables/regular.html">Regular Tables</a></li>
                            <li><a href="../tables/extended.html">Extended Tables</a></li>
                            <li><a href="../tables/bootstrap-table.html">Bootstrap Table</a></li>
                            <li><a href="../tables/datatables.net.html">DataTables.net</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#mapsExamples">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="mapsExamples">
                        <ul class="nav">
                            <li><a href="../maps/google.html">Google Maps</a></li>
                            <li><a href="../maps/vector.html">Vector Maps</a></li>
                            <li><a href="../maps/fullscreen.html">Full Screen Map</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="../charts.html">
                        <i class="pe-7s-graph1"></i>
                        <p>Charts</p>
                    </a>
                </li>

                <li>
                    <a href="../calendar.html">
                        <i class="pe-7s-date"></i>
                        <p>Calendar</p>
                    </a>
                </li>

                <li>
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="pe-7s-gift"></i>
                        <p>Pages
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li><a href="../pages/login.html">Login Page</a></li>
                            <li><a href="../pages/register.html">Register Page</a></li>
                            <li><a href="../pages/lock.html">Lock Screen Page</a></li>
                            <li><a href="../pages/user.html">User Page</a></li>
                            <li><a href="#">More coming soon...</a></li>
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
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Grid System</a>
                </div>
                <div class="collapse navbar-collapse">

                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../charts.html">
                                <i class="fa fa-line-chart"></i>
                                <p>Stats</p>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-gavel"></i>
                                <p class="hidden-md hidden-lg">
                                    Actions
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Create New Post</a></li>
                                <li><a href="#">Manage Something</a></li>
                                <li><a href="#">Do Nothing</a></li>
                                <li><a href="#">Submit to live</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Another Action</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="notification">5</span>
                                <p class="hidden-md hidden-lg">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-with-icons">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i>
                                <p class="hidden-md hidden-lg">
                                    More
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="#">
                                        <i class="pe-7s-mail"></i> Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="pe-7s-help1"></i> Help Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="pe-7s-tools"></i> Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="pe-7s-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-danger">
                                        <i class="pe-7s-close-circle"></i>
                                        Log out
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

                <h4 class="title">XS Grid
                    <small>Always Horizontal</small>
                </h4>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-xs-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-xs-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-xs-4</code>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="title">SM Grid
                    <small>Collapsed at 768px</small>
                </h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-4</code>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="title">MD Grid
                    <small>Collapsed at 992px</small>
                </h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-4</code>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="title">LG Grid
                    <small>Collapsed at 1200px</small>
                </h4>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-lg-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-lg-4</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-lg-4</code>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="title">Mixed Grid
                    <small>Showing different sizes on different screens</small>
                </h4>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-6 col-lg-3</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-6 col-lg-3</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-6 col-lg-3</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-sm-6 col-lg-3</code>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="title">Offset Grid
                    <small>Adding some space when needed</small>
                </h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-3</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-3 col-md-offset-6</code>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-1">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-4 col-md-offset-1</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-4 col-md-offset-2</code>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="content text-center">
                                <code>col-md-6 col-md-offset-3</code>
                            </div>
                        </div>
                    </div>

                </div>


                <h4 class="title">Paragraphs</h4>

                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Some Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment. His many legs, pitifully thin compared with
                                    the size of the rest of him, waved about helplessly as he looked. "What's happened
                                    to me?" he thought.</p>
                            </div>

                            <div class="col-sm-6">
                                <h3>Another Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment. His many legs, pitifully thin compared with
                                    the size of the rest of him, waved about helplessly as he looked. "What's happened
                                    to me?" he thought.</p>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Some Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment.</p>
                            </div>

                            <div class="col-sm-4">
                                <h3>Another Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment.</p>
                            </div>

                            <div class="col-sm-4">
                                <h3>Another Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment.</p>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Some Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment.</p>
                            </div>

                            <div class="col-sm-8">
                                <h3>Another Title Here</h3>
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself
                                    transformed in his bed into a horrible vermin. He lay on his armour-like back, and
                                    if he lifted his head a little he could see his brown belly, slightly domed and
                                    divided by arches into stiff sections. The bedding was hardly able to cover it and
                                    seemed ready to slide off any moment. One morning, when Gregor Samsa woke from
                                    troubled dreams, he found himself transformed in his bed into a horrible vermin. He
                                    lay on his armour-like back, and if he lifted his head a little he could see his
                                    brown belly, slightly domed and divided by arches into stiff sections. The bedding
                                    was hardly able to cover it and seemed ready to slide off any moment.</p>
                            </div>
                        </div>

                    </div>
                </div> <!--  end card -->
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
</html>
