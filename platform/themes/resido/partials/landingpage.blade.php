<div class='loader'>
    <div style="text-align:center; margin-top: 190px;">
        <img src="/storage/vp-logo.png">
        <h2 style="color:white;">We Are Visitng Marketing Partner !!</h2>
    </div>
</div>
<div class='splash'></div>
<!-- <div class='frame1'></div>
<div class='frame2'></div>
<div class='frame3'>
  If music be the food of love,
  <span>
    play on..
    <span></span>
  </span>
</div> -->

 <style>
/* @import url(https://fonts.googleapis.com/css?family=Devonshire);
* {
  margin: 0;
  padding: 0;
}

body {
  background: url(https://camo.githubusercontent.com/3933a0d2aad5470e71089fba8c040820ff28b187/687474703a2f2f692e696d6775722e636f6d2f39394c70464d792e6a7067) fixed no-repeat;
  background-size: cover;
  overflow: hidden;
} */

.loader {
  position: fixed;
  z-index: 1000;
  background: url(/storage/banners/home-property-image.png) 20% 50% no-repeat white;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  /* background:#5B5B5B; */
}

.splash {
  /* background: url(https://camo.githubusercontent.com/4730e3173d4f5b900c9f3823bab491929c7bd161/687474703a2f2f692e696d6775722e636f6d2f53725531384e382e6a7067) fixed no-repeat; */
  background-size: cover;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* .frame1 {
  display: none;
  background: rgba(93, 129, 228, 0.2);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.frame2 {
  display: none;
  background: rgba(0, 147, 227, 0.2);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.frame3 {
  background: rgba(0, 0, 0, 0.2);
  font-family: "Devonshire", cursive;
  text-align: center;
  font-size: 40px;
  color: #fff;
  text-shadow: 0 0 17px #E1C5DE;
  display: none;
  padding: 200px 0 0 0;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.frame3 span {
  display: block;
  fontsize: 50px;
  margin-top: -360px;
} */
</style> 
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script>

(function () {
    $(window).load(function () {
        setTimeout(function () {
           $('.loader').fadeOut();
            start();
        }, 2000);
    });
    $(document).ready(function () {
        $('.splash').slideToggle(3000);
        $('.frame1').delay(3200).show('slide', { direction: 'right' }, 1000);
        $('.frame2').delay(3300).show('slide', { direction: 'left' }, 1000);
        $('.frame3').delay(3800).slideToggle(1000);
        $('.frame3').css('line-height', '400px');
        $('.frame2').delay(4000).hide('slide', { direction: 'left' }, 1000);
        $('.frame1').delay(4200).hide('slide', { direction: 'right' }, 1000);
        $('.splash').delay(4500).slideToggle(2000);
        $('.frame3').delay(4800).transition({
            scale: [
                1.2,
                1.2
            ],
            duration: 1000
        });
        $('.splash').delay(500).animate({ width: '50%' }, 1000);
    });
}.call(this));
</script> 