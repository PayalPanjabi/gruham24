<!--Used header -->
<div class="image-cover hero-banner"
style="background:url('storage/banners/banner-9.png') no-repeat;   
    "
    data-overlay="{{ $overlay }}">

    <div class="container">
        
        <h1 class="big-header-capt mb-0">Properties to buy in Pune</h1>
        <p class="text-center mb-5">{!! clean($description) !!}</p>
        <br><br><br>
        <!-- <div style="text-align: center;
        margin: 20px;"> <a href="#" style="border: 1px solid #fff;
                        color: #fff;font-size: 12px;padding: 12px 19px;width: 200px;text-align: center;margin-top: 20px;border-radius: 26px;">
                    
                  Discover Commercial Projects</a></div> -->
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
       
        <div class="row lg-device" style="margin-top:40px;">
        <!-- <div class="col-lg-1"></div> -->
            <div class="col-lg-3 col-md-3 col-sm-6" style="display:inline;">
                <div class="achievement-wrap" >
                    <div class="achievement-content">
                       <h4 id="counter1"></h4>
                        <p>CITIES</p>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-3 col-sm-6" style="display:inline;">
                <div class="achievement-wrap" >
                    <div class="achievement-content">
                        <h4 id="counter2"></h4>
                        <p>PROJECTS</p>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-3 col-xs-6">
                <div class="achievement-wrap">
                    <div class="achievement-content">
                        <h4 id="counter3"></h4>
                        <p>DEVELOPERS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-xs-6">
                <div class="achievement-wrap">
                    <div class="achievement-content">
                        <h4  id="counter4"></h4>
                        <p>CUSTOMERS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-6">
                <div class="achievement-wrap">
                    <div class="achievement-content">
                        <h4  id="counter5"> Cr</h4>
                        <p>WORTH PROPERTY SOLD</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-1"></div> -->
        </div>
    </div>
    <!--  <h1>GeeksforGeeks</h1>-->
    <!--<p>COUNTS</p>-->
    <!--     <div id="counter">-->
         <!-- counts -->
    <!--    </div>-->
      
        <script>
            let counts=setInterval(updated);
            let upto=0;
       
            function updated(){
                var count= document.getElementById("counter1");
                count.innerHTML=++upto;
                if(upto=== 24)
                {
                    clearInterval(counts);
                }
            }
        </script>
        <script>
            let counts1=setInterval(updated2);
            let upto1=0;
            function updated2(){
                var count= document.getElementById("counter2");
                count.innerHTML=++upto1;
                if(upto1===903)
                {
                    clearInterval(counts1);
                }
            }
        </script>
        <script>
            let counts2=setInterval(updated3);
            let upto2=0;
            function updated3(){
                var count= document.getElementById("counter3");
                count.innerHTML=++upto2;
                if(upto2===501)
                {
                    clearInterval(counts2);
                }
            }
        </script>
        <script>
            let counts4=setInterval(updated4);
            let upto3=0;
            function updated4(){
                var count= document.getElementById("counter4");
                count.innerHTML=++upto3;
                if(upto3===2103)
                {
                    clearInterval(counts4);
                }
            }
        </script>
        <script>
            
            let counts3=setInterval(updated5);
            let upto4=0;
            function updated5(){
                var count= document.getElementById("counter5");
                count.innerHTML=++upto4;
                if(upto4===300)
                {
                    clearInterval(counts3);
                }
            }
        </script>
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
<div style="background:gray;height: 56px;
    margin-top: -1px;">
    <marquee scrolldelay="0" scrollamount="20" width="100%" direction="left" vspace="0"     onmouseover="this.stop();" onmouseout="this.start();">
          <h3 style="color:#f6c306;padding-top:13px;"> Gruham24 Realty Pvt. Ltd. Presented By VP24.in    
            
          </h3> &nbsp;
          <!--<h3 style="color:#f6c306;padding-top:13px; display: inline;"  >-->
          <!--         Gruham24 Realty Pvt. Ltd. Presented By VP24.in-->
          <!--</h3>-->
          <h1 dir="ltr" id="docs-internal-guid-62ddc8fa-7fff-bab9-81ed-a576f13acd13" style="line-height: 1.656; margin-top: 18pt; margin-bottom: 4pt; text-align: justify;">
            &nbsp;</h1>
          <p>
            &nbsp;</p>
        </marquee>
   
    </div>