<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="images/bg-cup.png">
<link rel="icon" href="images/bg-cup.png">
<title>Press | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'> 
    <style>
    .icon_adjust{
        width: 620px;
    }
    input, textarea, select
    {
        height: 40px;
    }
    #year
    {
        float: right;
    }
    h1{
        font-size: 30px;font-weight: 200;
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
    <h1 id="logo"><a href="index.php">High Street Phoenix</a></h1>
      <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="index.php">HOME
          <div class="nav-button"></div>
          </a></li>
        <li><a href="brands_list.php">BRANDS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="deals_list.php">DEALS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="events_list.php">EVENTS
          <div class="nav-button"></div>
          </a></li>
          <li><a href="eat_list.php">DINE
          <div class="nav-button"></div>
          </a></li>
          <li><a href="contact.php">CONTACT
          <div class="nav-button"></div>
          </a></li>
      </ul>
    </div>
  </header>
  <div id="content">
    <div class="container" id="container1">
        <div class="header" style="height: 50px;">
              <h1 style="float: left;">Press</h1>
              <select name="year" id="year" style="border: 1px solid #fff"></select>
         </div>  
      <div id="container extra" class="clearfix">
        <div class="element clearfix col1-3 home"> 
            <a href="images/classes01.jpg" title="Heavy Weight Lifting" data-fancybox-group="group1" class="popup">
            <div class="images">
                img src="<?php echo base_url("frontend")."/";?>images/classes01.jpg" alt="" />
               <div class="overlay">
                <div class="left_div">ZARA</div>
              </div>
            </div>
          </a> </div>
        <div class="element clearfix col1-3 home"> <a href="images/classes02.jpg" title="Heavy Weight Lifting" data-fancybox-group="group1" class="popup">
          <div class="images"><img src="<?php echo base_url("frontend")."/";?>images/classes02.jpg" alt="" /><div class="overlay">
                <div class="left_div">ZARA</div>
              </div></div>
          </a> </div>
          <div class="element clearfix col1-3 home"> <a href="images/classes03.jpg" title="Heavy Weight Lifting" data-fancybox-group="group1" class="popup">
          <div class="images"><img src="<?php echo base_url("frontend")."/";?>images/classes03.jpg" alt="" /><div class="overlay">
                <div class="left_div">ZARA</div>
              </div></div>
          </a> </div>
          <div class="element clearfix col1-3 home"> <a href="images/classes04.jpg" title="Heavy Weight Lifting" data-fancybox-group="group1" class="popup">
          <div class="images"><img src="<?php echo base_url("frontend")."/";?>images/classes04.jpg" alt="" /><div class="overlay">
                <div class="left_div">ZARA</div>
              </div>    </div>
          </a> </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view("frontend/footer");?>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url("frontend")."/";?>js/jquery.smoothwheel.js"></script>
    <script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
<script>
       var select = document.getElementById('year'),
       year = new Date().getFullYear(),
       html = '<option>Select Year</option>';
        for(i = year; i >= year-13; i--) {
          html += '<option value="' + i + '">' + i + '</option>';
        }

        select.innerHTML = html;
</script>
</body>
</html>