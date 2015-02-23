<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="images/bg-cup.png">
<link rel="icon" href="images/bg-cup.png">
<title>About Us | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
 <script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
<style>
    .half{
        width: 620px;
        height: 620px;
    }
    .icon_adjust{
        width: 620px;
    }
    .soc{
        float: right;
        padding: 3%;
    }
    .share{
        width: 50%;
        height: 50px;
        float: left;
        margin-top: -5%;
        padding: 2%;
    }
</style>
</head>
<body>
<div id="wrap">
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <div id="quick-info" class="clearfix">
    <p class="pointer">High Street Phoenix, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013</p>
    <p class="mail"><a href="mailto:info@highstreetphoenix.com" title="">info@highstreetphoenix.com</a></p>
    <p class="phone">+91-22-43339994</p>
    <p class="time">We're open MON through FRI from 7am till 11pm</p>
  </div>
  <header id="wrapper" class="clearfix">
    <h1 id="logo"><a href="#">High Street Phoenix</a></h1>
    <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="<?php echo site_url("website/index"); ?>">HOME
          <div class="nav-button"></div>
          </a></li>
        <li><a href="<?php echo site_url("website/brands_list"); ?>" > BRANDS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/deals_list"); ?>" >DEALS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/events_list"); ?>">EVENTS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/eat_list"); ?>">DINE
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/contact"); ?>">CONTACT
          <div class="nav-button"></div>
          </a></li>
      </ul>
    </div>
  </header>
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
       <div class="element  clearfix col2-3 home bg centered slider">
          <div class="bg-image">
            <div class="flexslider">
              <div class="images">
                <ul class="slides">
                  <li><img src="<?php echo base_url("frontend")."/";?>images/about.jpg" alt="" /></li>
                  <li><img src="<?php echo base_url("frontend")."/";?>images/about1.jpg" alt="" /></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="element home clearfix col2-3 slider detail">
          <div class="info-icon icon_adjust"><i class="icons cup"></i>
            <h2 style="float: left;">High Street Phoenix</h2>
              <div class="soc">
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/fb.png" /></a> 
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/pin.png" /></a>
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/tw.png" /></a>
                  <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/insta.png" /></a>            
              </div>
          </div>
          <p>High Street Phoenix (HSP) is the first retail led consumption centre developed in India over a sprawling 3.3 million square feet. It houses over 500 brands including a variety of F&B, entertainment, commercial and residential complexes. Pioneered by The Phoenix Mills Co. Ltd., HSP is led by its young, dynamic Managing Director, Atul Ruia and his team of professionals. A pioneer & one of the renowned leading developers of leading mixed use projects; The Phoenix Mills Co. Ltd. has a presence in 13 cities across country.
At HSP, each zone has been specifically conceptualized and designed to offer an international experience and as an answer to emerging urban agglomerations typically defined as 'mixed-use developments'. The centre houses 3 distinct shopping zones viz. Skyzone, Grand Galleria and High Street Units (HSU). The multi-leveled Skyzone boasts of anchor stores of leading national and international brand retail outlets. The Grand Galleria caters to impulse shoppers and is connected to PVR Cinema’s 2000 seater 7 digital screens multiplex. </p>
        </div>
    </div>
  </div>
</div>
<?php $this->load->view("frontend/footer");?>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
</body>
</html>
