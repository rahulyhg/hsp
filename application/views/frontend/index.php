<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<title>Home | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" /><link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/ticker.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.smoothwheel.js"></script>

<!--<script src="<?php //echo base_url("frontend")."/";?>js/TweenMax.min.js"></script>-->
<!--<script src="<?php //echo base_url("frontend")."/";?>js/ScrollToPlugin.min.js"></script>-->
<script>
    //$(function () {
    //    var $window = $(window);        //Window object
    //    var scrollTime = 1.2;           //Scroll time
    //    var scrollDistance = 170;       //Distance. Use smaller value for shorter scroll and greater value for longer scroll        
    //    $window.on("mousewheel DOMMouseScroll", function (event) {
    //        event.preventDefault();
    //        var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
    //        var scrollTop = $window.scrollTop();
    //        var finalScroll = scrollTop - parseInt(delta * scrollDistance);
    //        TweenMax.to($window, scrollTime, {
    //            scrollTo: { y: finalScroll, autoKill: true },
    //            ease: Power1.easeOut,   //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
    //            autoKill: true,
    //            overwrite: 5
    //        });
    //    });
    //});
        </script>
</head>
<body>
    <div class="top_main">
        <div class="top_main_img" style="background-image: url("<?php echo base_url("uploads")."/".$config[9]->image; ?>");"></div>
        <div class="main_logo" style="background-image: url(<?php echo base_url("frontend")."/";?>images/hsp_main_logo.png); "></div>
        <div class="brand_ticker">
            <div id="slider" class="desktop_ticker">
              <ul>
                       <?php for($i=0; $i<count($brandticker); $i++) { ?>
                       <?php if($i==0 || $i%5==0) { ?>
                       <li >
                        <?php }; ?>
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("uploads")."/".$brandticker[$i]->logo; ?>); "></div>
                        <?php if($i%5 == 4) { ?>
                        </li>
                        <?php }; ?>
                       <?php } ?>
              </ul>  
            </div>
             <div id="slider_m" class="mobile_ticker">
              <ul>
                        <li >
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand1.png); "></div>
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand2.png); "></div>
                        </li>
                        <li >
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand3.png); "></div>
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand4.png); "></div>
                        </li>
                        <li >
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand5.png); "></div>
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand6.png); "></div>
                        </li>
                        <li >
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand7.png); "></div>
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand8.png); "></div>
                        </li>
                        <li >
                            <div class="ticker_brand" style="background-image: url(<?php echo base_url("frontend")."/";?><img/brands/brand9.png); "></div>
                        </li>   
              </ul>  
            </div>
        </div>
    </div>
<div id="wrap">
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <div id="quick-info" class="clearfix">
    <p class="pointer">High Street Phoenix, Senapati Bapat Marg, Lower Parel, Mumbai, Maharashtra 400013</p>
    <p class="mail"><a href="mailto:info@highstreetphoenix.com" title="">info@highstreetphoenix.com</a></p>
    <p class="phone">+91-22-43339994</p>
    <p class="time">We're open from 11am to 10pm on all days</p>
  </div>
  <header id="wrapper" class="clearfix">
    <h1 id="logo"><a href="index.php">High Street Phoenix</a></h1>
      <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="<?php echo site_url("website/index"); ?>" class="selected">HOME
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
          <li><a href="<?php echo site_url("website/contact"); ?>">CONTACT
          <div class="nav-button"></div>
          </a></li>
      </ul>
    </div>
  </header>
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
        <div class="element clearfix col2-3 home bg centered slider">
          <!--<div class="bg-image">
              <video autoplay loop width="620" height="620" style="position: fixed; right: 0; bottom: 0;
min-width: 100%; min-height: 100%;
width: auto; height: auto; z-index: -100;
background-size: cover;">
                  <source src="<?php //echo base_url("uploads")."/".$video->video; ?>" type="video/mp4">
            </video>
          </div>-->
          <div class="bg-image">
            <div class="flexslider">
              <div class="images">
                <ul class="slides">
                  <li><img src="http://hepta.me/hsp/frontend/images/classes01.jpg" alt="" /></li>
                  <li><img src="http://hepta.me/hsp/frontend/images/classes04.jpg" alt="" /></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="element home clearfix col1-3">
          <div class="info-icon"><i class="icons cup"></i>
            <h2><?php echo $config[0]->title; ?></h2>
          </div>
          <p><?php echo $config[0]->text; ?></p>
        </div>
        <div class="element  clearfix col1-3 home color pricing">
          <h2><span><?php echo $config[7]->title; ?></span></h2>
          <div class="price"><span></span></div>
          <p class="small"> <?php echo $config[7]->text; ?>
           </p>
        </div>
        <div class="element  clearfix col1-3 home classes"> <a href="#" title="">
          <div class="images"><img src="<?php echo base_url("uploads")."/".$config[1]->image; ?>" alt="" width="300" height="300" />
              <div class="overlay">
                <div class="left_div"><span><?php echo $config[1]->title; ?></span></div>
                <div class="view_btn">View More</div>
              </div>
          </div>
          </a> </div>
        <div class="element home clearfix col1-3 trainers">
          <div class="info-icon"><i class="icons trainer"></i>
            <a href="#"><h2><?php echo $config[2]->title;?></h2></a>
          </div>
          <p><?php echo $config[2]->text;?></p>
        </div>
        <div class="element  clearfix col1-3 home classes"> <a href="#" title="">
          <div class="images"><img src="<?php echo base_url("uploads")."/".$config[3]->image; ?>" alt="" width="300" height="300" />
            <div class="overlay">
                <div class="left_div"><span><?php echo $config[3]->title;?></span></div>
                <div class="view_btn">View More</div>
              </div>
          </div>
          </a> </div>
        <div class="element  clearfix col1-3 home classes"> <a href="#" title="">
          <div class="images"><img src="<?php echo base_url("uploads")."/".$config[4]->image; ?>" alt="" width="300" height="300"  />
            <div class="overlay">
                <div class="left_div"><span><?php echo $config[4]->title;?></span></div>
                <div class="view_btn">View More</div>
              </div>
          </div>
          </a> </div>
        <div class="element clearfix col1-3 news home"> <a href="">
          <h5><?php echo $config[6]->title;?></h5>
          </a>
          <p><?php echo $config[6]->text;?></p>
          <a href="#">
          <div class="when">
            <p class="small alignleft"><?php echo $config[4]->date;?></p>
            <p class="small alignright">read more</p>
          </div>
          </a> </div>
        <div class="element home clearfix col1-3 news"> <a href="">
          <h5><?php echo $config[5]->title;?></h5>
          </a>
          <p><?php echo $config[5]->text;?></p>
          <a href="#">
          <div class="when">
            <p class="small alignleft"><?php echo $config[5]->date; ?></p>
            <p class="small alignright">read more</p>
          </div>
          </a> </div>
        <div class="element home clearfix col1-3 news"> <a href="#">
          <h5><?php echo $config[8]->title;?></h5>
          </a>
          <p><?php echo $config[8]->text;?></p>
          <a href="#">
          <div class="when">
            <p class="small alignleft"><?php echo $config[8]->date;?></p>
            <p class="small alignright">read more</p>
          </div>
          </a> </div>
        <div class="element clearfix col2-3 contact">
          <div id="map"></div>
        </div>
        
        <?php if($config[10]->title) { ?>
        <div class="element  clearfix col1-3 color home">
          <h2><span><?php echo $config[10]->title;?></span></h2>
          <div class="price"><span></span></div>
          <p class="small"><?php echo $config[10]->text;?></p>
        </div>
        <?php }; ?>
        <div class="element home clearfix col1-3 contact">
          <div class="info-icon" style="margin-bottom: 0;"><i class="icons email"></i>
            <h2>Contact Us</h2>
          </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3772.560449584006!2d72.824564!3d18.99501!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce8c6043c51b%3A0x469288721a1d52aa!2sHigh+Street+Phoenix!5e0!3m2!1sen!2sin!4v1416823845850" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
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
          <div id="stats_bottom">
          <div class="element home clearfix col1-3">
              <div class="counter_mid">
                <div class="counter_div img" style="background-image: url(<?php echo base_url("frontend")."/";?>images/tag.png);"></div>
                <div class="counter_div counter" id="brand_count"><span class="number">500</span>+</div>
                <div class="counter_div name">BRANDS</div>
              </div>
          </div>
          <div class="element home clearfix col1-3">
              <div class="counter_mid">
                <div class="counter_div img" style="background-image: url(<?php echo base_url("frontend")."/";?>images/foot.png);"></div>
                <div class="counter_div counter"><span class="number">60000</span>+</div>
                <div class="counter_div name">FOOTFALLS</div>
              </div>
          </div>
          <div class="element home clearfix col1-3">
              <div class="counter_mid">
                <div class="counter_div img" style="background-image: url(<?php echo base_url("frontend")."/";?>images/car.png);"></div>
                <div class="counter_div counter"><span class="number">5000</span>+</div>
                <div class="counter_div name">LUXURIOUS CARS</div>
              </div>
          </div>
          <div class="element home clearfix col1-3">
              <div class="counter_mid">
                <div class="counter_div img" style="background-image: url(<?php echo base_url("frontend")."/";?>images/like.png);"></div>
                <div class="counter_div counter"><span class="number">250000</span>+</div>
                <div class="counter_div name">LIKES</div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php $this->load->view("frontend/footer");?>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<!--<script src="<?php //echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>

<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/input.fields.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.form.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.counterup.min.js"></script>

</body>
</html>