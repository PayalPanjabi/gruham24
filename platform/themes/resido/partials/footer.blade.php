{!! dynamic_sidebar('footer_sidebar_1') !!}
<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer" style="background:#322c4b;padding-top: 30px;
    padding-bottom: 30px;">
    <div class="py-5">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-3 col-md-4 copyright">
                    <h3 style="color:#fff;font-size:14px;">Property in Pune</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="http://vp24.in/city/kharadi-2" style="font-size:12px;">Property in Kharadi</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Hinjawadi</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Balewadi</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Baner</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 copyright">
                    <h3 style="color:#fff;font-size:14px;">Property in Pune</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Viman Nagar</a></li>
                        <li style="margin-bottom: 7px;"><a href="http://vp24.in/city/ha-noi" style="font-size:12px;">Property in koregaon Park</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in undri</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Dhanori</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 copyright" >
                    <h3 style="color:#fff;font-size:14px;">Property in Pune</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="http://vp24.in/city/hadapsar-1" style="font-size:12px;">Property in Hadpsar</a></li>
                        <li style="margin-bottom: 7px;"><a href="http://vp24.in/city/keshav-nagar" style="font-size:12px;">Property in Keshav Nagar</a></li>
                        <li style="margin-bottom: 7px;"><a href="http://vp24.in/city/wagholi" style="font-size:12px;">Property in Wagholi</a></li>
                         <li style="margin-bottom: 7px;"><a href="http://vp24.in/city/kharadi-1" style="font-size:12px;">Property in BT Kawade Road</a></li>

                    </ul>
                </div>
    <div class="col-lg-3 col-md-4 copyright">
                    <h3 style="color:#fff;font-size:14px;">Property in India</h3>
                    <ul style="list-style: none;margin-left: 0;padding-left: 0;">
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;">Property in Pune</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;"> Property in Nashik</a></li>
                        <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;"> Property in Nagpur</a></li>
                         <li style="margin-bottom: 7px;"><a href="" style="font-size:12px;"> Property in Bangalore</a></li>
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
                    <div class="footer-widget copyright">
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
                
                    <div class="footer-add copyright">
                        <br>
                        <h4 class="widget-title">Address</h4>
                            @if (theme_option('address'))
                                <p class="copyright"><i class="fas fa-map-marker-alt"></i>
                                Office No-401, 4th Floor, Global Business Hub, Opp Eon IT Park, Kharadi, Pune - 411014
                                 <!-- {{ theme_option('address') }} -->
                                </p>
                            @endif
                            @if (theme_option('hotline'))
                                <p class="copyright"><i class="fas fa-phone-square"></i> 
                                    +91 7276756000,
                                    +91 9578024024
                                    <!-- {{ theme_option('hotline') }} -->
                                </p>
                            @endif
                            @if (theme_option('email'))
                                <p class="copyright"><i class="fas fa-envelope"></i> 
                                bharat@gruham24.com
                                <!-- {{ theme_option('email') }} -->
                                </p>
                            @endif
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="row copyright" >
                        {!! dynamic_sidebar('footer_sidebar_2') !!}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 copyright">
                    {!! dynamic_sidebar('footer_sidebar_3') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0 copyright">
                    ©2021 Gruham24, All rights reserved by Gruham24.
                        <!-- {!! clean(theme_option('copyright')) !!} -->
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 ">
                    @if (theme_option('social_links'))
                        <ul class="footer-bottom-social copyright">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=919578024024&text=Hello, I'm ..." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<!--<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>-->
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
