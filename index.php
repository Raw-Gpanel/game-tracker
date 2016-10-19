<?php
include("ctl/header.php");
?>
    <body class="page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar-fixed-top">
            <!-- COOKIES -->
<script>
Cookies.set('RAW', 'iN-HoST', { expires: 7 });
</script>
            <!-- END COOKIES -->
            <!-- BEGIN HEADER INNER -->
            <div class="clearfix">
                <!-- BEGIN BURGER TRIGGER -->
                <div class="burger-trigger">
                    <button class="menu-trigger">
                        <img src="../theme/layouts/layout7/img/m_toggler.png" alt=""> </button>
                    <div class="menu-overlay menu-overlay-bg-transparent">
                        <div class="menu-overlay-content">
                            <ul class="menu-overlay-nav text-uppercase">
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-bg-overlay">
                        <button class="menu-close">&times;</button>
                    </div>
                    <!-- the overlay element -->
                </div>
                <!-- END NAV TRIGGER -->
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.php">
                        <img src="https://cdn-client.firebaseapp.com/img/clogo.png" alt="logo" class="logo-default" /> </a>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <div class="dropdown-user-inner">
                                    <span class="username username-hide-on-mobile"> User </span>
                                    <img alt="" src="http://emoji.dope.global/assets/img/emoji/1f48e.png" /> </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#">
                                        <i class="icon-key"></i> Login </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        
        <div class="clearfix"> </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container page-content-inner page-container-bg-solid">
            <!-- BEGIN BREADCRUMBS -->
            <!-- Remove "hide" class from "breadcrumbs hide" DIV and "margin-top-30" class from below "container-fluid container-lf-space margin-top-30" DIV in order to use the page breadcrumbs -->
            <div class="breadcrumbs hide">
                <div class="container-fluid">
                    <h2 class="breadcrumbs-title">Dashboard</h2>
                    <ol class="breadcrumbs-list">
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Home</a>
                        </li>
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Features</a>
                        </li>
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Dashboard</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            <!-- BEGIN CONTENT -->
            <div class="container-fluid container-lf-space margin-top-30">
                <!-- START STATS -->
                <div class="row widget-row">

<!-- START LIVE -->
<div id="prefix_707790037471" class="custom-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Click On Reload Icon.</div>
<div class="col-md-12">
     <div class="portlet box blue">
          <div class="portlet-title">
               <div class="caption">
                    <i class="fa icon-diamond"></i><b>Server List</b></div>
                    <div class="tools">
                        <a href="javascript:;" class="reload" data-load="true" data-url="servers.php" data-original-title="" title=""> </a>
                    </div>
          </div>
          <div class="portlet-body portlet-empty"> </div>
     </div>
</div>
<!-- END LIVE -->

                </div>
                <!-- END STATS -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">2</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">0</span>
                                    </div>
                                    <img class="media-object" src="http://i.imgur.com/Lv27Fkw.png" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">The Raw</h4>
                                        <div class="media-heading-sub"> OWNER </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Customers</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">0</span>
                                    </div>
                                    <img class="media-object" src="http://i.imgur.com/Lv27Fkw.png" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Example Name</h4>
                                        <div class="media-heading-sub"> Member </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>Back</a>
                                </div>
                                
                                <!-- EX INFO -->
                                <!--<div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../theme/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> When could you send me the report ? </span>
                                        </div>
                                    </div>
                                </div>-->
                                <!-- END EX INFO -->

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">General</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Version 1.0 Is Released!.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 19/10/2016 </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">System</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> Version 1.0 Is Released!.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 19/10/2016 </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">Errors</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> No Problems Reported!.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 19/10/2016 </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
                <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner container-fluid container-lf-space">
                <p class="page-footer-copyright"> 201<b>6</b>-201<b>7</b> GAME TRACKER. POWERED BY : 
                    <a target="_blank" href="http://in-host.co/"><b>iN-HoST</b></a>
                </p>
            </div>
            <div class="go2top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        <button type="button" class="quick-sidebar-toggler" data-toggle="collapse">
            <span class="sr-only">Toggle Quick Sidebar</span>
            <i class="icon-logout"></i>
            <div class="quick-sidebar-notification">
                <span class="badge badge-danger">7</span>
            </div>
        </button>
        <!-- END QUICK SIDEBAR TOGGLER -->
<?php
include("ctl/footer.php");
?>