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
    <title>Soft Management</title>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="container-fluid">
    <div class="row">
        <div class="header-nav-wrapper">
            <div class="logo" style="border-bottom-width: 0px;width: 250px;height: 104px;padding-top: 5px;padding-bottom: 5px;">
                <a href="/"><img src="img/logo.png" height="80" width="100" alt="Soft Management" ></a>
            </div>
            <div class="primary-nav-wrapper">
                <nav>
                    <ul class="primary-nav">
                        @if(Auth::user())
                        <li><strong>Welcome {{Auth::user()->name}}</strong></li>
                            @elseif(auth()->guard('medicalcompany')->user())
                            <li><strong>Welcome {{auth()->guard('medicalcompany')->user()->name}}</strong></li>
                        @endif
                        <li><a href="#intro">Home</a></li>
                        @if(Auth::user())
                            @if(Auth::user()->role_id==3)
                                <li><a href="/assistant">My Profile</a></li>
                            @elseif(Auth::user()->role_id==4)
                                <li><a href="/physician">My Profile</a></li>

                            @endif
                        @endif
                            @if(auth()->guard('medicalcompany')->user())
                                <li><a href="/medicalcompany">My Profile</a></li>
                            @endif
                        <li><a href="#freebies">Questions</a></li>
                        <li><a href="#articles">Advices</a></li>
                        <li><a href="#intro">Learn more</a></li>
                        <li><a href="#team">Our Staff</a></li>
                        @if(!Auth::user() && !auth()->guard('medicalcompany')->user())

                            <li data-toggle="modal" data-target="#myModal"><a>Login</a></li>
                            <li data-toggle="modal" data-target="#myModal2"><a>Sign Up</a></li>
                        @endif
                        @if(Auth::user())
                            <li><a href="/auth/logout">Log Out</a></li>
                        @elseif(auth()->guard('medicalcompany')->user())
                            <li><a href="/medicalcompany/logout">Log Out</a></li>
                        @endif



                    </ul>
                </nav>

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
    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>--}}

    <!-- Modal -->
    {{--login Modal--}}

    <div class="modal fade" id="myModal" role="dialog">










             
                






        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">



   @if (session('status1'))
                         <div class="alert alert-danger" id="msg">
                              {{ session('status1') }}  
                         </div>


               <script>


                       $(document).ready(function () {
                       $('#myModal').modal('show');
                                                    });


                </script>
                       @endif




                    <p><form class="form-horizontal" role="form" method="POST" action="{{ url('user/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="loginemail">

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" id="loginemail">

                                



                            </div>
                        </div>
                </div>
               </p>
                <div class="modal-footer">

                    <button  id="medicalcompany" type="button" class="btn btn-default">
                        <i class="fa fa-btn fa-sign-in"></i>AreYouMedicalCompany?
                    </button>
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                    </form>
                </div>

</div>
</div>
        </div>
{{--End of login Modal--}}

{{--starting Modal of Medical Company--}}
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Medical Company Login</h4>
                </div>
                <div class="modal-body">
                    <p><form class="form-horizontal" role="form" method="POST" action="{{ url('/medicalcompany/login') }}">
                        {{ csrf_field() }}



@if (session('status'))
    <div class="alert alert-danger" id="medicalerrormsg">
        {{ session('status') }} 
    </div>


<script>

$(document).ready(function () {
$('#myModal1').modal('show');

});


</script>
@endif















                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="medicallogin">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" id="medicallogin">

                               
                            </div>
                        </div>





                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--Ending Modal of Medical Company--}}

{{--Start of Registeration Modal--}}
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registeration Form</h4>
            </div>
            <div class="modal-body">
                <p> <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                    {{ csrf_field() }}

                      

















                    <div class="form-group"  >
                        <label class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input type="hidden" name="role_id" value="5">
                            <input type="text" class="form-control" name="name"  id="name" value="{{ old('name') }}" >
                            <div id="nameerror"></div>

@if($errors->has('name'))


<script>

$(document).ready(function () {
$('#myModal2').modal('show');
 

});

</script>



@endif



                            @if ($errors->has('name'))
                                <span class="help-block" id="registeralert" >
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                            <div id="emailerror">

                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block" id="registeralert2">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" id="password">

                            <div id="passworderror"></div>

                            @if ($errors->has('password'))
                                <span class="help-block" id="registeralert3">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation" id="passwordconfirm">
                            <div id="passwordconfirmerror"></div>  <div id="message"></div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block" id="registeralert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


               </p>
            </div>
            <div class="modal-footer">

                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-btn fa-user"></i>Register
                        </button>

                 </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>



{{--End of Registeration Modal--}}
<header class="hero">
    <div class="carousel js-flickity">
        <div class="carousel-cell" style="background-image: url(img/clinic4.jpg);">
            <div class="hero-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="wp1"> </h1>
                            <div style="margin-top: 250px;"></div>
                            @if(Auth::user())
                                    <a href="/reservations/create" class="btn primary wp2">Reserve Online</a>

                                @if(Auth::user()->role_id==2||Auth::user()->role_id==5)
                                    <a href="/questions/create" class="btn primary wp2 mm">Ask Question</a>
                                @endif
                            @else
                                <span data-toggle="modal" data-target="#myModal"> <a class="btn primary wp2 mm">Ask Question</a></span>

                                <span data-toggle="modal" data-target="#myModal"> <a class="btn primary wp2">Reserve Online</a></span>
                            @endif
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
                            <p><span class="bold italic"></span> </p>
                        </div>
                    </div>

            </div>
        </div>
        <div class="carousel-cell" style="background-image: url(img/hero-bg-02.jpg);">
            <div class="hero-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="wp1"></h1>
                            <a href="http://tympanus.net/codrops/?p=26570" class="btn primary wp2">Download Sketch File</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
                            <p>Create your landing page in minutes with Synthetica's Sketch style guide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url(img/hero-bg-03.jpg);">
            <div class="hero-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="wp1">Download Synthetica today, it's free forever.</h1>
                            <a href="http://tympanus.net/codrops/?p=26570" class="btn primary wp2">Download Template</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
                            <p>Available exclusively from Codrops.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='mouse-container'>
        <a href="#intro">
            <div class='mouse'>
                <span class='scroll-down'></span>
            </div>
        </a>
    </div>
</header>
<!-- SECTION: Intro -->
<section class="collective has-padding" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>The collective</h4>
            </div>
            <div class="col-md-9">
                <p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress, banjo normcore trust fund hella. Kinfolk gluten-free lo-fi quinoa. Pabst kitsch ennui hoodie meggings banjo. Schlitz tacos kitsch godard before they sold out. Kale chips chillwave kickstarter photo booth cronut cold-pressed. Banjo fixie umami kombucha affogato gluten-free authentic slow-carb hashtag, hammock pour-over chambray viral VHS normcore.</p>
                <div class="video-player">
                    <video id="video_synth" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="568" height="300" poster="img/video-cover.jpg" data-setup='{}'>
                        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                        <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm" />
                        <source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg" />
                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                    </video>
                </div>
                <p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress, banjo normcore trust fund hella. Kinfolk gluten-free lo-fi quinoa. </p>
                <p>Pabst kitsch ennui hoodie meggings banjo. Schlitz tacos kitsch godard before they sold out. Kale chips chillwave kickstarter photo booth cronut cold-pressed. Banjo fixie umami kombucha affogato gluten-free authentic slow-carb hashtag, hammock pour-over chambray viral VHS normcore.</p>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION: Intro -->
<!-- SECTION: Crew -->
<section class="crew has-padding alternate-bg" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>The Crew</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="crew-member" style="background-image: url(img/crew-peter-finlan.jpg)">
                    <figure>
                        <figcaption class="overlay">
                            <h2>Peter Finlan</h2>
                            <p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress.</p>
                            <div class="crew-socials">
                                <ul>
                                    <li><a href="http://www.twitter.com/peterfinlan/"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="http://www.linkedin.com/in/peterfinlan/"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="crew-member" style="background-image: url(img/crew-blaz-robar.jpg)">
                    <figure>
                        <figcaption class="overlay">
                            <h2>Blaz Robar</h2>
                            <p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress.</p>
                            <div class="crew-socials">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="crew-member" style="background-image: url(img/crew-mary-lou.jpg)">
                    <figure>
                        <figcaption class="overlay">
                            <h2>Mary Lou</h2>
                            <p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress.</p>
                            <div class="crew-socials">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <article class="crew-member" style="background-image: url('img/crew-dude.jpg')">
                    <figure>
                        <figcaption class="overlay">
                            <h2>Kobe West</h2>
                            <p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress.</p>
                            <div class="crew-socials">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION: Crew -->
<!-- SECTION: Articles -->
<section class="latest-articles has-padding alternate-bg" id="articles">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h4>Latest Advices</h4>
            </div>
            {{--<div class="col-md-8 col-sm-8 sort">--}}
                {{--<h5>Sort by</h5>--}}
                {{--<select name="article-sort" id="inputArticle-Sort" class="">--}}
                    {{--<option value="">Experience Design</option>--}}
                    {{--<option value="">Visual Design</option>--}}
                    {{--<option value="">UI Patterns</option>--}}
                    {{--<option value="">Product Design</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        </div>
        <div class="row"><!--row of advices list-->
            @foreach($latestAdvices as $latestAdvice)
            <div class="col-md-4">
                <article class="article-post">
                    <a href="#">
                        <div class="article-image has-overlay" style="background-image: url(img/article-01.jpg)">
                            <span class="featured-tag">Featured</span>
                        </div>
                        <figure>
                            <figcaption>

                                <p>{{$latestAdvice->advice}}</p>
                            </figcaption>
                        </figure>
                    </a>
                    {{--<ul class="article-footer">--}}
                        {{--<li class="article-category">--}}
                            {{--<a href="#">Product</a>--}}
                        {{--</li>--}}
                        {{--<li class="article-comments">--}}
                            {{--<span><i class="fa fa-comments"></i> 51</span>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </article>
            </div>
        @endforeach
        <div class="row is-centered">
            <a href="/advices" class="btn secondary view-more">View more</a>
        </div>
    </div>
</section>
<!-- END SECTION: Articles -->
<!-- SECTION: Freebies -->
<section class="freebies has-padding" id="freebies">
    <div class="container freebies-intro">
        <div class="row">
            <div class="col-md-12">
                <h4>Freshest Questions</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 content-left">
                <p>A posuere donec senectus suspendisse bibendum
                    magna ridiculus a justo orci parturient suspendisse 
                    ad rhoncus cursus ut parturient viverra elit aliquam 
                    ultrices est sem. Tellus nam ad fermentum ac enim est 
                    duis facilisis congue a lacus adipiscing consequat risus 
                    consectetur scelerisque integer suspendisse a mus integer
                    elit.</p>
            </div>
            <div class="col-md-6 content-right">
                <p>A posuere donec senectus suspendisse bibendum magna 
                    ridiculus a justo orci parturient suspendisse ad rhoncus 
                    cursus ut parturient viverra elit aliquam ultrices est 
                    sem. Tellus nam ad fermentum ac enim est duis facilisis 
                    congue a lacus adipiscing consequat risus consectetur 
                    scelerisque integer suspendisse a mus integer elit.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row"><!--row of question list-->
            @foreach ($latestQuestions as $latestQuestion)
            <div class="col-md-6 no-padding">
                <article class="item wp5">
                    <figure class="has-overlay">
                        <figcaption class="overlay">
                            <div class="like-share-wrapper">
                                <ul>
                                    <li>
                                        <div class="like-button-wrapper">
                                            <a href="#" class="like_button"><i class="like-counter fa fa-heart-o"></i></a>
                                            <span class="count">0</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                                <div class="freebie-content">
                                    <span class="date">03/01/2016</span>
                                    <h2>{{$latestQuestion->question_specific}}</h2>
                                    <h2>{{$latestQuestion->answers}}</h2>

                                    <div class="group">
                                        <a href="http://tympanus.net/codrops/2015/09/16/freebie-land-io-ui-kit-landing-page-design-sketch/" class="btn secondary">Download</a>
                                    </div>
                                </div>
                        </figcaption>
                        <img src="img/landio-freebie.jpg" alt="Land.io Freebie Peter Finlan">
                    </figure>
                </article>
            </div>
            @endforeach
        </div>


            <div class="is-centered">
                <a href="/questions" class="btn secondary view-more">View more</a>
            </div>
        </div>
    </div>
</section>
</body>
<!-- END SECTION: Freebies -->
<!-- SECTION: Footer -->
<footer class="has-padding footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-branding">
                <img class="footer-branding-logo" src="img/synthetica-logo.png" alt="Synthetica freebie html5 css3 template peter finlan logo">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 footer-nav">
                <ul class="footer-primary-nav">
                    <li><a href="#intro">The Collective</a></li>
                    <li><a href="#team">Our Staff</a></li>
                    <li><a href="#freebies">Questions</a></li>
                    <li><a href="#articles">Advices</a></li>

                </ul>



            </div>
        </div>
    </div>
</footer>
<!-- END SECTION: Footer -->
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
{!! Html::script('/js/app.js') !!}
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



