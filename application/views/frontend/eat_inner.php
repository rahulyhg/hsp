<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="images/bg-cup.png">
<link rel="icon" href="images/bg-cup.png">
<title>Dine | High Street Phoenix</title>
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
    .info-icon1{
        border-top: 1px solid #000;
         position: fixed;
          bottom: 0px;
          margin-right: auto;
          margin-left: auto;
          width: 310px;
          background-color: #000;
    }
    .info-icon1 a{
        font-size: 15px;
    }
    .icon_adjust{
        width: 620px;
    }
    .full{
        width: 1260px;   
    }
    .icon_adjust_full{
        width: 68%;
    }
    .full p{
        width: 70%;
        float: left;
    }
    .sample_img{
        width: 34%;
        height: 212px;
        background-image: url('images/classes02.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        float: right;
        margin-top: -17%;
        margin-right: 2%;
    }
    .full-logo{
        height: 200px;
        background-image: url('images/united.png');
        background-repeat: no-repeat;
        background-color: #000;
        background-position: center;
    }
    .soc{
        text-align: center;
        padding: 8px;
        width: 100%;
    }
    .soc a img{
        margin-right: 15px;
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
          <li><a href="<?php echo site_url("website/eat_list"); ?>" class="selected">DINE
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
            <div class="element home clearfix col1-3 full full-logo logo-adj" style="background-image: url('<?php if($dinerdata->logo != "") { echo base_url("uploads")."/".$dinerdata->logo; }else{ echo base_url("uploads")."/nologo.jpg"; }; ?>');">
          </div>
       <div class="element home clearfix col1-3 half half-img">
              <img src="<?php if($dinerdata->image != "") { echo base_url("uploads")."/".$dinerdata->image;} else{ echo base_url("uploads")."/noimage.jpg"; }; ?>" alt="" />
          </div>
          <div class="element home clearfix col1-3">
          <div class="info-icon"><i class="icons cup"></i>
            <h2>About Product</h2>
          </div>
          <div class="scrollbox brand-desc"><p><?php if($dinerdata->description != ""){ echo $dinerdata->description;}else { echo "Description not specified";}; ?> </p></div>
          </div>
      
         <div class="element home clearfix col1-3">
          <div class="info-icon no-margin icon_adjust"><i class="icons details"></i>
            <h2>Details</h2>
          </div>
          <div class="infos-left il">
            <p class="small">Hours</p>
          </div>
          <div class="infos-right lr">
            <p class="small"><?php if($dinerdata->hours != ""){ echo $dinerdata->hours;}else{ echo "NA"; }; ?></p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left il">
            <p class="small">Floor</p>
          </div>
          <div class="infos-right lr">
            <p class="small"><?php if($dinerdata->location != ""){ echo $dinerdata->location;}else{ echo "NA"; }; ?><br /></p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left il">
            <p class="small">Phone</p>
          </div>
          <div class="infos-right lr">
            <p class="small"><?php if($dinerdata->contactno != ""){ echo $dinerdata->contactno;}else{ echo "NA"; }; ?></p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
             <div class="infos-left il">
            <p class="small">Amenity</p>
          </div>
          <div class="infos-right lr">
            <p class="small"> 
                  <?php foreach ($dineramenities as $ame) { ?>
                      <a href=""><img src="<?php echo base_url("frontend")."/";?>images/amenity<?php echo $ame->id;?>_w.png" /></a>
                  <?php }; ?>
            </p>
          </div>
            <div class="soc" style="border-top: 1px solid #000;">
                  <a href="<?php echo $dinerdata->facebook; ?>"><img src="<?php echo base_url("frontend")."/";?>images/facebook.png" /></a> 
                  <a href="<?php echo $dinerdata->twitter; ?>"><img src="<?php echo base_url("frontend")."/";?>images/twitter.png" /></a>
                  <a href="<?php echo $dinerdata->instagram; ?>"><img src="<?php echo base_url("frontend")."/";?>images/pinintrest.png" /></a>
                  <a href="<?php echo $dinerdata->googleplus; ?>"><img src="<?php echo base_url("frontend")."/";?>images/youtube.png" /></a>   
                  <a href="<?php echo $dinerdata->email; ?>"><img src="<?php echo base_url("frontend")."/";?>images/mail.png" /></a>          
              </div>
        </div>
    </div>
                          
              <?php if($dinerdata->specialoffer) { ?>
           <div class="element home clearfix col1-3 half detail">
              <div class="info-icon icon_adjust"><div class="info-icon"><i class="icons special"></i>
                <h2>Special Offer</h2>
              </div>
              <p style="width: 58%;"><?php echo $dinerdata->specialoffer; ?></p>
                <div class="sample_img" style="background-image: url('<?php echo base_url("uploads/").$dinerdata->specialofferimage; ?>')"></div>
            </div>
            </div>
            <?php }; ?>
         
  </div>
</div>
<?php $this->load->view("frontend/footer");?>
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
