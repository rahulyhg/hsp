<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<title>Events | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<style>
    .half{
        width: 620px;
    }
    .icon_adjust{
        width: 630px;
    }
    .icon_adjust_full{
        width: 100%;
    }
    .data{
        width: 50%;
        float: left;
    }
    .soc{
        float: right;
        padding: 3%;
    }
    .sample_img{
        width: 20%;
        height: 200px;
        float: left;
        background-position: center;
        background-repeat: no-repeat;
    }
    
     .deal_data{
        width: 30%;
        float: left;
        font-size: 15px;
        padding: 38px;
    }
    .btn{
        width: 150px;
        height: 50px;
        float: left;
        text-align: center;
        padding-top: 10px;
        margin: 10px 0 10px 20px;
        border: 1px solid #fff;
    }
    .btn:hover{
        color: #000;
        background-color: #C4C4C4;
    }
    .heading{
        color: #f00;
        margin-top: 10px;
    }
    .deal-img{
         width: 20%;
        height: 200px;
        float: left;
        background-position: center;
        background-repeat: no-repeat;
    }
    .soc a{
        display: inline;
    }
     
    .flexslider .slides .soc img {
        width: 20%;
        margin-left: 5px;
    }
     .event_slide p{
        padding: 10px 0px 10px 0;
        float: none;
        margin: 0 5%;
    }

    .event_slide .small{
        padding: 0;
        height: 20px;
        width: 100px;
        text-align: center;
    }
    .event-data{
        width: 75%;
        height: 200px;
        float: left;
        margin: 10px 20px 10px 20px;
    }
    .data1{
        height: 150px;
    }
   
</style>

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
          <li><a href="<?php echo site_url("website/events_list"); ?>" class="selected">EVENTS
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
      <div id="container" class="clearfix container_about">
       <div class="element  clearfix col2-3 home bg centered slider full event_slide">
          <div class="bg-image">
            <div class="flexslider">
              <div class="images">
                <ul class="slides">
                <?php if(count($events)>0) { 
                    foreach($events as $event) { ?>
                  <li>
                      <!--<img src="<?php //echo base_url("uploads")."/".$event->logo;?>" alt=""/>-->
                      <div class="deal_img">
                          
                            <table align="center" valign="center">
                                  <tr>
                                    <td><img src="<?php echo base_url("uploads")."/".$event->logo; ?>"/></td>
                                  </tr>
                              </table>
                          
                      </div>
                       <div class="data">           
                        <div class="info-icon icon_adjust infos-left-event"><i class="icons event"></i>
                        <h2 style="float: left;"><?php echo $event->name; ?></h2>
                            <div class="soc">
                                <a href="<?php echo $event->facebook; ?>"><img src="<?php echo base_url("frontend")."/";?>images/fb.png" /></a> 
                                <a href="<?php echo $event->date; ?>"><img src="<?php echo base_url("frontend")."/";?>images/pin.png" /></a>
                                <a href="<?php echo $event->twitter; ?>"><img src="<?php echo base_url("frontend")."/";?>images/tw.png" /></a>
                                <a href="<?php echo $event->instagram; ?>"><img src="<?php echo base_url("frontend")."/";?>images/insta.png" /></a>          
                            </div>
                        </div>
                          <p><?php echo $event->description; ?></p>
                                          <div class="info-icon no-margin icon_adjust">
                            <h2 style="float: left;">Details</h2>
                          </div>
                            <div class="infos-left infos-left-event">
                            <p class="small">Date</p>
                          </div>
                          <div class="infos-right">
                            <p class="small"><?php echo $event->date; ?></p>
                          </div>
                          <div class="clear"></div>
                          <div class="borderline"></div>
                          <div class="infos-left infos-left-event">
                            <p class="small">Day</p>
                          </div>
                          <div class="infos-right">
                            <p class="small"><?php echo $event->day; ?></p>
                          </div>
                          <div class="clear"></div>
                          <div class="borderline"></div>
                          <div class="infos-left infos-left-event">
                            <p class="small">Time</p>
                          </div>
                          <div class="infos-right">
                            <p class="small"><?php echo $event->time; ?></p>
                          </div>
                          <div class="clear"></div>
                          <div class="borderline"></div>
                          <div class="infos-left infos-left-event">
                            <p class="small">Venue</p>
                          </div>
                          <div class="infos-right">
                            <p class="small">High Street Phoenix</p>
                          </div>
                          <div class="clear"></div>
                          <div class="borderline"></div>
                          <div class="break"></div>
                                       </div>
                                  </li>
                                  <?php }  }else { ?>
                                  <p>No events coming up anytime soon</p>
                                  <?php }?>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <?php foreach($oldevents as $oldevent) { ?>
         <div class="element home clearfix col1-3 full detail other_events">
          <div class="info-icon icon_adjust_full"><i class="icons event"></i>
            <h2>Other Events At The Mall</h2>
            <div class="soc">
                          <a href="<?php echo $oldevent->facebook; ?>"><img src="<?php echo base_url("frontend")."/";?>images/fb.png" /></a> 
                          <a href="<?php echo $oldevent->googleplus; ?>"><img src="<?php echo base_url("frontend")."/";?>images/pin.png" /></a>
                          <a href="<?php echo $oldevent->twitter; ?>"><img src="<?php echo base_url("frontend")."/";?>images/tw.png" /></a>
                          <a href="<?php echo $oldevent->instagram; ?>"><img src="<?php echo base_url("frontend")."/";?>images/insta.png" /></a>            
                        </div>
          </div>
           
            <div class="sample_img" style="background-image: url('<?php echo base_url("uploads")."/".$oldevent->logo; ?>');"></div>
            
                <div class="event-data">
                    <div class="data1">
                       <div class="sample_data">
                            <h6><?php echo $oldevent->name; ?></h6>
                            <?php echo $oldevent->day; ?>, <?php echo $oldevent->date; ?></br><?php echo $oldevent->time; ?>
                       </div>
                    <div class="sample_data sample_data_desc">
                      <!--<div class="btn">Visit Brand</div>-->
                        <p><?php echo $oldevent->description; ?></p>
                    </div>
                    <!--<div class="sample_data">
                        <div class="btn">Visit Brand</div>
                      
                    </div>-->
                 </div>
                <!--<div class="data2">
                    <p><?php echo $oldevent->description; ?></p>
                </div>-->
            </div>
          </div>
            <?php }; ?>
    </div>
  </div>
</div>
<footer>
  <ul class="social clearfix alignleft">
    <li ><a href="contact.php">CONTACT</a></li>
      <li><a href="about_us.php">ABOUT</a></li>
      <li ><a href="press.php">PRESS</a></li>
      <li ><a href="#">CONCIERGE SERVICES</a></li>
      <li ><a href="jobs.php">JOBS</a></li>
      <li ><a href="#">GIFT CARDS</a></li>
  </ul>
    <ul class="copyright clearfix alignleft">
      <li><a href="#"><img src="<?php echo base_url("frontend")."/";?>images/inst_b.png" /></a> </li>
      <li><a href="#"><img src="<?php echo base_url("frontend")."/";?>images/youtube_b.png" /></a> </li>
      <li><a href="#"><img src="<?php echo base_url("frontend")."/";?>images/pinintrest_b.png" /></a> </li>
      <li><a href="https://twitter.com/gophoenixing?original_referer=http%3A%2F%2Fhighstreetphoenix.com%2F&profile_id=134720718&tw_i=552721616396750848&tw_p=embeddedtimeline&tw_w=351643332365139968" target="_blank"><img src="<?php echo base_url("frontend")."/";?>images/twitter_b.png" /></a> </li>
      <li><a href="https://www.facebook.com/highstreetphoenix" target="_blank"><img src="<?php echo base_url("frontend")."/";?>images/facebook_b.png" /></a> </li>
      </ul>
</footer>
<div id="backtotop">
  <ul>
    <li><a id="toTop" href="#" onClick="return false">Back to Top</a></li>
  </ul>
</div>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
</body>
</html>