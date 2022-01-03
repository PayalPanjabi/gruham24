<!--Used header -->
<div class="image-cover hero-banner"
style="background:url('storage/banners/banner-9.png') no-repeat;   
    "
    data-overlay="{{ $overlay }}">

    <div class="container">
        
        <h1 class="big-header-capt mb-0">Properties to buy in Pune</h1>
        <p class="text-center mb-5">{!! clean($description) !!}</p>

        <div class="simple-search-wrap">
            <div class="hero-search-2">
                <!-- <p class="lead-i text-light">{!! clean($title) !!}</p>
                <h2 class="text-light mb-4">{!! clean($description) !!}</h2> -->
                <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch">
                    <div class="pk-input-group">
                        <input type="text" class="form-control" name="k"
                            placeholder="{{ __('Search for a location') }}">
                        <button class="btn btn-black" type="submit">{{ __('Go & Search') }}</button>
                    </div>
                </form>
               
            </div>
           
        </div>
        <div style="text-align: center;
        margin: 20px;"> <a href="#" style="border: 1px solid #fff;
                        color: #fff;font-size: 12px;padding: 12px 19px;width: 200px;text-align: center;margin-top: 20px;border-radius: 26px;">
                    
                  Discover Commercial Projects</a></div>
        <div class="row lg-device">
        <!-- <div class="col-lg-1"></div> -->
            <div class="col-lg-3 col-md-3 col-sm-6" style="display:inline;">
                <div class="achievement-wrap" >
                    <div class="achievement-content">
                        <h4>20500+</h4>
                        <p>CITIES</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6" style="display:inline;">
                <div class="achievement-wrap" >
                    <div class="achievement-content">
                        <h4>7600+</h4>
                        <p>PROJECTS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="achievement-wrap">
                    <div class="achievement-content">
                        <h4>12300+</h4>
                        <p>DEVELOPERS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="achievement-wrap">
                    <div class="achievement-content">
                        <h4>15200+</h4>
                        <p>CUSTOMERS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="achievement-wrap">
                    <div class="achievement-content">
                        <h4>15200+</h4>
                        <p>WORTH PROPERTY SOLD</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-1"></div> -->
        </div>
    </div>
    <!-- <div class="container">
        <div class="simple-search-wrap">
            <div class="hero-search-2">
                <p class="lead-i text-light">{!! clean($title) !!}</p>
                <h2 class="text-light mb-4">{!! clean($description) !!}</h2>
                <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch">
                    <div class="pk-input-group">
                        <input type="text" class="form-control" name="k"
                            placeholder="{{ __('Search for a location') }}">
                        <button class="btn btn-black" type="submit">{{ __('Go & Search') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</div>