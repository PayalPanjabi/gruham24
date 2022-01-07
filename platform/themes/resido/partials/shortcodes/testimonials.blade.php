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
                <img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg" style="width: 100%;"></div>
            <div class="slide" style="margin: 0px 20px;">
                <img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg" style="width: 100%;"></div>
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