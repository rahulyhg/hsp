<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="ppandp">
<meta name="Description" content="FitnessPoint - Responsive Retina-Ready HTML5 One-Page" />
<title>FitnessPoint - Responsive Retina-Ready HTML5 One-Page</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if gt IE 8]><!--><link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /><!--<![endif]-->
<!--[if !IE]> <link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
<!--[if lt IE 9]> <link href="<?php echo base_url("frontend")."/";?>css/styles-ie8.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,600,800' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Volkhov:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
     <script type="text/javascript">
        $(document).ready(function () {
            $('.menu_click').click(function () {
                $('.mobile_menu ul').slideToggle();
            });


            var OSName = "Unknown OS";
            if (navigator.appVersion.indexOf("Win") != -1) OSName = "Windows";
            if (navigator.appVersion.indexOf("Mac") != -1) OSName = "MacOS";
            if (navigator.appVersion.indexOf("X11") != -1) OSName = "UNIX";
            if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Linux";

            //alert('Your OS: ' + OSName);

            if (navigator.appVersion.indexOf("Mac") != -1) {
                //alert(OSName);
                $('#for_mac').css('margin-top','600px');
            };
        });
    </script>
</head>
<body>
<div id="wrap">
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <div id="quick-info" class="clearfix">
    <p class="pointer">22 Miron Drive, New York City, 12603 NY</p>
    <p class="mail"><a href="mailto:info@domain.com" title="">info@domain.com</a></p>
    <p class="phone">(845) 123 4567</p>
    <p class="time">We're open MON through FRI from 7am till 11pm</p>
  </div>
  <header id="wrapper" class="clearfix">
    <h1 id="logo"><a href="index-2.html">FitnessPoint</a></h1>
    <!-- start navi -->
    <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="index-2.html#filter=.home">Home
          <div class="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
          </a></li>
        <li><a href="index-2.html#filter=.classes">Classes
          <div class="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
          </a></li>
        <li><a href="index-2.html#filter=.trainers">Trainers
          <div class="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
          </a></li>
        <li><a href="index-2.html#filter=.news" class="selected">News
          <div class="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
          </a></li>
        <li><a href="index-2.html#filter=.contact">Contact
          <div class="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
          </a></li>
      </ul>
    </div>
    <!-- end nav -->
  </header>
  <!-- end header -->
  <div id="content">
    <div class="container">
      <div id="container" class="clearfix">
        <div class="element  clearfix col2-3 home auto">
          <h4>Workout in our Gym <span>for Free</span> in March</h4>
          <div class="borderline"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.Nullam quis risus eget urna mollis ornare. </p>
        </div>
        <div class="element clearfix col1-3 home">
          <div class="images"><img src="<?php echo base_url("frontend")."/";?>images/pic02.jpg" alt="" /></div>
        </div>
        <div class="element clearfix col1-3 home">
          <h5>Categories</h5>
          <ul class="unordered-list">
            <li><a href="#" title="">Slideshow</a> (1)</li>
            <li>Cool Stuff (0)</li>
            <li><a href="#" title="">Links</a> (5)</li>
            <li><a href="#" title="">Awesome Pictures</a> (2)</li>
            <li><a href="#" title="">Classes</a> (10)</li>
          </ul>
        </div>
        <div class="element clearfix col1-3 home centered auto">
          <div class="quote comment">
            <p class="blockquote">" This is a really great deal for anyone interested in working out at a modern gym! Try it yourself! This is a really great deal for anyone interested in working out at a modern gym! Try it yourself! "</p>
            <p class="small">Mark Jackson</p>
          </div>
          <a href="#">
          <div class="when">
            <p class="small alignleft">Jan 22, 2014</p>
            <p class="small alignright">Reply</p>
          </div>
          </a> </div>
        <div class="element home clearfix col1-3">
          <div class="info-icon no-margin">
            <h2>Info</h2>
          </div>
          <div class="infos-left">
            <p class="small">Author</p>
          </div>
          <div class="infos-right">
            <p class="small">Admin</p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left">
            <p class="small">Date</p>
          </div>
          <div class="infos-right">
            <p class="small">Jan 21, 2014</p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left">
            <p class="small">Comments</p>
          </div>
          <div class="infos-right">
            <p class="small">1</p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="infos-left">
            <p class="small">Shared</p>
          </div>
          <div class="infos-right">
            <p class="small">14 times</p>
          </div>
          <div class="clear"></div>
          <div class="borderline"></div>
          <div class="break"></div>
        </div>
        <div class="element clearfix col1-3 border contact home">
          <div id="contact">
            <div id="message"></div>
            <form method="post" action="http://ppp-templates.de/fp/contact.php" name="contactform" id="contactform" autocomplete="off">
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
        <div class="element clearfix col1-3 home">
          <h5>Tags</h5>
          <p><a href="#" title="">Super Cool Stuff</a>, <a href="#" title="">Links</a>, <a href="#" title="">Slideshow</a>, <a href="#" title="">Lightbox</a>, <a href="#" title="">Feedback</a>, <a href="#" title="">Test</a>, <a href="#" title="">Fancybox Popup</a></p>
        </div>
      </div>
    </div>
    <!-- end container -->
  </div>
  <!-- end content -->
</div>
<!-- end wrap -->
<?php $this->load->view("frontend/footer");?>
<!--<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>-->
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/custom.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url("frontend")."/";?>js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.form.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/input.fields.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script defer src="<?php echo base_url("frontend")."/";?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/preloader.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/retina.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>