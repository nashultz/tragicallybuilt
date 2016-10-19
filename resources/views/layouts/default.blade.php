<!DOCTYPE html>
<html>
<head>
    <title>@yield('page_title') &mdash; Tragically Built Productions</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href="themes/default/assets/css/app.css" rel="stylesheet" type="text/css">
</head>
<body id="page-top">

<!-- Member Navigation -->
@if(Auth::check())
    <div class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#membernavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="membernavbar">

                </div>
            </div>
        </div>
    </div>
@endif

<div class="brand"><h1>Tragically Built Productions</h1></div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container"><div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Tragically Built Productions</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="mainnav nav navbar-nav">

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div></div>
    <!-- /.container -->
</nav>

<div class="container">
    @include('flash::message')
</div>

<div class="container">
    @yield('content')
</div>

<div>&nbsp;</div><div class="clearfix"></div>



<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
</body>
</html>
