<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>{{ $title }} | Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    {{ HTML::style("packages/soknann/reg/bs-admin/plugins/bootstrap/css/bootstrap.css") }}
    <?php echo HTML::style("packages/soknann/reg/bs-admin/css/main.css"); ?>
    <?php echo HTML::style("packages/soknann/reg/bs-admin/css/theme.css"); ?>
    <?php echo HTML::style("packages/soknann/reg/bs-adminassets/css/MoneAdmin.css"); ?>
    <?php echo HTML::style("packages/soknann/reg/bs-admin/plugins/Font-Awesome/css/font-awesome.css"); ?>
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    @yield('css')

    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >
<!-- MAIN WRAPPER -->
<div id="wrap" >

<!-- HEADER SECTION -->
    @include('soknann/reg::template.header')
<!-- END HEADER SECTION -->

<!-- MENU SECTION -->
    @if(Auth::check())
        @include('soknann/reg::template.left')
    @endif
<!--END MENU SECTION -->

<!--Content Section-->
    @yield('content')
<!--End Content-->

<!-- RIGHT STRIP  SECTION -->
    @if(Auth::check())
        @include('soknann/reg::template.right')
    @endif
<!-- END RIGHT STRIP  SECTION -->
</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
@if(Auth::check())
    @include('soknnan/reg::template.footer')
@endif
<!--END FOOTER -->


<!-- GLOBAL SCRIPTS -->
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/jquery-2.0.3.min.js"); ?>
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/bootstrap/js/bootstrap.min.js"); ?>
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js"); ?>
<!-- END GLOBAL SCRIPTS -->

<!-- PAGE LEVEL SCRIPTS -->
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/flot/jquery.flot.js"); ?>
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/flot/jquery.flot.resize.js"); ?>
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/flot/jquery.flot.time.js"); ?>
<?php echo HTML::script("packages/soknann/reg/bs-admin/plugins/flot/jquery.flot.stack.js"); ?>
<?php echo HTML::script("packages/soknann/reg/bs-admin/js/for_index.js"); ?>

<!-- END PAGE LEVEL SCRIPTS -->
@yield('js')

</body>

<!-- END BODY -->
</html>