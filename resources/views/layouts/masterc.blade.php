<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="../../assetss/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="../../assetss/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
    <link href="../../assetss/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="../../assetss/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default">
					1 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Notifications</h3>
                            <a href="extra_profile.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="/allvisitors">
                                        <span class="time">just now</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
{{--                        <img alt="" class="img-circle" src="../../assetss/admin/layout/img/avatar3_small.jpg"/>--}}
                        <span class="username username-hide-on-mobile">
					{{ Auth::user()->name }} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">

                        <li class="divider">
                        </li>

                        <li>
                            <a href="logout">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start ">
                    <a href="/customer">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>

                    </a>

                </li>
                <li>
                    <a href="/customer">
                        <i class="icon-basket"></i>
                        <span class="title">Visitor Reports</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/allvisitors">
                                <i class="icon-home"></i>
                                Real Time Visitor</a>
                        </li>
                        <li>
                            <a href="/visitors/department">
                                <i class="icon-basket"></i>
                                By Department</a>
                        </li>
                        <li>
                            <a href="/visitors/employee">
                                <i class="icon-tag"></i>
                                By Employee</a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="javascript:;">
                        <i class="icon-diamond"></i>
                        <span class="title">Department</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('department.create')}}">
                                Add New Department</a>
                        </li>
                        <li>
                            <a href="{{route('department.index')}}">
                                View All Department</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="ui_confirmations.html">--}}
{{--                                Popover Confirmations</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_icons.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>Font Icons</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_colors.html">--}}
{{--                                Flat UI Colors</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_typography.html">--}}
{{--                                Typography</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_tabs_accordions_navs.html">--}}
{{--                                Tabs, Accordions & Navs</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_tree.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>Tree View</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_page_progress_style_1.html">--}}
{{--                                <span class="badge badge-roundless badge-warning">new</span>Page Progress Bar</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_blockui.html">--}}
{{--                                Block UI</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_bootstrap_growl.html">--}}
{{--                                <span class="badge badge-roundless badge-warning">new</span>Bootstrap Growl Notifications</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_notific8.html">--}}
{{--                                Notific8 Notifications</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_toastr.html">--}}
{{--                                Toastr Notifications</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_alert_dialog_api.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>Alerts & Dialogs API</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_session_timeout.html">--}}
{{--                                Session Timeout</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_idle_timeout.html">--}}
{{--                                User Idle Timeout</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_modals.html">--}}
{{--                                Modals</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_extended_modals.html">--}}
{{--                                Extended Modals</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_tiles.html">--}}
{{--                                Tiles</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_datepaginator.html">--}}
{{--                                <span class="badge badge-roundless badge-success">new</span>Date Paginator</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="ui_nestable.html">--}}
{{--                                Nestable List</a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-puzzle"></i>
                        <span class="title">Employee</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('employee.create')}}">
                                Add New Employee</a>
                        </li>
                        <li>
                            <a href="{{route('employee.index')}}">
                                View All Employee</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="components_dropdowns.html">--}}
{{--                                Custom Dropdowns</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_form_tools.html">--}}
{{--                                Form Widgets & Tools</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_form_tools2.html">--}}
{{--                                Form Widgets & Tools 2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_editors.html">--}}
{{--                                Markdown & WYSIWYG Editors</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_ion_sliders.html">--}}
{{--                                Ion Range Sliders</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_noui_sliders.html">--}}
{{--                                NoUI Range Sliders</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_jqueryui_sliders.html">--}}
{{--                                jQuery UI Sliders</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="components_knob_dials.html">--}}
{{--                                Knob Circle Dials</a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <!-- BEGIN ANGULARJS LINK -->
                <li>
                    <a href="javascript:;">
                        <i class="icon-puzzle"></i>
                        <span class="title">Black List Visitor</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="components_pickers.html">
                                Add New Black List Visitor</a>
                        </li>
                        <li>
                            <a href="components_context_menu.html">
                                View All Black List Visitor</a>
                        </li>
                    </ul>

                <li>
                    <a href="javascript:;">
                        <i class="icon-briefcase"></i>
                        <span class="title">Expected Visitor Code</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('code.create')}}">
                                Generate Code</a>
                        </li>
                        <li>
                            <a href="{{route('code.index')}}">
                                View All Code</a>
                        </li>
                    </ul>


                <!-- END ANGULARJS LINK -->
{{--                <li class="heading">--}}
{{--                    <h3 class="uppercase">Features</h3>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-settings"></i>--}}
{{--                        <span class="title">Form Stuff</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="form_controls_md.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>Material Design<br>--}}
{{--                                Form Controls</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_controls.html">--}}
{{--                                Bootstrap<br>--}}
{{--                                Form Controls</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_icheck.html">--}}
{{--                                iCheck Controls</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_layouts.html">--}}
{{--                                Form Layouts</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_editable.html">--}}
{{--                                <span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_wizard.html">--}}
{{--                                Form Wizard</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_validation.html">--}}
{{--                                Form Validation</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_image_crop.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>Image Cropping</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_fileupload.html">--}}
{{--                                Multiple File Upload</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="form_dropzone.html">--}}
{{--                                Dropzone File Upload</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="active open">--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-briefcase"></i>--}}
{{--                        <span class="title">Data Tables</span>--}}
{{--                        <span class="selected"></span>--}}
{{--                        <span class="arrow open"></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="active">--}}
{{--                            <a href="table_basic.html">--}}
{{--                                Basic Datatables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="table_tree.html">--}}
{{--                                Tree Datatables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="table_responsive.html">--}}
{{--                                Responsive Datatables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="table_managed.html">--}}
{{--                                Managed Datatables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="table_editable.html">--}}
{{--                                Editable Datatables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="table_advanced.html">--}}
{{--                                Advanced Datatables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="table_ajax.html">--}}
{{--                                Ajax Datatables</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-wallet"></i>--}}
{{--                        <span class="title">Portlets</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="portlet_general.html">--}}
{{--                                General Portlets</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="portlet_general2.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>New Portlets #1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="portlet_general3.html">--}}
{{--                                <span class="badge badge-roundless badge-danger">new</span>New Portlets #2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="portlet_ajax.html">--}}
{{--                                Ajax Portlets</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="portlet_draggable.html">--}}
{{--                                Draggable Portlets</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-bar-chart"></i>--}}
{{--                        <span class="title">Charts</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="charts_amcharts.html">--}}
{{--                                amChart</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="charts_flotcharts.html">--}}
{{--                                Flotchart</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-docs"></i>--}}
{{--                        <span class="title">Pages</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="page_timeline.html">--}}
{{--                                <i class="icon-paper-plane"></i>--}}
{{--                                <span class="badge badge-warning">2</span>New Timeline</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_profile.html">--}}
{{--                                <i class="icon-user-following"></i>--}}
{{--                                <span class="badge badge-success badge-roundless">new</span>New User Profile</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_todo.html">--}}
{{--                                <i class="icon-check"></i>--}}
{{--                                Todo</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="inbox.html">--}}
{{--                                <i class="icon-envelope"></i>--}}
{{--                                <span class="badge badge-danger">4</span>Inbox</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_faq.html">--}}
{{--                                <i class="icon-question"></i>--}}
{{--                                FAQ</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_calendar.html">--}}
{{--                                <i class="icon-calendar"></i>--}}
{{--                                <span class="badge badge-danger">14</span>Calendar</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_coming_soon.html">--}}
{{--                                <i class="icon-flag"></i>--}}
{{--                                Coming Soon</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_blog.html">--}}
{{--                                <i class="icon-speech"></i>--}}
{{--                                Blog</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_blog_item.html">--}}
{{--                                <i class="icon-link"></i>--}}
{{--                                Blog Post</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_news.html">--}}
{{--                                <i class="icon-eye"></i>--}}
{{--                                <span class="badge badge-success">9</span>News</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_news_item.html">--}}
{{--                                <i class="icon-bell"></i>--}}
{{--                                News View</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_timeline_old.html">--}}
{{--                                <i class="icon-paper-plane"></i>--}}
{{--                                <span class="badge badge-warning">2</span>Old Timeline</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_profile_old.html">--}}
{{--                                <i class="icon-user"></i>--}}
{{--                                Old User Profile</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-present"></i>--}}
{{--                        <span class="title">Extra</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="page_about.html">--}}
{{--                                About Us</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_contact.html">--}}
{{--                                Contact Us</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_search.html">--}}
{{--                                Search Results</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_invoice.html">--}}
{{--                                Invoice</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="page_portfolio.html">--}}
{{--                                Portfolio</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_pricing_table.html">--}}
{{--                                Pricing Tables</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_404_option1.html">--}}
{{--                                404 Page Option 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_404_option2.html">--}}
{{--                                404 Page Option 2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_404_option3.html">--}}
{{--                                404 Page Option 3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_500_option1.html">--}}
{{--                                500 Page Option 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_500_option2.html">--}}
{{--                                500 Page Option 2</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-folder"></i>--}}
{{--                        <span class="title">Multi Level Menu</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="javascript:;">--}}
{{--                                <i class="icon-settings"></i> Item 1 <span class="arrow"></span>--}}
{{--                            </a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li>--}}
{{--                                    <a href="javascript:;">--}}
{{--                                        <i class="icon-user"></i>--}}
{{--                                        Sample Link 1 <span class="arrow"></span>--}}
{{--                                    </a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li>--}}
{{--                                            <a href="#"><i class="icon-power"></i> Sample Link 1</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#"><i class="icon-star"></i> Sample Link 1</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-camera"></i> Sample Link 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-link"></i> Sample Link 2</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-pointer"></i> Sample Link 3</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="javascript:;">--}}
{{--                                <i class="icon-globe"></i> Item 2 <span class="arrow"></span>--}}
{{--                            </a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-tag"></i> Sample Link 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-pencil"></i> Sample Link 1</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="icon-graph"></i> Sample Link 1</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <i class="icon-bar-chart"></i>--}}
{{--                                Item 3 </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-user"></i>--}}
{{--                        <span class="title">Login Options</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="login.html">--}}
{{--                                Login Form 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="login_2.html">--}}
{{--                                Login Form 2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="login_3.html">--}}
{{--                                Login Form 3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="login_soft.html">--}}
{{--                                Login Form 4</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_lock.html">--}}
{{--                                Lock Screen 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="extra_lock2.html">--}}
{{--                                Lock Screen 2</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="heading">--}}
{{--                    <h3 class="uppercase">More</h3>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-logout"></i>--}}
{{--                        <span class="title">Quick Sidebar</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="quick_sidebar_push_content.html">--}}
{{--                                Push Content</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="quick_sidebar_over_content.html">--}}
{{--                                Over Content</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="quick_sidebar_over_content_transparent.html">--}}
{{--                                Over Content & Transparent</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="quick_sidebar_on_boxed_layout.html">--}}
{{--                                Boxed Layout</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="last ">--}}
{{--                    <a href="javascript:;">--}}
{{--                        <i class="icon-pointer"></i>--}}
{{--                        <span class="title">Maps</span>--}}
{{--                        <span class="arrow "></span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li>--}}
{{--                            <a href="maps_google.html">--}}
{{--                                Google Maps</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="maps_vector.html">--}}
{{--                                Vector Maps</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
       @yield('content')
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
    <div class="page-quick-sidebar-wrapper">
        <div class="page-quick-sidebar">
            <div class="nav-justified">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#quick_sidebar_tab_1" data-toggle="tab">
                            Users <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#quick_sidebar_tab_2" data-toggle="tab">
                            Alerts <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            More<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Staff</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="../../assetss/admin/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Bob Nilson</h4>
                                        <div class="media-heading-sub">
                                            Project Manager
                                        </div>
                                    </div>
                                </li>



                            </ul>

                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
											When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
											Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body">
											Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body">
											You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
											No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body">
											Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
											Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar2.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body">
											Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../../assetss/admin/layout/img/avatar3.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                                        </div>
                                    </div>
                                </div>
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
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
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
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li>
                                    Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li>
                                    Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                </li>
                                <li>
                                    Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                </li>
                                <li>
                                    Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                                <li>
                                    Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assetss/global/plugins/respond.min.js"></script>
<script src="../../assetss/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assetss/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assetss/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assetss/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assetss/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assetss/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assetss/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assetss/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
    });
</script>
@yield('scripts')


</body>
<!-- END BODY -->
</html>
