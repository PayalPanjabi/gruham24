
<!-- End to end Assistance -->
<style>
/* * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;} */

/* Style the tab */
/* .tab {
  float: left;
  border: 1px solid #ccc;
  /* background-color: #f1f1f1; */
  width: 30%;
  height: 300px;
} */

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.btn-for-with-us{
    padding: 9px 41px;
    font-weight: bold;
    background: #fff!important;
    border: 2px solid #f6c80a!important;
    color: #f6c80a!important;
    /* padding: 16px 50px; */
}
/* 
.circle-before-icon{
    width: 84px;
                    height: 84px;
                    border: solid 1px #979797;
                    border-radius: 50%;
                    background-color: #D7B56D;
                    text-align: center;
                    margin: 0 auto;
                    transition: all 300ms ease-in-out;
} */

/* model */
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 78%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
}
.leadform-wrapper .imp-points li {
    display: inline-block;
    padding: 0 15px 20px 10px;
    text-align: center;
    vertical-align: top;
}
.line {
    background: #fff;
    height: 1px;
    position: absolute;
    width: calc(100% - 84px);
    top: 29%;
    left: calc(100% - 81px);
}
</style>

<section class="lg-device" 
style="background: url('storage/banners/home-property-image.png') no-repeat; height: 425px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2 style="color: #fff;">End To End Assistance </h2>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center tab" style="margin: 10px -107px 10px -151px;">
            <div class="col-lg-2 col-md-12 text-center tablinks" onmouseover="openCity(event, 'box1')">
                <div class="circle-before-icon" style=" ">
                        <i class="fa fa-building" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                        </div>
                        <h3 style="font-size: 21px;color: #fff;">Picking out &<br> Shortlisting</h3>
                        <div class="line"></div>
            </div>
            <div class="col-lg-2 col-md-12 text-center tablinks" onmouseover="openCity(event, 'box2')">
                    <div class="circle-before-icon" style="">
                            <i class="fa fa-users" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                    </div>
                    <h3 style="font-size: 21px;color: #fff;">Face To <br>Face</h3>
                    <div class="line"></div>
            </div>
            <div class="col-lg-2 col-md-12 text-center tablinks" onmouseover="openCity(event, 'box3')">
                <div class="circle-before-icon">
                            <i class="fa fa-car" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                </div>
                <h3 style="font-size: 21px;color: #fff;">Site<br> Visit</h3>
            </div>
            <div class="col-lg-2 col-md-12 text-center tablinks" onmouseover="openCity(event, 'box4')">
                     <div class="circle-before-icon" style="">
                        <i class="fa fa-university" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                    </div>
                    <h3 style="font-size: 21px;color: #fff;">Home Loan Assistance</h3>
            </div>
            
            <div class="col-lg-2 col-md-12 text-center tablinks" onmouseover="openCity(event, 'box5')">
                    <div class="circle-before-icon1" >
                        <i class="fa fa-key" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                    </div>
                    <h3 style="font-size: 21px;color: #fff;">Book Your<br> Unit Key</h3>
            </div>
        </div>
<!--  -->
        <div class="row justify-content-center" style="margin: 10px -107px 10px -151px;">
            <div class="col-lg-2 col-md-12 text-center">
                <div id="box1" class="tabcontent active">
                <p style="font-size: 16px;color: #fff;">Lacs of verified listings from 500+ reputed developers</p>
                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded " style="  padding: 9px 41px;
                    font-weight: bold;
                    background: #fff!important;
                    border: 2px solid #f6c80a!important;
                    color: #f6c80a!important;
                  ">With Us</a>
                </div>
            </div>

            <div class="col-lg-2 col-md-12 text-center">
                 <div id="box2" class="tabcontent">
                <p style="font-size: 16px;color: #fff;">Get a 90% Property Details Clear  in FTF.</p> 
                <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                    font-weight: bold;
                    background: #fff!important;
                    border: 2px solid #f6c80a!important;
                    color: #f6c80a!important;">With Us</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 text-center">
                <div id="box3" class="tabcontent">
                <p style="font-size: 16px;color: #fff;">Guided site visits with our Area managers</p>
                <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded " style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">With Us</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 text-center">
                <div id="box4" class="tabcontent">
                <p style="font-size: 16px;color: #fff;">0% Procressing Fees.</p>
                <a href="#"  data-toggle="modal" data-target="#myModal1" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">Apply Homeloan</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 text-center">
                <div id="box5" class="tabcontent">
                <p style="font-size: 16px;color: #fff;">Committed guidance all the way till possession.</p>
                <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">With Us</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<script>
document.getElementById("box1").style.display="none";
document.getElementById("box2").style.display="none";
document.getElementById("box3").style.display="none";
document.getElementById("box4").style.display="none";
document.getElementById("box5").style.display="none";

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <!-- <div class="modal-header">
          <h4 class="modal-title">Connect with Gruham24</h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div> -->
        
        <!-- Modal body -->
        <div class="modal-body">
            <h4 class="modal-title" style="text-align: center;
            font-size: 21px;font-weight: 500;">Connect with Gruham24</h4>
             <button type="button" class="close" data-dismiss="modal"  style="    margin-top: -29px;">&times;</button><br>
            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0" >
                                    <input type="text" id="name" name="name" 
                                    class="form-control" placeholder="Name" style="    margin-bottom: 20px;" require>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control" style="   margin-bottom: 20px;"
                                     placeholder="Email" require>
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="tel"  id="MobileNumber" name="phone" class="form-control " style="    margin-bottom: 20px;"
                                     placeholder="Mobile Number" require>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </form>
                    <div class="text-center text-md-left">
                        <a class="btn btn-black"><i class="fa fa-phone"></i> &nbsp; Get Call Back</a>
                    </div>
                    <br> <br>
                </div>
               
                <div>
                    <div class="row">
                        <div class="col-lg-3">
                            <span class="wrap-icon lg-device" style="    margin-left: 47px;"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                            <div class="txt" style="padding: 10px;font-size: 12px;text-align: center;">ASSURED
                                        <br>PRIVACY</div>
                                    <div class="clear"></div>
                        </div> 
                        <div class="col-lg-3">
                        <span class="wrap-icon lg-device" style="    margin-left: 47px;"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                                    <div class="txt" style="padding: 10px;font-size: 12px;text-align: center;">EXPERT
                                        <br>CONSULTATION</div>
                                    <div class="clear"></div>
                        </div>   
                        <div class="col-lg-3">
                        <span class="wrap-icon lg-device" style="    margin-left: 47px;"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                                    <div class="txt" style="padding: 10px;font-size: 12px;text-align: center;">FREE
                                        <br>SITE VISIT</div>
                                    <div class="clear"></div>
                        </div>  
                        <div class="col-lg-3">
                        <span class="wrap-icon lg-device" style="    margin-left: 47px;"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                                <div class="txt" style="padding: 10px;font-size: 12px;text-align: center;">BEST
                                    <br>PRICE</div>
                                <div class="clear"></div>
                        </div>  
                    </div>
                </div>
        </div>
        
            <!-- Modal footer -->
            <!-- <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->
        
      </div>
    </div>
</div>

<!-- Modal 2-->
<div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
      
        <!-- Modal body -->
        <div class="modal-body">
            <h4 class="modal-title" style="text-align: center;
            font-size: 21px;font-weight: 500;">Connect with Gruham24</h4>
             <button type="button" class="close" data-dismiss="modal"  style="    margin-top: -29px;">&times;</button><br>
           
                
        </div>
        
          
        
      </div>
    </div>
</div>
<!-- mobile section -End To End Assistance -->
<section class="sm-device pt-0">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h2>End To End Assistance </h2>
                   
                </div>
            </div>
        </div>
        <!-- <section class="customer-logos slider"> -->
            <div class="" style="margin: 0px 20px;text-align: center;">
                <div class="circle-before-icon2" style=" ">
                        <i class="fa fa-building" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                        </div>
                        <h3 style="text-align:center;font-size: 21px;color: #000;">Search & Shortlisting</h3>
                        <p style="text-align:center;font-size: 16px;color: #000;">Lacs of verified listings from 500+ reputed developers</p>
                        <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">With Us</a>
            </div>
            <br>
            <div class="" style="margin: 0px 20px;text-align: center;">
                <div class="circle-before-icon2" style="">
                            <i class="fa fa-users" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                    </div>
                    <h3 style="text-align:center;font-size: 21px;color: #000;">Face To Face</h3>
                    <p style="text-align:center;font-size: 16px;color: #000;">Get a 90% Property Details Clear  in FTF.</p> 
                    <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">With Us</a>
            </div>
            <br>
            <div class="" style="margin: 0px 20px;text-align: center;">
                <div class="circle-before-icon2">
                            <i class="fa fa-car" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                </div>
                <h3 style="text-align:center;font-size: 21px;color: #000;">Site Visit</h3>
                <p style="text-align:center;font-size: 16px;color: #000;">Guided site visits with our Area managers</p>
                <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">With Us</a>
            </div>
            <br>
            <div class="" style="margin: 0px 20px;text-align: center;">
                    <div class="circle-before-icon2" style="">
                        <i class="fa fa-university" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                    </div>
                    <h3 style="text-align:center;font-size: 21px;color: #000;">Home Loan Assistance</h3>
                    <p style="text-align:center;font-size: 16px;color: #000;">0% Procressing Fees.</p>
                    <a href="#"  data-toggle="modal" data-target="#myModal1" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">Apply Homeloan</a>
            </div>
            <br>
            <div class="" style="margin: 0px 20px;text-align: center;">
                    <div class="circle-before-icon2" >
                        <i class="fa fa-key" aria-hidden="true" style="color: #fff;margin-top: 32px;font-size: 22px;"></i>
                    </div>
                    <h3 style="text-align:center;font-size: 21px;color: #000;">Book Your Unit Key</h3>
                    <p style="text-align:center;font-size: 16px;color: #000;">Committed guidance all the way till possession.</p>
                     <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-theme-light-2 rounded" style="  padding: 9px 41px;
                font-weight: bold;
                background: #fff!important;
                border: 2px solid #f6c80a!important;
                color: #f6c80a!important;">With Us</a>
            </div>
            
        <!-- </section> -->
    </div>
</section>

<!-- Testimonials -->
<section class="bg-orange">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>{!! clean($title) !!}</h2>
                    <p>{!! clean($description) !!}</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <testimonials-component url="{{ route('public.ajax.testimonials') }}"></testimonials-component>
        </div>
    </div>
</section>


<section class="pt-0" style="background:#5B5B5B;">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h2 style="color:#f6c80a;">We Are Coming With New City!!  </h2>
                    <!-- <h1 class="black-lives-matter">We Are Coming With New City!!</h1> -->
                   
                </div>
            </div>
            
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-10 text-center" style="padding: 10px;">
                <div class="" style="background:#fff;">
                <div class="location-property-thumb">
                    <img src="/storage/nashik.jpg" data-src="http://127.0.0.1:8000/storage/c-2-400xauto-400xauto.png" alt="Hinjawadi" class="w-100 lazy entered loaded" data-ll-status="loaded" style="height: 203px;">
                </div>
                <h2 style="color:#000;font-size: 20px;">Nashik  </h2>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-10 text-center" style="padding: 10px;">
                <div class="" style="background:#fff;">
                
                    <div class="location-property-thumb">
                    <img src="/storage/nagpur.jpg" data-src="http://127.0.0.1:8000/storage/c-2-400xauto-400xauto.png" alt="Hinjawadi" class="w-100 lazy entered loaded" data-ll-status="loaded" style="height: 203px;">
                    </div>
                    <h2 style="color:#000; font-size: 20px;">Nagpur  </h2>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-10 text-center" style="padding: 10px;">
                <div class="" style="background:#fff;">
                    <div class="location-property-thumb">
                        <img src="/storage/nagar.gif" data-src="http://127.0.0.1:8000/storage/c-2-400xauto-400xauto.png" alt="Hinjawadi" class="w-100 lazy entered loaded" data-ll-status="loaded" style="height: 203px;">
                    </div>
                    <h2 style="color:#000;font-size: 20px;">Nagar</h2>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-10 text-center" style="padding: 10px;">
                <div class="" style="background:#fff;">
                    <div class="location-property-thumb">
                        <img src="/storage/bangalore.jpg" data-src="http://127.0.0.1:8000/storage/c-2-400xauto-400xauto.png" alt="Hinjawadi" class="w-100 lazy entered loaded" data-ll-status="loaded" style="height: 203px;">
                    </div>
                    <h2 style="color:#000;font-size: 20px;">Bangalore </h2>
                   
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="pt-0">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h2>Our  Partners </h2>
                </div>
            </div>
        </div>
        <section class="customer-logos slider">
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/duville-estates.png" style="width: 100%;margin-top:20px;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/godrej-properties.png" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/goel-genga-developments.png" style="width: 100%;margin-top:20px;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/majestique-landmarks.png" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/mantra-properties.png" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/shapoorji-palonji.png" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/vtp.png" style="width: 100%;height:30%;">
            </div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/parsun-sarvam.png" style="width: 100%;height:30%;">
            </div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/rohan-abhilasha.png" style="width: 100%;height:30%;">
            </div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/unique-properties.png" style="width: 100%;height:30%;">
            </div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/sukhmani-properties.png" style="width: 100%;height:30%;">
            </div>
             <!-- <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/brahma-crop.png" style="width: 100%;height:10%;">
            </div> -->
            <div class="slide" style="margin: 0px 20px;">
                <img src="/storage/users/mahalaxmi-group.png" style="width: 100%;height:30%;">
            </div>

        </section>
    </div>
</section>

<style>
    .form-control{
       }
</style>
<section class="pt-0" >
    
    <div id="ac-wrapper" style='display:none'>
        <div id="popup">
            <center>
                <h2>Enquiry Form</h2>
                <!-- <p>We help you find your new home!!</p> -->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0" >
                                    <input type="text" id="name" name="name" 
                                    class="form-control input-box" placeholder="Name" style="">
                                    <!-- <label for="name" class="">Your name</label> -->
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control input-box"
                                     placeholder="Email">
                                    <!-- <label for="email" class="">Your email</label> -->
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="tel" id="MobileNumber" name="phone" class="form-control input-box"
                                     placeholder="Mobile Number">
                                    <!-- <label for="subject" class="">Subject</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control input-box" 
                                    placeholder="Subject">
                                    <!-- <label for="subject" class="">Subject</label> -->
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12 col-lg-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2"
                                     class="form-control md-textarea input-box" placeholder="Your message" 
                                    ></textarea>
                                    <!-- <label for="message">Your message</label> -->
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>
                </div>
            </div>
            <div class="text-center text-md-left">
                <a class="btn btn-black" onClick="PopUp('hide')">Submit</a>
            </div>
               
            </center>
        </div>
    </div>
    
</section>
