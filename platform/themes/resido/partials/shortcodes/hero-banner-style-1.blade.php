  
  <style>
      * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: "Nunito", sans-serif;
      background: #fbf7f4;
    }
    
    .container {
      width: 80%;
      margin: auto;
    }
    
    .heading {
      text-align: center;
      font-size: 3.5rem;
      font-weight: bold;
      padding: 5rem 0;
    }
    
    .counter-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    
    .counter {
      text-align: center;
    }
    
    .counter h3 {
      padding: 0.5rem 0;
      font-size: 2.5rem;
      font-weight: 800;
    }
    
    .counter h6 {
      font-size: 2rem;
      padding-bottom: 1rem;
    }
    
    .icon {
      height: 5rem;
      width: auto;
    }

  </style>
<div class="image-cover hero-banner"
    style="background:url('storage/banners/banner-9.png') no-repeat;   
      margin-top: -90px;z-index: -1;">
    
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
                    
                  Discover Commercial Projects</a>
        </div>
        
        <div class="container">
            <div class="heading">
              Counting Upto the Limit
            </div>
            <div class="counter-container">
              <div class="counter">
                <img src="https://raw.githubusercontent.com/nemo0/animated-counter/29e12c0cb15e90c27faaef0d83fb2618126067db/icons/iconmonstr-time-19.svg" alt="timer" srcset="" class="icon">
                <h3 data-target="15000" class="count">0</h3>
                <h6>Work Hours</h6>
              </div>
              <div class="counter">
                <img src="https://raw.githubusercontent.com/nemo0/animated-counter/29e12c0cb15e90c27faaef0d83fb2618126067db/icons/iconmonstr-coffee-11.svg" alt="Coffee" srcset="" class="icon">
                <h3 data-target="1200" class="count">0</h3>
                <h6>Cups of Coffee</h6>
              </div>
              <div class="counter">
                <img src="https://raw.githubusercontent.com/nemo0/animated-counter/29e12c0cb15e90c27faaef0d83fb2618126067db/icons/iconmonstr-weather-112.svg" alt="night" srcset="" class="icon">
                <h3 data-target="500" class="count">0</h3>
                <h6>Sleepless Nights</h6>
              </div>
            </div>
         </div>
       
    <!--    <div class="row">-->
        <!-- <div class="col-lg-1"></div> -->
    <!--        <div class="col-lg-3 col-xs-6">-->
    <!--            <div class="achievement-wrap">-->
    <!--                <div class="achievement-content">-->
    <!--                    <h4>20500+</h4>-->
    <!--                    <p>CITIES</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-xs-6">-->
    <!--            <div class="achievement-wrap">-->
    <!--                <div class="achievement-content">-->
    <!--                    <h4>7600+</h4>-->
    <!--                    <p>PROJECTS</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-xs-6">-->
    <!--            <div class="achievement-wrap">-->
    <!--                <div class="achievement-content">-->
    <!--                    <h4>12300+</h4>-->
    <!--                    <p>DEVELOPERS</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-xs-6">-->
    <!--            <div class="achievement-wrap">-->
    <!--                <div class="achievement-content">-->
    <!--                    <h4>15200+</h4>-->
    <!--                    <p>CUSTOMERS</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-3 col-xs-6">-->
    <!--            <div class="achievement-wrap">-->
    <!--                <div class="achievement-content">-->
    <!--                    <h4>15200+</h4>-->
    <!--                    <p>WORTH PROPERTY SOLD</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    
    <!-- <div class="container">
        <div class="hero-search-wrap" >
            <div class="hero-search">
                <h1>{!! clean($title) !!}</h1>
            </div>
            <form action="{{ route('public.properties') }}" method="GET" id="frmhomesearch">
                <div class="hero-search-content side-form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control"
                                        placeholder="{{ __('Search for a location') }}">
                                    <img src="{{ Theme::asset()->url('img/pin.svg') }}" width="18" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Min Price') }}</label>
                                {!! Theme::partial('real-estate.filters.min-price') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Max Price') }}</label>
                                {!! Theme::partial('real-estate.filters.max-price') !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Property Type') }}</label>
                                {!! Theme::partial('real-estate.filters.categories') !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>{{ __('Bed Rooms') }}</label>
                                {!! Theme::partial('real-estate.filters.bedrooms') !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>{{ __('Property Location') }}</label>
                                {!! Theme::partial('real-estate.filters.cities') !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="hero-search-action">
                    <button class="btn search-btn" type="submit">{{ __('Search Result') }}</button>
                </div>
            </form>
        </div>
    </div> -->
</div>
  <script>
      const counters = document.querySelectorAll(".count");
const speed = 200;

counters.forEach((counter) => {
  const updateCount = () => {
    const target = parseInt(+counter.getAttribute("data-target"));
    const count = parseInt(+counter.innerText);
    const increment = Math.trunc(target / speed);
    console.log(increment);

    if (count < target) {
      counter.innerText = count + increment;
      setTimeout(updateCount, 1);
    } else {
      count.innerText = target;
    }
  };
  updateCount();
});

  </script>