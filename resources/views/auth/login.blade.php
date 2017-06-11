<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login</title>

  <link rel="apple-touch-icon" href="{{ url('../images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{ url('../images/favicon.ico')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ url('../css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('../css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{ url('../css/site.min.css')}}">

  <link rel="stylesheet" href="{{ url('../vendor/animsition/animsition.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/asscrollable/asScrollable.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/switchery/switchery.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/intro-js/introjs.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/slidepanel/slidePanel.css')}}">
  <link rel="stylesheet" href="{{ url('../vendor/flag-icon-css/flag-icon.css')}}">


  <!-- Page -->
  <link rel="stylesheet" href="{{ url('../css/pages/login.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ url('../fonts/web-icons/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{ url('../fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../vendor/media-match/media.match.min.js"></script>
    <script src="../vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ url('../vendor/modernizr/modernizr.js')}}"></script>
  <script src="{{ url('../vendor/breakpoints/breakpoints.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="{{ url('../images/logo2.png')}}" alt="...">
        <h2 class="brand-text">Mr. W</h2>
      </div>
      <p>Sign into your pages account</p>
      <form role="form" method="POST" action="{{ url('/login') }}" id="login">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="sr-only" for="inputUsername">Username</label>
          <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password"
          placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      </form>
      <!-- <p>Still no account? Please go to <a href="{{ url('/register')}}">Register</a></p> -->

      <footer class="page-copyright">
        <p>WEBSITE BY Mr.W</p>
        <p>© 2015. All RIGHT RESERVED.</p>
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="{{ url('../vendor/jquery/jquery.js')}}"></script>
  <script src="{{ url('../vendor/bootstrap/bootstrap.js')}}"></script>
  <script src="{{ url('../vendor/animsition/jquery.animsition.js')}}"></script>
  <script src="{{ url('../vendor/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{ url('../vendor/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{ url('../vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{ url('../vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

  <!-- Plugins -->
  <script src="{{ url('../vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{ url('../vendor/intro-js/intro.js')}}"></script>
  <script src="{{ url('../vendor/screenfull/screenfull.js')}}"></script>
  <script src="{{ url('../vendor/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{ url('../vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

  <!-- Scripts -->
  <script src="{{ url('../js/core.js')}}"></script>
  <script src="{{ url('../js/site.js')}}"></script>

  <script src="{{ url('../js/sections/menu.js')}}"></script>
  <script src="{{ url('../js/sections/menubar.js')}}"></script>
  <script src="{{ url('../js/sections/sidebar.js')}}"></script>

  <script src="{{ url('../js/configs/config-colors.js')}}"></script>
  <script src="{{ url('../js/configs/config-tour.js')}}"></script>

  <script src="{{ url('../js/components/asscrollable.js')}}"></script>
  <script src="{{ url('../js/components/animsition.js')}}"></script>
  <script src="{{ url('../js/components/slidepanel.js')}}"></script>
  <script src="{{ url('../js/components/switchery.js')}}"></script>
  <script src="{{ url('../js/components/jquery-placeholder.js')}}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>
