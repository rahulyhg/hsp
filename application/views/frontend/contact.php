<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<title>Contact | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />    
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/TweenMax.min.js"></script>
    <script src="<?php echo base_url("frontend")."/";?>js/ScrollToPlugin.min.js"></script>
    <script>
        $(function () {
            var $window = $(window);        //Window object
            var scrollTime = 1.2;           //Scroll time
            var scrollDistance = 170;       //Distance. Use smaller value for shorter scroll and greater value for longer scroll        
            $window.on("mousewheel DOMMouseScroll", function (event) {
                event.preventDefault();
                var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
                var scrollTop = $window.scrollTop();
                var finalScroll = scrollTop - parseInt(delta * scrollDistance);
                TweenMax.to($window, scrollTime, {
                    scrollTo: { y: finalScroll, autoKill: true },
                    ease: Power1.easeOut,   //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                    autoKill: true,
                    overwrite: 5
                });
            });
        });
        </script>
</head>
<body>
<div id="wrap">
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <div id="quick-info" class="clearfix top_head_other">
    <p class="pointer">High Street Phoenix, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013</p>
    <p class="mail"><a href="mailto:info@highstreetphoenix.com" title="">info@highstreetphoenix.com</a></p>
    <p class="phone">+91-22-43339994</p>
    <p class="time">We're open MON through FRI from 7am till 11pm</p>
  </div>
  <header id="wrapper" class="clearfix header_other">
    <h1 id="logo"><a href="index.php">High Street Phoenix</a></h1>
      <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="<?php echo site_url("website/index"); ?>">HOME
          <div class="nav-button"></div>
          </a></li>
        <li><a href="<?php echo site_url("website/brands_list"); ?>">BRANDS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/deals_list"); ?>">DEALS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/events_list"); ?>">EVENTS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/eat_list"); ?>">DINE
          <div class="nav-button"></div>
          </a></li>
          <li><a href="<?php echo site_url("website/contact"); ?>" class="selected">CONTACT
          <div class="nav-button"></div>
          </a></li>
      </ul>
    </div>
  </header>
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix container_about">
        <div class="element  clearfix col2-3 home bg centered">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3772.560449584006!2d72.824564!3d18.99501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce8c6043c51b%3A0x469288721a1d52aa!2sHigh+Street+Phoenix!5e0!3m2!1sen!2sin!4v1417674505103" width="600" height="620" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="element home clearfix col1-3">
          <div class="info-icon"><i class="icons email"></i>
            <h2>Contact Us</h2>
          </div>
          <p>
            <br/>High Street Phoenix,<br/>The Phoenix Mills Limited,<br/>462, Senapati Bapat Marg,<br/>Lower Parel (West),<br/>Mumbai - 400 013.
          </p>
        </div>
        <div class="element clearfix col1-3 border contact home">
          <div id="contact">
            <div id="message"></div>
            <form method="post" action="" name="contactform" id="contactform" autocomplete="off">
              <fieldset>
              <div class="alignleft padding-right">
                <label for="name" accesskey="U"><span class="required">Name</span></label>
                <input name="name" type="text" id="name" size="30" title="Name *" />
                <label for="email" accesskey="E"><span class="required">Email</span></label>
                <input name="email" type="text" id="email" size="30" title="Email *" />
                <label for="phone" accesskey="P">Phone</label>
                <input name="phone" type="text" id="phone" size="30" title="Phone" />
              </div>
              <label for="comments" accesskey="C"><span class="required">Comments</span></label>
              <textarea name="comments" cols="40" rows="3" id="comments" title="Comment *"></textarea>
              <input type="submit" class="submit" id="submit" value="Submit" />
              </fieldset>
            </form>
          </div>
        </div>
        <div class="element home clearfix col1-3 trainers">
          <div class="info-icon"><i class="icons clock"></i>
            <h2>Mall Timing</h2>
          </div>
          <p><br/>Sunday to Thursday<br/>11 am to 10pm <br/><br/>Friday and Saturday<br/> 11 am to 11.30pm</p>
        </div>
          <div class="element home clearfix col1-3 trainers">
          <div class="info-icon"><i class="icons support"></i>
            <h2>Need support?</h2>
          </div>
          <p><br/><a href="mailto:info@highstreetphoenix.com">info@highstreetphoenix.com</a><br/><br/>022 43339999<br />+91-22-43339994</p>
        </div>
    </div>
  </div>
</div>
<?php $this->load->view("frontend/footer");?>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/input.fields.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.form.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.counterup.min.js"></script>
</body>
</html>