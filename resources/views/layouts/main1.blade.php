<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Synthetica HTML5/CSS3 Template by Peter Finlan</title>
    <meta name="description" content="A free html template with Sketch design made with Bootstrap">
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Peter Finlan for Codrops" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon generated by http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#66e0e5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- end favicon links -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="container-fluid">
    <div class="row">
        <div class="header-nav-wrapper">
            <div class="logo">
                <a href="/index.html"><img src="img/synthetica-logo.png" alt="Synthetica Freebie Peter Finlan"></a>
            </div>
            <div class="primary-nav-wrapper">
                <nav>
                    <ul class="primary-nav">
                        <li><a href="#intro">Home</a></li>
                        <li><a href="#articles">Questions</a></li>
                        <li><a href="#freebies">Advices</a></li>
                        <li><a href="#intro">Learn more</a></li>
                        <li><a href="#team">Our Staff</a></li>
                        <li data-toggle="modal" data-target="#myModal"><a>Login</a></li>
                        <li data-toggle="modal" data-target="#myModal2"><a>Sign Up</a></li>
                    </ul>
                </nav>
                <div class="secondary-nav-wrapper">
                    <ul class="secondary-nav">
                        <li class="subscribe"><a href="#get-started">Subscribe</a></li>
                        <li class="search"><a href="#search" class="show-search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="search-wrapper">
                    <ul class="search">
                        <li>
                            <input type="text" id="search-input" placeholder="Start typing then hit enter to search">
                        </li>
                        <li>
                            <a href="#" class="hide-search"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navicon">
                <a class="nav-toggle" href="#"><span></span></a>
            </div>
        </div>
    </div>


    <div class="container">
        <!--<div id="demo" class="collapse">-->
        <!--<h1>Main</h1>-->
        <!--</div>-->
        <div class="row">
            <div class="col-md-2">
                @section('sidebar')
                    Sidebar
                @show
            </div>
            <div class="col-md-10">
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif
                @if ($errors->any())
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                @endif

                @yield('content')
            </div>
        </div>
    </div><!-- /.container -->


    <!-- SECTION: Footer -->
    <footer class="has-padding footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-branding">
                    <img class="footer-branding-logo" src="img/synthetica-logo.png" alt="Synthetica freebie html5 css3 template peter finlan logo">
                    <p>A free HTML5/CSS3 template by <a href="http://www.peterfinlan.com">Peter Finlan</a>, exclusively for <span class="bold-italic">Codrops</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 footer-nav">
                    <ul class="footer-primary-nav">
                        <li><a href="#intro">The Collective</a></li>
                        <li><a href="#team">Our Staff</a></li>
                        <li><a href="#articles">Questions</a></li>
                        <li><a href="#freebies">Advices</a></li>

                    </ul>



                </div>
            </div>
        </div>
    </footer>
    <!-- END SECTION: Footer -->
    <!-- JS CDNs -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="http://vjs.zencdn.net/5.4.6/video.min.js"></script>
    <!-- jQuery local fallback -->
    <script>
        window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
    </script>
    <!-- JS Locals -->
    <script src="js/min/bootstrap.min.js"></script>
    <script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="js/min/retina.min.js"></script>
    <script src="js/min/jquery.waypoints.min.js"></script>
    <script src="js/min/flickity.pkgd.min.js"></script>
    <script src="js/min/scripts-min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID and uncomment -->
    <!--
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
    -->
</body>

</html>

<script>
    $('#medical').on('click',function(){

        $('#myModal').hide();
        $('#myModal1').modal('show');


    })
</script>