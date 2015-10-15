<!DOCTYPE html>
<html lang="tr" ng-app="ferry-goat-admin">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <script>
            document.write('<base href="' + document.location + '" />');
        </script>
        <!-- <base href="http://ferry-goat.dev/admin/"> -->

        <title ng-bind="'Ferry-Goat Yönetim Paneli - ' + title">Ferry-Goat Yönetim Paneli</title>

        <!--
        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
        -->

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-route.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-aria.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/restangular/1.5.1/restangular.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <link rel="stylesheet" href="css/skin-blue.min.css">
    </head>

    <body class="hold-transition skin-blue sidebar-mini fixed">
        <div class="wrapper">
            <header class="main-header">
                <a href="../../index2.html" class="logo">
                    <span class="logo-mini">
                        <img src="../img/logo-xsm-inverted.png" alt="Ferry-Goat Logo">
                    </span>
                    <span class="logo-lg"><b>Ferry-Goat</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown messages-menu">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href>
                                                    <div class="pull-left">
                                                        <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href>See All Messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown notifications-menu">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href>
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href>View all</a></li>
                                </ul>
                            </li>
                            <li class="dropdown tasks-menu">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href>
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href>View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown user user-menu">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href>Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href>Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href>Friends</a>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-files-o"></i>
                                <span>Layout Options</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-pie-chart"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="label pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href>
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                <li><a href="profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                <li><a href="#/login"><i class="fa fa-circle-o"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href>
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li>
                                    <a href><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li>
                                            <a href><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>
                        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                        <li class="header">LABELS</li>
                        <li><a href><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                        <li><a href><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                    </ul>
                </section>
            </aside>

            <div class="content-wrapper">
                <div ng-view></div>
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>

            <aside class="control-sidebar control-sidebar-dark">
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>

            <div class="control-sidebar-bg"></div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/common/templates/jquery.slimscroll.min.js"></script>
        <script src="js/common/templates/fastclick.min.js"></script>
        <script src="js/AdminLTE.min.js"></script>

        <script src="js/common/services/auth.js"></script>
        <script src="js/index/index.js"></script>
        <script src="../js/init.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
