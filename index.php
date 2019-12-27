<?php

include "config.php";

$make = $_GET["make"];
$city = $_GET["city"];

//SQL Query
$sql = "SELECT model FROM jos1n_bikes WHERE make = '$make'";

$modelitems = "<option selected disabled value=''>Select a Model</option>";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $modelitems =  $modelitems . "<option value='" . $row["model"] . "'>" . $row["model"] ."</option>";

    }
} else {
    echo "";
}


//SQL Query
$sql = "SELECT * FROM jos1n_bikelanding WHERE make = '$make'";

$displaygallery = '';
$tabledata = '';
$i = 0;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($i == 0){
        $displaygallery = $displaygallery . '<div class="carousel-item active"><img class="d-block w-100" src="' . $row["imagelink"] . '" alt="' . $row["title"] . '"></div>';
        $i++;
        }
        else {
        $displaygallery = $displaygallery . '<div class="carousel-item"><img class="d-block w-100" src="' . $row["imagelink"] . '" alt="' . $row["title"] . '"></div>';
        }
        $tabledata = $tabledata . '<tr>
              <td class="body-item mbr-fonts-style display-7" style="text-align: center; color: #ffffff;">' . $row["title"] . '</td><td class="body-item mbr-fonts-style display-7" style="text-align: center; color: #ffffff;"><strike>' . $row["authorized"] . '</strike></td><td class="body-item mbr-fonts-style display-7" style="color: #f15d24; font-weight: 700; text-align: center;">' . $row["prottoprice"] . '</td>
            </tr>';
    }
} else {
    // echo "";
}

$linkthrough = 'https://protto.in/' . $city . '/make-booking.html';


mysqli_close($conn);

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/protto-favicon.png" type="image/x-icon">
  <meta name="description" content="">
  <title><?php echo $make; ?> Service</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="manifest" href="/manifest.json" />

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "4f50a877-a1a6-4454-8109-d7c05bb7e670",
    });
  });
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1729160923854197');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1729160923854197&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	  <!-- Global site tag (gtag.js) - Google Ads: 811758389 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-811758389"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-811758389');
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114716570-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-114716570-1');
	</script>

	<!-- Begin Inspectlet Asynchronous Code -->
	<script type="text/javascript">
	(function() {
	window.__insp = window.__insp || [];
	__insp.push(['wid', 1812473786]);
	var ldinsp = function(){
	if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1812473786&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
	setTimeout(ldinsp, 0);
	})();
	</script>
	<!-- End Inspectlet Asynchronous Code -->

	<script type="text/javascript">
	    window.smartlook||(function(d) {
	    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
	    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
	    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
	    })(document);
	    smartlook('init', '180277aa879355cafd1db36a2921b1f53170cef3');
	</script>


<style>
.btnn {
     background: #f15d24;
     color: white;
     font-size: 15px;
     padding: 6px 10px;
     border: none;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-weight: bold;
     border-radius: 5px;

}
.tbcenter{
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 2em;
}
td{
    font-family: 'Poppins', sans-serif;
}
table{
    border: 1px #000000;
}
.fa-check{
    color: green;
}

.fa-times{
    color: red;
}
.fa-clock-o{
    color: #f15d24;
}
.responsive-img {
  max-width: 100%;
  height: auto;
}
.price{
   text-align: center;
}
</style>

</head>
<body>
  <section style="background: #fff; padding-top: 30px; padding-bottom: 30px;">

        <div>
                        <img src="assets/images/Protto-2.0.png" style="height: 52px; display: block; margin-left: auto; margin-right: auto;">
                        <h4 style="text-align: center; margin-top: 10px;">Most <span style="color: #f15d24;">Trusted</span> Bike Service</h4>
        </div>
</section>

<section class="mbr-section content4" id="content4-f" style="padding-top: 20px; padding-bottom:20px;">

    <div class="container">
        <div class="media-container-row">
            <div class="title">
                <h2 class="align-center pb-3 mbr-fonts-style display-2" style="font-size: 45px; line-height: initial; font-weight: 400;">
                Ride Smart. Get your
                <select class="formmake">
                <option value="">Input Bike...select</option>
                <option value="Yahama">Yahama</option>
                <option value="Suzuki">Suzuki</option>
                </select>


                <strong><?php echo $make; ?> Motorbike</strong> serviced Today.<br><strong>Ride Worry Free, Switch to Protto!</strong></h2>
                <div class="table-wrapper">
      </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-fullscreen mbr-parallax-background" id="header15-e" style="background: #403a35;">

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-sm-8 content-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php echo $displaygallery; ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    </div>
    <div class="col-sm-4">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            <div data-form-alert="" hidden="" class="align-center">Thank you! We will be in touch with you shortly.</div>
            <form class="" action="processlanding.php" method="post" >
                <h3 style="text-align: left; padding-bottom: 10px; color: #ffffff; line-height: initial;"><strong>Unlock Coupon & Get Discounts on <?php echo $make; ?> Service.</strong></h3>
                <div data-for="name">
                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="name" data-form-field="Name" placeholder="Name" required="" id="name-header15-e">
                        <input type="hidden" class="form-control px-3" name="city" value="<?php echo $city; ?>">
                    </div>
                </div>

                <div data-for="phone">
                    <div class="form-group">
                        <input type="text" maxlength="10" pattern="\d{10}" title="Please enter a valid 10 digit mobile number" class="form-control px-3" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-header15-e">
                    </div>
                </div>

                <div data-for="model">
                    <div class="form-group">
                      <input type="hidden" class="form-control px-3" name="make" value="<?php echo $make; ?>" />
                      <select class="form-control" name="model" id="sel1" style="height: 3.5em;" required="">
                        <?php echo $modelitems; ?>
                      </select>
                    </div>
                </div>

                <span class="input-group-btn"><input type="submit" class="btn btn-form btn-primary display-4" style="width: 100%; font-weight: 700;" value="UNLOCK COUPON" /></span>
            </form>
            </div>
        </div>

    </div>
</div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="tabs3 cid-rhVWb1VnLv" id="tabs3-i" style="background:#f9f9f9;">





    <div class="container">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2" style="color: #403A35; font-size: 40px; font-weight: 800;">
           Why Protto?</h2>

    </div>
    <div class="container">
        <div class="row px-1">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <img src="https://protto.in/landing/icons/arrival.png" style="max-height: 120px; max-width: 120px;"/>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5" style="font-weight: 600; color:#403A35;">
                                Doorstep Collection & Delivery</h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7" style="color:#403A35;"></p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <img src="https://protto.in/landing/icons/transparency.png" style="max-height: 120px; max-width: 120px;"/>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5" style="font-weight: 600; color:#403A35;">
                               Upfront Pricing & Low-Cost</h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7" style="color:#403A35;"></p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <img src="https://protto.in/landing/icons/repair-expert.png" style="max-height: 120px; max-width: 120px;"/>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5" style="font-weight: 600; color:#403A35;">
                                High Equipped Workshops</h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7" style="color:#403A35;"></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sp-section-10" style="padding: 60px 0;">
<h2 class="mbr-section-title pb-5 mbr-fonts-style display-2" style="text-align: center; padding: 0 60px; font-size: 40px; font-weight: 800;">Customer Testimonials</h2>
<div class="container">
<div class="customreview" style="margin-bottom: 30px;">
<p><img style="display: block; margin-left: auto; margin-right: auto; max-width: 180px;" src="/mumbai/images/Google_Rating.png"></p>
</div><h3 style="text-align: center; padding-bottom: 40px; color: #f15d24; line-height: initial;"><strong>Trusted by 10,000+ Customers</strong></h3><div class="row">
<div id="sp-position7" class="col-sm-6 col-md-6" style="text-align: center;"><div class="sp-column "><div class="sp-module review"><div class="sp-module-content">

</div></div></div></div></div></div>
<div id="review-container" style="margin: 10px 40px;"><style>
  .romw { margin-bottom: 30px; }
      .romw { font-family: 'Arial'; }
    .romw p { margin: 0; padding: 0}
  .romw .romw-source-logo { float: right; }
  .romw .romw-source-logo img { height: 25px; margin:0;}
    .romw .romw-author-photo { float: left; margin: 0 10px 0 0; }
  .romw .romw-author-photo img { max-width: 60px; object-fit: cover; border-radius:50%; width: 60px; height: 60px; margin:0;}
  .romw .romw-author-stars { margin-bottom: 5px; margin-top: 0; text-align: left; font-size: 18px; line-height: initial; }
  .romw-fa { display: inline-block; font: normal normal normal 14px/1 FontAwesome; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
  .romw-fa-star:before {  content: ""; }
  .romw-fa-star-o:before { content: ""; }
  .romw-fa-star-half-empty:before, .romw-fa-star-half-full:before, .romw-fa-star-half-o:before {  content: ""; }
  .romw .romw-stars { display: inline-block; }
  .romw .romw-stars i, .romw .romw-stars svg { color: #ff5d48; font-size: 18px; width: 18px; height: initial;}
  .romw .romw-date { text-align: left; }
    .romw .romw-text { clear: both; padding-top: 15px; text-align: left; }
  .romw .romw-text .romw-more-link:hover { text-decoration: underline;}
     @media  screen and (max-width: 500px) {
    .romw .romw-author-stars span { display: block; }
  }


</style>
  <div class="romw-list">
      <div class="romw">
      <p class="romw-source-logo">
                      <img src="https://romw.co/images/source-logos/google_sm.png" alt="GooglePlaces">
              </p>
              <p class="romw-author-photo">
          <img src="https://ui-avatars.com/api/?name=Austin Pinto&amp;background=E91E63&amp;size=75&amp;color=ffffff&amp;rounded=1" alt="Austin Pinto">
        </p>
            <h3 class="romw-author-stars">
        <span class="romw-author">Austin Pinto</span>
                  <span class="romw-stars"><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i></span>
              </h3>
                        <p class="romw-date">June 20, 2019</p>
                    <p class="romw-text">
        Really convenient. The technician came to my office, diagnosed my bike in front of me. Then an inspection report was shared with me. The experience was unlike any service experience I have gotten from any service centers. Great Job.
              </p>
    </div>
      <div class="romw">
      <p class="romw-source-logo">
                      <img src="https://romw.co/images/source-logos/google_sm.png" alt="GooglePlaces">
              </p>
              <p class="romw-author-photo">
          <img src="https://ui-avatars.com/api/?name=Somesh Khatri&amp;background=E91E63&amp;size=75&amp;color=ffffff&amp;rounded=1" alt="Somesh Khatri">
        </p>
            <h3 class="romw-author-stars">
        <span class="romw-author">Somesh Khatri</span>
                  <span class="romw-stars"><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i></span>
              </h3>
                        <p class="romw-date">June 6, 2019</p>
                    <p class="romw-text">
        I had a problem in my chain. I wanted to know if it was a serious problem. Booked service on Protto. They told me about the problems with my bike. This helped me save 1000 Rs on my service cost. Definitely a repeat for me.
              </p>
    </div>
      <div class="romw">
      <p class="romw-source-logo">
                      <img src="https://romw.co/images/source-logos/google_sm.png" alt="GooglePlaces">
              </p>
              <p class="romw-author-photo">
          <img src="https://ui-avatars.com/api/?name=Ranjit Singh&amp;background=8BC34A&amp;size=75&amp;color=ffffff&amp;rounded=1" alt="Ranjit Singh">
        </p>
            <h3 class="romw-author-stars">
        <span class="romw-author">Ranjit Singh</span>
                  <span class="romw-stars"><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i><i class="romw-fa romw-fa-star" aria-hidden="true"></i></span>
              </h3>
                        <p class="romw-date">May 30, 2018</p>
                    <p class="romw-text">
          I care for my bike more than anything else. After servicing at RE Service Center, my bike had a problem in handle when I used to brake. I took protto on trial to know the problem in my bike. They helped me understand the problems that were unresolved during service at RE Service center. Best part is they service the bike based on your usage. As I do road trips very often, they suggested me a few additional items that helped me in getting that performance and ride experience which otherwise I never got. thank you Protto.
              </p>
    </div>
  </div>


</div>
</section>

<section class="accordion1 cid-rhW25O0eyy" id="accordion1-j">




    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2" style="font-size: 40px; font-weight: 800;">FAQ
                    </h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_7" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_7" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>What engine oil will you be using for my <?php echo $make; ?> Two-wheeler?&nbsp;</h4>
                            </a>
                        </div>
                        <div id="collapse1_7" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_7">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   We use 20W 40 Motul Premium Mineral Oil that increases your engine life, mileage, and provides superior protection against wear & tear.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_7" aria-expanded="false" aria-controls="collapse2">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;What spare parts do you use for <?php echo $make; ?> Two-wheelers?</h4>
                            </a>

                        </div>
                        <div id="collapse2_7" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_7">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   100% <?php echo $make; ?> Genuine Spares and Consumables guaranteed. All the parts are pre-approved by our Team to ensure whatever goes into your <?php echo $make; ?> motorcycle is nothing but a quality genuine spare part.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_7" aria-expanded="false" aria-controls="collapse3">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> How much time does it take to service my <?php echo $make; ?> Two-wheeler?</h4>
                            </a>
                        </div>
                        <div id="collapse3_7" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_7">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">The service time for your <?php echo $make; ?> depends on the service package. A ProDRY service package takes 4-5 hours whereas, a ProWET service package takes at least 5-6 hours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse4_7" aria-expanded="false" aria-controls="collapse4">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;Do I have to drop my two-wheeler at the service station?</h4>
                            </a>
                        </div>
                        <div id="collapse4_7" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#bootstrap-accordion_7">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">Not at all, we provide FREE doorstep collection & delivery to save you from the hassle of visiting service station.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding: 60px; background: #403a35;">
<div>
<div class="container">
<div class="media-container-row content" style="text-align: center; color: #ffffff;">
<div class="col-12 col-md-4 mbr-fonts-style display-7">
<h3 class="pb-3"><strong>Corporate Address</strong></span></h3>
<p class="mbr-text"><strong>Asphalt AutoTech Pvt. Ltd.</strong><br />112, Raaj Chamber<br />New Nagardas Road,<br />Andheri East,<br />Mumbai - 400069</p>
</div>
<div class="col-12 col-md-4 mbr-fonts-style display-4">
<h3 class="pb-3"><strong>Site Links</strong></span></h3>
<p class="mbr-text"><a href="#" style="color: #ffffff;">Terms & Conditions</a><br><a href="#" style="color: #ffffff;">Service Refund & Revision Policy</a><br><a href="#" style="color: #ffffff;">Privacy Policy</a></p>
</div>
<div class="col-12 col-md-4 mbr-fonts-style display-7">
<h3 class="pb-3"><strong>Contact Details</strong></span></h3>
<p class="mbr-text">+91 799065 3359<br>support@protto.in<br><br><a href="#" style="color: #ffffff; font-size: 25px;"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;<a href="#" style="color: #ffffff; font-size: 25px;"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;<a href="#" style="color: #ffffff; font-size: 25px;"><i class="fa fa-linkedin"></i></a></p>
</div>
</div>
</div>
</div>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script>
      $('.carousel').carousel();
  </script>

 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
  </body>
</html>
