<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url() . 'resource/home/light-bootstrap-dashboard.css' ?>" rel="stylesheet"/>
    <link href="<?= base_url() . 'resource/home/font-awesome.min.css' ?>" rel="stylesheet">
    <link href="<?= base_url() . 'resource/home/font-icon.css' ?>" rel="stylesheet"/>

    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/bootstrap/css/bootstrap.min.css' ?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url() . 'resource/home/home.css' ?>"/>
    <title><?php echo $title; ?></title>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">

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
                    <img src="picture/default-avatar.png"/>
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
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="pe-7s-plugin"></i>
                        <p>Components
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li><a href="components/buttons.html">Buttons</a></li>
                            <li><a href="components/grid.html">Grid System</a></li>
                            <li><a href="components/icons.html">Icons</a></li>
                            <li><a href="components/notifications.html">Notifications</a></li>
                            <li><a href="components/panels.html">Panels</a></li>
                            <li><a href="components/sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="components/typography.html">Typography</a></li>
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
                            <li><a href="forms/regular.html">Regular Forms</a></li>
                            <li><a href="forms/extended.html">Extended Forms</a></li>
                            <li><a href="forms/validation.html">Validation Forms</a></li>
                            <li><a href="forms/wizard.html">Wizard</a></li>
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
                            <li><a href="tables/regular.html">Regular Tables</a></li>
                            <li><a href="tables/extended.html">Extended Tables</a></li>
                            <li><a href="tables/bootstrap-table.html">Bootstrap Table</a></li>
                            <li><a href="tables/datatables.net.html">DataTables.net</a></li>
                        </ul>
                    </div>
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
                            <li><a href="pages/login.html">Login Page</a></li>
                            <li><a href="pages/register.html">Register Page</a></li>
                            <li><a href="pages/lock.html">Lock Screen Page</a></li>
                            <li><a href="pages/user.html">User Page</a></li>
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
                    <a class="navbar-brand" href="#">Charts</a>
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
                            <a href="charts.html">
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

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                24 Hours Performance
                                <p class="category">Line Chart</p>
                            </div>
                            <div class="content">
                                <div id="chartPerformance" class="ct-chart "></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                NASDAQ: AAPL
                                <p class="category">Line Chart with Points</p>
                            </div>
                            <div class="content">
                                <div id="chartStock" class="ct-chart "></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                Users Behavior
                                <p class="category">Multiple Lines Charts</p>
                            </div>
                            <div class="content">
                                <div id="chartBehaviour" class="ct-chart "></div>
                            </div>
                            <div class="footer">
                                <h6>Legend</h6>
                                <i class="fa fa-circle text-info"></i> Visited Site
                                <i class="fa fa-circle text-danger"></i> Register
                                <i class="fa fa-circle text-warning"></i> Login 2nd time
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                Public Preferences
                                <p class="category">Pie Chart</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart "></div>
                            </div>
                            <div class="footer">
                                <h6>Legend</h6>
                                <i class="fa fa-circle text-info"></i> Apple
                                <i class="fa fa-circle text-warning"></i> Samsung
                                <i class="fa fa-circle text-danger"></i> Windows Phone
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                Views
                                <p class="category">Bar Chart</p>
                            </div>
                            <div class="content">
                                <div id="chartViews" class="ct-chart "></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                Activity
                                <p class="category">Multiple Bars Chart</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart "></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>

</body>
<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


<!--  Forms Validations Plugin -->
<script src="js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="js/bootstrap-selectpicker.js"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="js/bootstrap-checkbox-radio-switch-tags.js"></script>

<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="js/aa743e8f448a4792bad10d201a7080f6.js"></script>

<!-- Wizard Plugin    -->
<script src="js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="js/jquery.datatables.js"></script>


<!--  Full Calendar Plugin    -->
<script src="js/fullcalendar.min.js"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="js/light-bootstrap-dashboard.js"></script>

<!--   Sharrre Library    -->
<script src="js/jquery.sharrre.js"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>

<script>
    $().ready(function () {
        demo.initCharts();
    });
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46172202-1', 'auto');
    ga('send', 'pageview');

</script>

</html>
