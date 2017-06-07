<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Don't eat alone|
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
         {!! Html::style('assets/global/plugins/select2/css/select2.min.css') !!}

         {!! Html::style('assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
         {!! Html::style('assets/global/css/components.min.css') !!}

         {!! Html::style('assets/global/css/plugins.min.css') !!}

        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
         {!! Html::style('assets/pages/css/login-4.min.css') !!}
         {!! Html::style('cus/sweetalert.css') !!}

        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
<body id=" login">

  <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">

                <img src="{{Request::Root()}}/assets/pages/img/logo-big.png" alt="" />
            </a>
        </div>
         <!-- END LOGO -->
                <!-- BEGIN LOGIN -->
                <div class="content">



@yield('content')


  </div>
        <!-- END LOGIN -->

        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> 2017 &copy;Don't Eat Alone </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>


 {!! Html::script('assets/global/plugins/respond.min.js') !!}


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
         {!! Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}

         {!! Html::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}

         {!! Html::script('assets/global/plugins/select2/js/select2.full.min.js') !!}

         {!! Html::script('assets/global/plugins/backstretch/jquery.backstretch.min.js') !!}


        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
         {!! Html::script('assets/global/scripts/app.min.js') !!}

        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         {!! Html::script('assets/pages/scripts/login-4.min.js') !!}
          {!! Html::script('cus/sweetalert.min.js') !!}

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->


        @yield('footer')
    </body>
</html>
