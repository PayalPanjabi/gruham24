<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family={{ urlencode(theme_option('font_heading', 'Jost')) }}:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('font_body', 'Muli')) }}:300,400,600,700" rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: {{ theme_option('primary_color', '#2b4db9') }};
            --font-body: {{ theme_option('font_body', 'Muli') }}, sans-serif;
            --font-heading: {{ theme_option('font_heading', 'Jost') }}, sans-serif;
        }

        h2{
            text-align:center;
            padding: 20px;
            }
            /* Slider */

            .slick-slide {
                /* margin: 0px 20px; */
            }


            .slick-slider
            {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                        user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                    touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .slick-list
            {
                position: relative;
                display: block;
                overflow: hidden;
                margin: 0;
                padding: 0;
            }
            .slick-list:focus
            {
                outline: none;
            }
            .slick-list.dragging
            {
                cursor: pointer;
                cursor: hand;
            }

            .slick-slider .slick-track,
            .slick-slider .slick-list
            {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                    -ms-transform: translate3d(0, 0, 0);
                    -o-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
            }

            .slick-track
            {
                position: relative;
                top: 0;
                left: 0;
                display: block;
            }
            .slick-track:before,
            .slick-track:after
            {
                display: table;
                content: '';
            }
            .slick-track:after
            {
                clear: both;
            }
            .slick-loading .slick-track
            {
                visibility: hidden;
            }

            .slick-slide
            {
                display: none;
                float: left;
                height: 100%;
                min-height: 1px;
            }
            [dir='rtl'] .slick-slide
            {
                float: right;
            }
            .slick-slide img
            {
                display: block;
            }
            .slick-slide.slick-loading img
            {
                display: none;
            }
            .slick-slide.dragging img
            {
                pointer-events: none;
            }
            .slick-initialized .slick-slide
            {
                display: block;
            }
            .slick-loading .slick-slide
            {
                visibility: hidden;
            }
            .slick-vertical .slick-slide
            {
                display: block;
                height: auto;
                border: 1px solid transparent;
            }
            .slick-arrow.slick-hidden {
                display: none;
            }

            /* popup form */
            #ac-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, .6);
                z-index: 1001;
            }
            
           
    </style>
     <script>
          function showHover(e){
    var boundingRect = e.getBoundingClientRect();
    var top = boundingRect.top;
    var bottom = boundingRect.bottom;
    var left = boundingRect.left;
    var right = boundingRect.right;
  
    console.log('viewportWidth: ' + window.visualViewport.width)
    console.log('viewportHeight: ' + window.visualViewport.height)
    console.log('mouseX: ' + e.onmouseover.arguments[0].clientX)
    console.log('MouseY:' + e.onmouseover.arguments[0].clientY)

    var mouseXCoords = e.onmouseover.arguments[0].clientX;
    var mouseYCoords = e.onmouseover.arguments[0].clientY;
    var hoverMenu = document.getElementById('hoverMenu');
 
    
    //calculate x draw room
    var drawX = false;
    if(window.visualViewport.width - mouseXCoords >= 300){
      hoverMenu.style.left = mouseXCoords+'px';
      drawX = true;
    }
    else if(mouseXCoords >= 300){
      hoverMenu.style.left = ( mouseXCoords - 300 )+'px';
      drawX = true
    }
    else {
      drawX = false
    }
    
    //calculate y draw room
    var drawY = false;
    if(window.visualViewport.height - mouseYCoords >= 300){
      hoverMenu.style.top = mouseYCoords+'px';
      var drawY = true;
    }
    else if(mouseYCoords >= 300){
      hoverMenu.style.top = ( mouseYCoords - 300 )+'px';
      var drawY = true;
    }
    //if there is space on this viewport but any cursor point position does not allow any room it wont draw. You will need to guess the best renderable area to draw the rect. I gave up due to time contraints. But the else if statement should go here when you want to fix this problem. Use the target div as the allowed renderable area x and y (left and top) to start from. if it's outside of this area then dont draw as you are no longer hovering.  
    else {  
      var drawY = false;
    }
    if(drawX && drawY){
      hoverMenu.style.position = "absolute";
      hoverMenu.style.display = 'block';    
    }
}

function hideHover(e){
  document.getElementById('hoverMenu').style.display = 'none';
}


    </script>
    <!-- popup form -->
    <script>
        function PopUp(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else document.getElementById('ac-wrapper').removeAttribute('style');
        }
        window.onload = function () {
            setTimeout(function () {
                PopUp('show');
            }, 5000);
        }
    </script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
    </script>
    <script>
        "use strict";
        window.trans = {
            "Price": "{{ __('Price') }}",
            "Number of rooms": "{{ __('Number of rooms') }}",
            "Number of rest rooms": "{{ __('Number of rest rooms') }}",
            "Square": "{{ __('Square') }}",
            "No property found": "{{ __('No property found') }}",
            "million": "{{ __('million') }}",
            "billion": "{{ __('billion') }}",
            "in": "{{ __('in') }}",
            "Added to wishlist successfully!": "{{ __('Added to wishlist successfully!') }}",
            "Removed from wishlist successfully!": "{{ __('Removed from wishlist successfully!') }}",
            "I care about this property!!!": "{{ __('I care about this property!!!') }}",
            "See More Reviews": "{{ __('See More Reviews') }}",
            "Reviews": "{{ __('Reviews') }}",
            "out of 5.0": "{{ __('out of 5.0') }}",
            "service": "{{ trans('plugins/real-estate::review.service') }}",
            "value": "{{ trans('plugins/real-estate::review.value') }}",
            "location": "{{ trans('plugins/real-estate::review.location') }}",
            "cleanliness": "{{ trans('plugins/real-estate::review.cleanliness') }}",
        }
        window.themeUrl = '{{ Theme::asset()->url('') }}';
        window.siteUrl = '{{ url('') }}';
        window.currentLanguage = '{{ App::getLocale() }}';
    </script>

    {!! Theme::header() !!}
</head>
<body class="{{ theme_option('skin', 'blue') }}" @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
<div id="alert-container"></div>

@if (theme_option('preloader_enabled', 'no') == 'yes')
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
@endif

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->

    <div class="topbar bg-brand p-2 d-none d-sm-block">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                @if (is_plugin_active('language'))
                    <div class="language-wrapper">
                        {!! $languages = apply_filters('language_switcher') !!}
                    </div>
                @endif

                @if (is_plugin_active('real-estate'))
                    <div class="topbar-right d-flex align-items-center">
                        <div class="topbar-wishlist">
                            <a class="text-white" href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a>
                        </div>
                        @php $currencies = get_all_currencies(); @endphp
                        @if (count($currencies) > 1)
                            <div class="choose-currency ms-3 text-white">
                                <span>{{ __('Currency') }}: </span>
                                @foreach ($currencies as $currency)
                                    <a href="{{ route('public.change-currency', $currency->title) }}" @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>&nbsp;
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light head-shadow" 
    style="opacity: 1;z-index: 999;background:#5B5B5B;">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    @if (theme_option('logo'))
                        <a class="nav-brand" href="{{ route('public.index') }}">
                        <img class="logo" src="/storage/general/logo-w-bg.png" alt="{{ setting('site_title') }}"></a>
                    @endif
                    
                    <div class="nav-toggle"></div>
                </div>
                <ul class="nav-menu lg-device" style="margin-left: 550px;">

                    <li class="menu-item-has-children" >
                    <a href="tel:+91 9578024024" style="border: 1px solid #fff;
                        color: #fff;font-size: 12px;padding: 12px 19px;width: 200px;text-align: center;margin-top: 20px;border-radius: 26px;">
                    
                        <i class="fas fa-phone" style="font-size: 14px;"></i>&nbsp; +91 9578024024</a>
                    </li>

                    <li class="menu-item-has-children">
                    <a href="/news"><i class="far fa-newspaper" style="font-size: 14px;"></i> News</a>
                    </li>

                    <li class="menu-item-has-children">
                    <a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> Favourites (<span class="wishlist-count">0</span>)</a>
                    </li>

                    <li class="menu-item-has-children" style="color:#e2b52d;">
                    <a href="{{ route('public.account.login') }}">
                    <i class="fa fa-user" style="font-size: 14px;"></i>
                    <!-- <img src="{{ Theme::asset()->url('') }}/img/user-light.svg" width="12" alt="" class="mr-2" style="color:#e2b52d;"/> -->
                    Login</a>
                    </li>
                </ul>
                
                
                <div class="nav-menus-wrapper align-to-right"   style="transition-property: none;">
                    {!! Menu::renderMenuLocation('main-menu', [
                        'view'    => 'menu',
                        'options' => ['class' => 'nav-menu'],
                    ]) !!}

                    @if (is_plugin_active('real-estate'))
                        <ul class="nav-menu nav-menu-social " style="display:none;">
                            <li>
                                <a href="{{ route('public.account.properties.create') }}" class="text-success"><img src="{{ Theme::asset()->url('') }}/img/submit.svg" width="20" alt="" class="mr-2" /> {{ __('Add Property') }}</a>
                            </li>
                            @if (auth('account')->check())
                                <li class="login-item"><a href="{{ route('public.account.dashboard') }}" rel="nofollow"><i class="fas fa-user"></i> <span>{{ auth('account')->user()->name }}</span></a></li>
                                <li class="login-item"><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a></li>
                            @else
                                <li class="add-listing">
                                    <a href="{{ route('public.account.login') }}"><img src="{{ Theme::asset()->url('') }}/img/user-light.svg" width="12" alt="" class="mr-2" />{{ __('Sign In') }}</a>
                                </li>
                            @endif
                        </ul>

                        @if (auth('account')->check())
                            <form id="logout-form" action="{{ route('public.account.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif

                        <div class="clearfix sm-device" style="background: #544d4d;">
                            <!-- <h2 style="font-size: 21px;"> -->
                            <img class="logo" src="/storage/logo-admin.png" style="width: 166px;padding-top: 4px;margin-left: 18px;">
                        <!-- </h2> -->
                        </div>
                        <div class="d-sm-none mobile-menu">
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/home"><i class="fas fa-home" style="font-size: 14px;"></i> Home</a>
                            </div>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/about-us"><i class="fa fa-info-circle" style="font-size: 14px;"></i> About Us</a>
                            </div>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/contact"><i class="fas fa-phone" style="font-size: 14px;"></i> Contact Us</a>
                            </div>

                            
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="/news"><i class="far fa-newspaper" style="font-size: 14px;"></i> News</a>
                            </div>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> Favourites (<span class="wishlist-count">0</span>)</a>
                            </div>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="{{ route('public.account.login') }}">
                            <i class="fa fa-arrow-circle-right" style="font-size: 14px;"></i>
                            <!-- <img src="{{ Theme::asset()->url('') }}/img/user-light.svg" width="12" alt="" class="mr-2" /> -->
                            Login</a>
                            </div>
                            <div class="mobile-menu-item mobile-wishlist">
                            <a href="tel:+91 9578024024" style="border: 1px solid #000;
                                    color: #000;font-size: 12px;padding: 12px 19px;width: 200px;text-align: center;margin-top: 20px;border-radius: 26px;">

                                    <i class="fas fa-phone" style="font-size: 14px;"></i>&nbsp; +91 9578024024</a>
                                <!-- <a href="{{ route('public.wishlist') }}"><i class="fas fa-heart"></i> {{ __('Wishlist') }}(<span class="wishlist-count">0</span>)</a> -->
                            </div>
                            <!-- <div class="mobile-menu-item mobile-wishlist">
                            </div> -->
                            <!-- @if (count($currencies) > 1)
                                <div class="mobile-menu-item">
                                    <span>{{ __('Currency') }}: </span>
                                    @foreach ($currencies as $currency)
                                        <a href="{{ route('public.change-currency', $currency->title) }}" @if (get_application_currency_id() == $currency->id) class="active" @endif><span>{{ $currency->title }}</span></a>&nbsp;
                                    @endforeach
                                </div>
                            @endif
                            @if (is_plugin_active('language'))
                                <div class="mobile-menu-item language-wrapper">
                                    {!! $languages = apply_filters('language_switcher') !!}
                                </div>
                            @endif -->
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
