<!doctype html>
<html lang="en-US">

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 20:03:00 GMT -->
<head>
    <base href="{{asset('/')}}">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streamit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" href="index_resource/images/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index_resource/css/bootstrap.min.css"/>
    <!-- Typography CSS -->
    <link rel="stylesheet" href="index_resource/css/typography.css">
    <!-- Style -->
    <link rel="stylesheet" href="index_resource/css/style.css"/>
    <!-- Responsive -->
    <link rel="stylesheet" href="index_resource/css/responsive.css"/>
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Header -->
<header id="main-header">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>

                        <a class="navbar-brand" href="{{route('view.index')}}"> <img class="img-fluid logo"
                                                                                     src="index_resource/images/logo.png"
                                                                                     alt="streamit"/> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        </div>
                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                               data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li>
                                            <a href="#" class="search-toggle">
                                                <i class="ri-search-line"></i>
                                            </a>
                                            <div class="search-box iq-search-bar">
                                                <form method="post" action="{{route('guest.resultSearch')}}">
                                                    @csrf
                                                    <div class="form-group position-relative">
                                                        <input id="search" name="search" type="text"
                                                               class="text search-input font-size-12"
                                                               placeholder="type here to search...">
                                                        <i class="search-link ri-search-line"></i>

                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="iq-user-dropdown search-toggle d-flex align-items-center">
                                                <img src="index_resource/images/user/user.jpg"
                                                     class="img-fluid avatar-40 rounded-circle"
                                                     alt="user">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0">
                                <li class="nav-item nav-icon">
                                    <a href="#" class="search-toggle device-search">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="search-box iq-search-bar d-search">
                                        <form action="{{route('guest.resultSearch')}}" class="searchbox">
                                            @csrf
                                            <div class="form-group position-relative">
                                                <input name="search" type="text" class="text search-input font-size-12"
                                                       placeholder="type here to search...">
                                                <i class="search-link ri-search-line"></i>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                       data-toggle="search-toggle">
                                        <img src="index_resource/images/user/user.jpg"
                                             class="img-fluid avatar-40 rounded-circle" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                <br>
                                                    {{\Illuminate\Support\Facades\Auth::user()->email}}
                                                            @foreach($users as $user)
                                                        <a href="{{route('guest.profile', \Illuminate\Support\Facades\Auth::user()->id)}}"
                                                            @endforeach
                                                           class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-file-user-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Manage Profile</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="{{route('admin.logout')}}"
                                                           class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <i class="ri-logout-circle-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 ">Logout</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        @else
                                                            <a href="{{route('login')}}"
                                                               class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-logout-circle-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Log in</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Slider Start -->
<section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
        @foreach($movieSlide as $key => $movie)
            <div class="slide slick-bg s-bg-1" style="background-image: url('{{$movie->getNameImage()}}')">
                <div class="container-fluid position-relative h-100">
                    <div class="slider-inner h-100">
                        <div class="row align-items-center  h-100">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <a href="javascript:void(0);">
                                    <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                        <img src="index_resource/images/logo.png" class="c-logo" alt="streamit">
                                    </div>
                                </a>
                                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                    data-delay-in="0.6">{{$movie->title}}</h1>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2">{{$movie->description}}
                                </p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp"
                                     data-delay-in="1.2">
                                    <a href="" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                        aria-hidden="true"></i>Play Now</a>
                                    <a href="" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>
                        <div class="trailor-video">
                            <a href="{{$movie->getNameVideo()}}" class="video-open playbtn">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                     enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                              <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10"
                                       points="73.5,62.5 148.5,105.8 73.5,149.1 "/>
                                    <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8"
                                            r="103.3"/>
                           </svg>
                                <span class="w-trailor">Watch</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="test"></circle>
        </symbol>
    </svg>
</section>
<!-- Slider End -->
<!-- MainContent -->
<div class="main-content">
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">All Movie</h4>
                        <a href="movie-category.html" class="text-primary">View all</a>
                    </div>
                    <div class="favorites-contens">
                        <ul class="favorites-slider list-inline  row p-0 mb-0">
                            @foreach($movies as $key => $movie)
                                <li class="slide-item">
                                    <a href="{{route('view.detail',$movie->id)}}">
                                        <div class="block-images position-relative">
                                            <div class="img-box">
                                                <img src="{{$movie->getNameImage()}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                                <h6>{{$movie->title}}</h6>
                                                <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                                </div>
                                            </div>
                                            <div class="block-social-info">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Your Favorites</h4>
                        <a href="movie-category.html" class="text-primary">View all</a>
                    </div>
                    <div class="favorites-contens">
                        <ul class="favorites-slider list-inline  row p-0 mb-0">
                            @foreach($movies as $key => $movie)
                                @if($movie->status == 1)
                                    <li class="slide-item">
                                        <a href="{{route('view.detail',$movie->id)}}">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img src="{{$movie->getNameImage()}}" class="img-fluid" alt="">
                                                </div>
                                                <div class="block-description">
                                                    <h6>{{$movie->title}}</h6>
                                                    <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="iq-upcoming-movie">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Upcoming Movies</h4>
                        <a href="movie-category.html" class="text-primary">View all</a>
                    </div>
                    <div class="upcoming-contens">
                        <ul class="favorites-slider list-inline row p-0 mb-0">
                            @foreach($movies as $key => $movie)
                                @if($movie->status == 2)
                                    <li class="slide-item 11111">
                                        <a href="{{route('view.detail',$movie->id)}}">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img src="{{$movie->getNameImage()}}" class="img-fluid" alt="">
                                                </div>
                                                <div class="block-description">
                                                    <h6>{{$movie->title}}</h6>
                                                    <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</section>
<section id="parallex" class="parallax-window">
    <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100 parallaxt-details">
            <div class="col-lg-4 r-mb-23">
                <div class="text-left">
                    <a href="javascript:void(0);">
                        <img src="index_resource/images/parallax/parallax-logo.png" class="img-fluid" alt="bailey">
                    </a>
                    <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                        <ul
                            class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                            <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                                                                                      aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                                                                           aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                                                                           aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                                                                           aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                                                                                           aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <span class="text-white ml-3">9.2 (lmdb)</span>
                    </div>
                    <div class="movie-time d-flex align-items-center mb-3">
                        <div class="badge badge-secondary mr-3">13+</div>
                        <h6 class="text-white">2h 30m</h6>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                    <div class="parallax-buttons">
                        <a href="" class="btn btn-hover">Play Now</a>
                        <a href="" class="btn btn-link">More details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="parallax-img">
                    <a href="">
                        <img src="index_resource/images/parallax/p1.jpg" class="img-fluid w-100" alt="bailey">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="iq-trending" class="s-margin">
    <footer class="mb-0">
        <div class="container-fluid">
            <div class="block-space">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <ul class="f-link list-unstyled mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="movie-category.html">Movies</a></li>
                            <li><a href="show-category.html">Tv Shows</a></li>
                            <li><a href="#">Coporate Information</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <ul class="f-link list-unstyled mb-0">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <ul class="f-link list-unstyled mb-0">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Cotact Us</a></li>
                            <li><a href="#">Legal Notice</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 r-mt-15">
                        <div class="d-flex">
                            <a href="#" class="s-icon">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="#" class="s-icon">
                                <i class="ri-skype-fill"></i>
                            </a>
                            <a href="#" class="s-icon">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                            <a href="#" class="s-icon">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-2">
            <div class="container-fluid">
                <p class="mb-0 text-center font-size-14 text-body">STREAMIT - 2020 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- MainContent End-->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- jQuery, Popper JS -->
    <script src="index_resource/js/jquery-3.4.1.min.js"></script>
    <script src="index_resource/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="index_resource/js/bootstrap.min.js"></script>
    <!-- Slick JS -->
    <script src="index_resource/js/slick.min.js"></script>
    <!-- owl carousel Js -->
    <script src="index_resource/js/owl.carousel.min.js"></script>
    <!-- select2 Js -->
    <script src="index_resource/js/select2.min.js"></script>
    <!-- Magnific Popup-->
    <script src="index_resource/js/jquery.magnific-popup.min.js"></script>
    <!-- Slick Animation-->
    <script src="index_resource/js/slick-animation.min.js"></script>
    <!-- Custom JS-->
    <script src="index_resource/js/custom.js"></script>
</body>

<!-- Mirrored from iqonic.design/themes/streamitnew/frontend/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 20:04:10 GMT -->
</html>
