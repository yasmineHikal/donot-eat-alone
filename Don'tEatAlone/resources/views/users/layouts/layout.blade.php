<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
      <!--[if !IE]><!-->
      <html lang="en">
         <!--<![endif]-->
         <!-- BEGIN HEAD -->
         <head>
            <meta charset="utf-8" />
            <title>Don'tEatAlone
               |
               @yield('title')
            </title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <meta content="" name="description" />
            <meta content="" name="author" />
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
            {!! Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
            {!! Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
            {!! Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}
            {!! Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            {!! Html::style('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') !!}
            {!! Html::style('assets/global/plugins/morris/morris.css') !!}
            {!! Html::style('assets/global/plugins/fullcalendar/fullcalendar.min.css') !!}
            {!! Html::style('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') !!}
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL STYLES -->
            {!! Html::style('assets/global/css/components.min.css') !!}
            {!! Html::style('assets/global/css/plugins.min.css') !!}
            <!-- END THEME GLOBAL STYLES -->
            <!-- BEGIN THEME LAYOUT STYLES -->
            {!! Html::style('assets/layouts/layout/css/layout.min.css') !!}
            {!! Html::style('assets/layouts/layout/css/themes/darkblue.min.css') !!}
            {!! Html::style('assets/layouts/layout/css/custom.min.css') !!}
            {!! Html::style('cus/sweetalert.css') !!}
            <!-- END THEME LAYOUT STYLES -->
            @yield('header')
            <link rel="shortcut icon" href="favicon.ico" />
         </head>
         <!-- END HEAD -->
         <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
               <!-- BEGIN HEADER INNER -->
               <div class="page-header-inner ">
                  <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                  <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                  <span></span>
                  </a>
                  <!-- END RESPONSIVE MENU TOGGLER -->
                  <div class="page-logo">
                     <a href="{{url('/home')}}">
                     <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default"> </a>
                     <div class="menu-toggler sidebar-toggler">
                        <span></span>
<<<<<<< HEAD
                        </a>
                        <!-- END RESPONSIVE MENU TOGGLER -->
                        <div class="page-logo">
                            <a href="index.html">
                            <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default"> </a>
                            <div class="menu-toggler sidebar-toggler">
                                <span></span>
                            </div>
                        </div>
                        <!-- END LOGO -->
                        <!-- END LOGO -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <!-- END NOTIFICATION DROPDOWN -->
                                                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                                                  <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                  <i class="icon-bell"></i>
                                                                  <span id="numNotification"class="badge badge-default numNotification"> </span>
                                                                  </a>
                                                                  <ul class="dropdown-menu">
                                                                      <li class="external">
                                                                          <h3>to show all
                                                                              <span class="bold numNotification">Notification</span> click
                                                                          </h3>
                                                                          <a href="{{url('/notifications')}}">view all</a>
                                                                      </li>

                                                                  </ul>
                                                              </li>

                                <!-- BEGIN INBOX DROPDOWN -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <li class="dropdown dropdown-extended dropdown-inbox " id="header_inbox_bar">
                                    <a href="javascript:;" title="messages" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i  class="icon-envelope-open"aria-hidden="true"></i>
                                    <span id="numMessage" class="badge badge-default numMessages"></span>
                                    </a>
          <ul class="dropdown-menu">
                                                                                <li class="external">
                                                                                    <h3>to show all
                                                                                        <span class="bold numNotification">Messages</span> click
                                                                                    </h3>
                                                                                    <a href="{{url('/messages')}}">view all</a>
                                                                                </li>

                                                                            </ul>
                                </li>
                                <!-- END INBOX DROPDOWN -->
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../uploads/{{Auth::user()->UserPhoto}}">
                                    <span class="username username-hide-on-mobile"> {{Auth::user()->UserName}} </span>
                                    <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        <li>
                                            <a href="{{url('/profile/'. Auth::user()->id )}}">
                                            <i class="icon-user"></i> My Profile </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="{{url('/logout')}}">
                                            <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                                <!-- BEGIN QUICK SIDEBAR TOGGLER -->

                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                    <!-- END HEADER INNER -->
                </div>
                <!-- END HEADER -->
                <!-- BEGIN HEADER & CONTENT DIVIDER -->
                <div class="clearfix"> </div>
                <!-- END HEADER & CONTENT DIVIDER -->
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar-wrapper">
                        <!-- BEGIN SIDEBAR -->
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
                            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                                <li class="sidebar-toggler-wrapper hide">
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                    <!-- END SIDEBAR TOGGLER BUTTON -->
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{url('/home')}}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{url('/nearby')}}" class="nav-link nav-toggle">
                                    <i class="icon-map"></i>
                                    <span class="title">Partners nearby </span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{url('/profile/'. Auth::user()->id )}}" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Profile</span>
                                    </a>
                                </li>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{url('/friends')}}" class="nav-link nav-toggle">
                                    <i class="icon-users"></i>
                                    <span class="title">Friends</span>
                                    </a>
                                </li>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{url('/myInvitations')}}" class="nav-link nav-toggle">
                                    <i class="icon-paper-plane"></i>
                                    <span class="title">Invites</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- END SIDEBAR MENU -->
                            <!-- END SIDEBAR MENU -->
                        </div>
                        <!-- END SIDEBAR -->
                    </div>
                    <!-- END SIDEBAR -->
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <div class="page-content">
                            @yield('content')
                        </div>
                        <!-- END CONTENT BODY -->
                    </div>
                    <!-- END CONTENT -->
                    <!-- BEGIN QUICK SIDEBAR -->
                    <a href="javascript:;" class="page-quick-sidebar-toggler">
                    <i class="icon-envelope-open"></i>
                    </a>


                    <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                        <div class="page-quick-sidebar">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Chat
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                    <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                        <ul class="media-list list-items" >


                                            <!-- BEGIN CONVERSATIONS -->

                                            <li class="media" data-bind="foreach: Convers">

                                                <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                                <div class="media-body">
                                                    <h4 class="media-heading" data-bind="text: Username"></h4>
                                                    <div class="media-heading-sub" data-bind="text: MessageContent">  </div>
                                                </div>

                                              </li>

                                            <!-- END CONVERSATION -->
                                        </ul>


                                    </div>
                                    <div class="page-quick-sidebar-item">
                                        <div class="page-quick-sidebar-chat-user">
                                            <div class="page-quick-sidebar-nav">
                                                <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                <i class="icon-arrow-left"></i>Back</a>
                                            </div>

                                            <div class="page-quick-sidebar-chat-user-messages">
                                                <!-- BEGIN MESSAGES -->

                                                <div class="post out">
                                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="javascript:;" class="name">Bob Nilson</a>
                                                        <span class="datetime">20:15</span>
                                                        <span class="body"> When could you send me the report ? </span>
                                                    </div>
                                                </div>
                                                <div class="post in">
                                                    <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                    <div class="message">
                                                        <span class="arrow"></span>
                                                        <a href="javascript:;" class="name">Ella Wong</a>
                                                        <span class="datetime">20:15</span>
                                                        <span class="body"> Its almost done. I will be sending it shortly </span>
                                                    </div>
                                                </div>
                                                <!--END MESSAGES  -->
                                            </div>
                                            <form class="page-quick-sidebar-chat-user-form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Type a message here...">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn green">
                                                        <i class="icon-paper-clip"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
=======
                     </div>
                  </div>
                  <!-- END LOGO -->
                  <!-- END LOGO -->
                  <!-- BEGIN TOP NAVIGATION MENU -->
                  <div class="top-menu">
                     <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- END NOTIFICATION DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                           <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           <i class="icon-bell"></i>
                           <span class="badge badge-default"> 7 </span>
                           </a>
                           <ul class="dropdown-menu">
                              <li class="external">
                                 <h3>You have
                                    <span class="bold">7 New</span> notification
                                 </h3>
                                 <a href="{{url('/notifications')}}">view all</a>
                              </li>
                              <li>
                                 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;">
                                    <ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                       <li>
                                          <a href="#">
                                          <span class="photo">
                                          <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                          <span class="subject">
                                          <span class="from"> Lisa Wong </span>
                                          <span class="time">Just Now </span>
                                          </span>
                                          <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                          </a>
                                       </li>
                                    </ul>
                                    <div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                           <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           <i class="icon-envelope-open"></i>
                           <span class="badge badge-default"> 4 </span>
                           </a>
                           <ul class="dropdown-menu">
                              <li class="external">
                                 <h3>You have
                                    <span class="bold">7 New</span> Messages
                                 </h3>
                                 <a href="/conversations">view all</a>
                              </li>
                              <li>
                                 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;">
                                    <ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                       <li>
                                          <a href="#">
                                          <span class="photo">
                                          <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                          <span class="subject">
                                          <span class="from"> Lisa Wong </span>
                                          <span class="time">Just Now </span>
                                          </span>
                                          <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                          <span class="photo">
                                          <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                          <span class="subject">
                                          <span class="from"> Richard Doe </span>
                                          <span class="time">16 mins </span>
                                          </span>
                                          <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                          <span class="photo">
                                          <img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                          <span class="subject">
                                          <span class="from"> Bob Nilson </span>
                                          <span class="time">2 hrs </span>
                                          </span>
                                          <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                          <span class="photo">
                                          <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                          <span class="subject">
                                          <span class="from"> Lisa Wong </span>
                                          <span class="time">40 mins </span>
                                          </span>
                                          <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                          <span class="photo">
                                          <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                          <span class="subject">
                                          <span class="from"> Richard Doe </span>
                                          <span class="time">46 mins </span>
                                          </span>
                                          <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                          </a>
                                       </li>
                                    </ul>
                                    <div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                           <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           <img alt="" class="img-circle" src="../uploads/{{Auth::user()->UserPhoto}}">
                           <span class="username username-hide-on-mobile"> {{Auth::user()->UserName}} </span>
                           <i class="fa fa-angle-down"></i>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-default">
                              <li>
                                 <a href="{{url('/profile/'. Auth::user()->id )}}">
                                 <i class="icon-user"></i> My Profile </a>
                              </li>
                              <li class="divider"> </li>
                              <li>
                                 <a href="{{url('/logout')}}">
                                 <i class="icon-key"></i> Log Out </a>
                              </li>
                           </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                           <a href="javascript:;" class="dropdown-toggle">
                           <i class="icon-logout"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <!-- END TOP NAVIGATION MENU -->
               </div>
               <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
               <!-- BEGIN SIDEBAR -->
               <div class="page-sidebar-wrapper">
                  <!-- BEGIN SIDEBAR -->
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
                     <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                           <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                           <div class="sidebar-toggler">
                              <span></span>
                           </div>
                           <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class="nav-item  ">
                           <a href="{{url('/home')}}" class="nav-link nav-toggle">
                           <i class="icon-home"></i>
                           <span class="title">Home</span>
                           </a>
                        </li>
                        <li class="nav-item  ">
                           <a href="{{url('/nearby')}}" class="nav-link nav-toggle">
                           <i class="icon-map"></i>
                           <span class="title">Partners nearby </span>
                           </a>
                        </li>
                        <li class="nav-item  ">
                           <a href="{{url('/profile/'. Auth::user()->id )}}" class="nav-link nav-toggle">
                           <i class="icon-user"></i>
                           <span class="title">Profile</span>
                           </a>
                        </li>
                        </li>
                        <li class="nav-item  ">
                           <a href="{{url('/friends')}}" class="nav-link nav-toggle">
                           <i class="icon-users"></i>
                           <span class="title">Friends</span>
                           </a>
                        </li>
                        </li>
                        <li class="nav-item  ">
                           <a href="{{url('/myInvitations')}}" class="nav-link nav-toggle">
                           <i class="icon-paper-plane"></i>
                           <span class="title">Invites</span>
                           </a>
                        </li>
                     </ul>
                     <!-- END SIDEBAR MENU -->
                     <!-- END SIDEBAR MENU -->
                  </div>
                  <!-- END SIDEBAR -->
               </div>
               <!-- END SIDEBAR -->
               <!-- BEGIN CONTENT -->
               <div class="page-content-wrapper">
                  <!-- BEGIN CONTENT BODY -->
                  <div class="page-content">
                     @yield('content')
                  </div>
                  <!-- END CONTENT BODY -->
               </div>
               <!-- END CONTENT -->
               <!-- BEGIN QUICK SIDEBAR -->
               <a href="javascript:;" class="page-quick-sidebar-toggler">
               <i class="icon-login"></i>
               </a>
               <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                  <div class="page-quick-sidebar">
                     <ul class="nav nav-tabs">
                        <li class="active">
                           <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Chat
                           </a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                           <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                              <ul class="media-list list-items">
                                 <!-- BEGIN CONVERSATIONS -->
                                 <li class="media">
                                    <div class="media-status">
                                       <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                       <h4 class="media-heading"></h4>
                                       <div class="media-heading-sub"> Project Manager </div>
                                    </div>
                                 </li>
                                 <!-- END CONVERSATION -->
                              </ul>
                           </div>
                           <div class="page-quick-sidebar-item">
                              <div class="page-quick-sidebar-chat-user">
                                 <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                    <i class="icon-arrow-left"></i>Back</a>
                                 </div>
                                 <div class="page-quick-sidebar-chat-user-messages">
                                    <!-- BEGIN MESSAGES -->
                                    <div class="post out">
                                       <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                       <div class="message">
                                          <span class="arrow"></span>
                                          <a href="javascript:;" class="name">Bob Nilson</a>
                                          <span class="datetime">20:15</span>
                                          <span class="body"> When could you send me the report ? </span>
                                       </div>
                                    </div>
                                    <div class="post in">
                                       <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                       <div class="message">
                                          <span class="arrow"></span>
                                          <a href="javascript:;" class="name">Ella Wong</a>
                                          <span class="datetime">20:15</span>
                                          <span class="body"> Its almost done. I will be sending it shortly </span>
                                       </div>
                                    </div>
                                    <!--END MESSAGES  -->
                                 </div>
                                 <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                       <input type="text" class="form-control" placeholder="Type a message here...">
                                       <div class="input-group-btn">
                                          <button type="button" class="btn green">
                                          <i class="icon-paper-clip"></i>
                                          </button>
                                       </div>
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
<<<<<<< HEAD
                    </div>
                    <!-- END QUICK SIDEBAR -->
                </div>
                <!-- END CONTAINER -->
                <!-- BEGIN FOOTER -->
                <div class="page-footer">
                    <div class="page-footer-inner"> 2017 &copy; Don't Eat Alone
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                </div>
                <!-- END FOOTER -->
                <!--[if lt IE 9]>
                {!! Html::script('assets/global/plugins/respond.min.js') !!}
                <
                {!! Html::script('assets/global/plugins/excanvas.min.js') !!}
                <![endif]-->
                <!-- BEGIN CORE PLUGINS -->
                {!! Html::script('assets/global/plugins/jquery.min.js') !!}
                {!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
                {!! Html::script('assets/global/plugins/js.cookie.min.js') !!}
                {!! Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}
                {!! Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
                {!! Html::script('assets/global/plugins/jquery.blockui.min.js') !!}
                {!! Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
                <!-- END CORE PLUGINS -->
                <!-- BEGIN PAGE LEVEL PLUGINS -->
                {!! Html::script('assets/global/plugins/moment.min.js') !!}
                {!! Html::script('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') !!}
                {!! Html::script('assets/global/plugins/morris/morris.min.js') !!}
                {!! Html::script('assets/global/plugins/morris/raphael-min.js') !!}
                {!! Html::script('assets/global/plugins/counterup/jquery.waypoints.min.js') !!}
                {!! Html::script('assets/global/plugins/counterup/jquery.counterup.min.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/amcharts.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/serial.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/pie.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/radar.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/themes/light.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/themes/patterns.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amcharts/themes/chalk.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/ammap/ammap.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') !!}
                {!! Html::script('assets/global/plugins/amcharts/amstockcharts/amstock.js') !!}
                {!! Html::script('assets/global/plugins/fullcalendar/fullcalendar.min.js') !!}
                {!! Html::script('assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js') !!}
                {!! Html::script('assets/global/plugins/flot/jquery.flot.min.js') !!}
                {!! Html::script('assets/global/plugins/flot/jquery.flot.resize.min.js') !!}
                {!! Html::script('assets/global/plugins/flot/jquery.flot.categories.min.js') !!}
                {!! Html::script('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') !!}
                {!! Html::script('assets/global/plugins/jquery.sparkline.min.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') !!}
                {!! Html::script('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') !!}
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL SCRIPTS -->
                {!! Html::script('assets/global/scripts/app.min.js') !!}
                <!-- END THEME GLOBAL SCRIPTS -->
                <!-- BEGIN PAGE LEVEL SCRIPTS -->
                {!! Html::script('assets/pages/scripts/dashboard.min.js') !!}
                <!-- END PAGE LEVEL SCRIPTS -->
                <!-- BEGIN THEME LAYOUT SCRIPTS -->
                {!! Html::script('assets/layouts/layout/scripts/layout.min.js') !!}
                {!! Html::script('assets/layouts/layout/scripts/demo.min.js') !!}
                {!! Html::script('assets/layouts/global/scripts/quick-sidebar.min.js') !!}
                 {!! Html::script('cus/sweetalert.min.js') !!}

                 <script>

                 function navBarNotification() {

                    var xhttp = new XMLHttpRequest();
                       xhttp.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {
                         document.getElementById("numNotification").innerHTML = this.responseText;
                         }
                       };
                       xhttp.open("GET", "navBarNotification", true);
                       xhttp.send();


                 }


                  function navBarMessage() {

                    var xhttp = new XMLHttpRequest();
                       xhttp.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {
                         document.getElementById("numMessage").innerHTML = this.responseText;
                         }
                       };
                       xhttp.open("GET", "navBarMessage", true);
                       xhttp.send();


                 }
           /**    function getConversation() {

                    var xhttp = new XMLHttpRequest();
                       xhttp.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {
                        // document.getElementById("numMessage").innerHTML = this.responseText;
                        // alert(this.response)
                         var json = this.response;
                                 alert(json)  ;
                             $.each(data, function(index) {
                                         alert(data[index].TEST1);
                                         alert(data[index].TEST2);
                                     });
                       };
                       }
                       xhttp.open("GET", "Conversation", true);
                       xhttp.send();


                   }**/





                     window.onload=navBarMessage();
                   window.onload=navBarNotification();
                 //  window.onload=getConversation();


                 </script>


              @if(Session::has('flash_message'))


                    <script>
                    swal({   title: "{{Session::get('flash_message')}} .",   text: " ",   timer: 2000,   showConfirmButton: false });
                    </script>


              @endif
                @yield('footer')
                <!-- END THEME LAYOUT SCRIPTS -->
            </body>
        </html>
=======
                     </div>
                  </div>
               </div>
               <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
               <div class="page-footer-inner"> 2017 &copy; Don't Eat Alone
               </div>
               <div class="scroll-to-top">
                  <i class="icon-arrow-up"></i>
               </div>
            </div>
            <!-- END FOOTER -->
            <!--[if lt IE 9]>
            {!! Html::script('assets/global/plugins/respond.min.js') !!}
            <
            {!! Html::script('assets/global/plugins/excanvas.min.js') !!}
            <![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            {!! Html::script('assets/global/plugins/jquery.min.js') !!}
            {!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
            {!! Html::script('assets/global/plugins/js.cookie.min.js') !!}
            {!! Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}
            {!! Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
            {!! Html::script('assets/global/plugins/jquery.blockui.min.js') !!}
            {!! Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            {!! Html::script('assets/global/plugins/moment.min.js') !!}
            {!! Html::script('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') !!}
            {!! Html::script('assets/global/plugins/morris/morris.min.js') !!}
            {!! Html::script('assets/global/plugins/morris/raphael-min.js') !!}
            {!! Html::script('assets/global/plugins/counterup/jquery.waypoints.min.js') !!}
            {!! Html::script('assets/global/plugins/counterup/jquery.counterup.min.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/amcharts.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/serial.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/pie.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/radar.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/themes/light.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/themes/patterns.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amcharts/themes/chalk.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/ammap/ammap.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') !!}
            {!! Html::script('assets/global/plugins/amcharts/amstockcharts/amstock.js') !!}
            {!! Html::script('assets/global/plugins/fullcalendar/fullcalendar.min.js') !!}
            {!! Html::script('assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js') !!}
            {!! Html::script('assets/global/plugins/flot/jquery.flot.min.js') !!}
            {!! Html::script('assets/global/plugins/flot/jquery.flot.resize.min.js') !!}
            {!! Html::script('assets/global/plugins/flot/jquery.flot.categories.min.js') !!}
            {!! Html::script('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') !!}
            {!! Html::script('assets/global/plugins/jquery.sparkline.min.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') !!}
            {!! Html::script('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') !!}
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            {!! Html::script('assets/global/scripts/app.min.js') !!}
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            {!! Html::script('assets/pages/scripts/dashboard.min.js') !!}
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            {!! Html::script('assets/layouts/layout/scripts/layout.min.js') !!}
            {!! Html::script('assets/layouts/layout/scripts/demo.min.js') !!}
            {!! Html::script('assets/layouts/global/scripts/quick-sidebar.min.js') !!}
            {!! Html::script('cus/sweetalert.min.js') !!}
            @if(Session::has('flash_message'))
            <script>
               swal({   title: "{{Session::get('flash_message')}} .",   text: " ",   timer: 2000,   showConfirmButton: false });
            </script>
            @endif
            @yield('footer')
            <!-- END THEME LAYOUT SCRIPTS -->
         </body>
      </html>
>>>>>>> 7da3f48512898d6503050ad1574c8325e7a8f7f1
