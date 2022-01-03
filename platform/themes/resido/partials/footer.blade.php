{!! dynamic_sidebar('footer_sidebar_1') !!}
<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer" style="background:#322c4b;padding-top: 30px;
    padding-bottom: 30px;">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <h3 style="color:#fff;font-size:14px;">Property in Top Country</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in India</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Residential Property in India</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Commercial Property in India</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h3 style="color:#fff;font-size:14px;">Property in Top State</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Haryana</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Maharashtra</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Uttar Pradesh</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h3 style="color:#fff;font-size:14px;">Property in Top City</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Gurgaon</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Pune</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Noida</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h3 style="color:#fff;font-size:14px;">Property in Popular Localities</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in NH 8 Gurgaon</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Hinjewadi Pune</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in NH24 Ghaziabad</a></li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<footer class="dark-footer skin-dark-footer">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        @if (theme_option('logo_white'))
                            <img src="/storage/general/logo-without-bg.png" class="img-footer"
                                 style="max-height: 147px" alt="{{ theme_option('site_name') }}">
                        @endif
                        <p> Gruham24 is a young, dynamic and vibrant
                            Real Estate Developer formed to fulfil the
                            aspirations of people to have safe and secure
                            Residential, Commercial investment.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                
                    <div class="footer-add">
                        <br>
                    <h4 class="widget-title">Address</h4>
                            @if (theme_option('address'))
                                <p><i class="fas fa-map-marker-alt"></i>
                                Office No-401, 4th Floor, Global Business Hub, Opp Eon IT Park, Kharadi, Pune - 411014
                                 <!-- {{ theme_option('address') }} -->
                                </p>
                            @endif
                            @if (theme_option('hotline'))
                                <p><i class="fas fa-phone-square"></i> 
                                    +91 957 802 4024,
                                    +91 914 557 9191
                                    <!-- {{ theme_option('hotline') }} -->
                                </p>
                            @endif
                            @if (theme_option('email'))
                                <p><i class="fas fa-envelope"></i> 
                                bharat@gruham24.com
                                <!-- {{ theme_option('email') }} -->
                                </p>
                            @endif
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        {!! dynamic_sidebar('footer_sidebar_2') !!}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    {!! dynamic_sidebar('footer_sidebar_3') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">
                    ©2021 Gruham24, All rights reserved by Gruham24.
                        <!-- {!! clean(theme_option('copyright')) !!} -->
                    </p>
                </div>

                <div class="col-lg-6 col-md-6">
                    @if (theme_option('social_links'))
                        <ul class="footer-bottom-social">
                            @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                                @if (count($socialLink) == 3)
                                    <li><a href="{{ $socialLink[2]['value'] }}" target="_blank"
                                           title="{{ $socialLink[0]['value'] }}"><i
                                                class="{{ $socialLink[1]['value'] }}"></i></a></li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->

<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
</div>

{!! Theme::footer() !!}
@if (session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg))
    <script type="text/javascript">
        "use strict";
        $(document).ready(function () {
            @if (session()->has('success_msg'))
            window.showAlert('alert-success', '{{ session('success_msg') }}');
            @endif

            @if (session()->has('error_msg'))
            window.showAlert('alert-danger', '{{ session('error_msg') }}');
            @endif

            @if (isset($error_msg))
            window.showAlert('alert-danger', '{{ $error_msg }}');
            @endif

            @if (isset($errors))
            @foreach ($errors->all() as $error)
            window.showAlert('alert-danger', '{!! $error !!}');
            @endforeach
            @endif
        });
    </script>
    @endif
</body>
</html>
