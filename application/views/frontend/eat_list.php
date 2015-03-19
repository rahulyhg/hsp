<!DOCTYPE html>
<html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
<title>Dine List | High Street Phoenix</title>
<link href="<?php echo base_url("frontend")."/";?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo base_url("frontend")."/";?>css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url("frontend")."/";?>css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'> 
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
    <div id="container" class="clearfix">
        <div class="element home clearfix full">
            <div class="full-logo full-logo-eat">DINE</div>
            <p class="full-data">Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.</p>
            <div class="brand_list">
                 <div class="filter">
                     <div class="filterleft">
                         <form method="post" accept-charset="utf-8">
                           I am Looking For <select name="" class="select1 dinercategorytosearch">
                            <option value="">Search by Cuisine</option>
                            <?php foreach($dinercategories as $dinecategory) { ?>
                            <option value="<?php echo $dinecategory->id;?>"><?php echo $dinecategory->name; ?></option>
                            <?php }; ?>
                            </select>
                         </form>
                    </div>
                    <div class="filterright">
                        <input name="search" type="text" class="input1 search" id="search" placeholder="Search Directory" size="30" title="Search *"/>
                    </div>     
                 </div>
                 <div class="range atoz">
                    <a href="#">#</a>
                    <a href="#">A</a>
                    <a href="#">B</a>
                    <a href="#">C</a>
                    <a href="#">D</a>
                    <a href="#">E</a>
                    <a href="#">F</a>
                    <a href="#">G</a>
                    <a href="#">H</a>
                    <a href="#">I</a>
                    <a href="#">J</a>
                    <a href="#">K</a>
                    <a href="#">L</a>
                    <a href="#">M</a>
                    <a href="#">N</a>
                    <a href="#">O</a>
                    <a href="#">P</a>
                    <a href="#">Q</a>
                    <a href="#">R</a>
                    <a href="#">S</a>
                    <a href="#">T</a>
                    <a href="#">U</a>
                    <a href="#">V</a>
                    <a href="#">W</a>
                    <a href="#">X</a>
                    <a href="#">Y</a>
                    <a href="#">Z</a>
                </div>
                <div class="filter filter_dine">
                     <div class="filterleft">
                         <form method="post" accept-charset="utf-8">
                           Search By Deal 
                            <select name="" class="select1 dealsearch">
                                <option>Search By Deal</option>
                                <?php foreach($dealnames as $dealname) { ?>
                                <option value="<?php echo $dealname->id; ?>"><?php echo $dealname->name; ?></option>
                                <?php } ?>
                            </select>
                        </form>
                    </div>
                    <div class="filterright rt-ame amenitylist">
                         <h3>Filter By Amenity</h3>
                        <a class="amenity1" href="" class="amenity1"><img alt="1" src="<?php echo base_url("frontend")."/";?>images/amenity1.png" title="Child Friendly" class="amenity1" height="20" /></a>
                        <a class="amenity2" href="" class="amenity2"><img alt="2" src="<?php echo base_url("frontend")."/";?>images/amenity2.png" title="Live Screening" class="amenity2" height="20"/></a>
                        <a class="amenity3" href="" class="amenity3"><img alt="3" src="<?php echo base_url("frontend")."/";?>images/amenity3.png" title="Bar Available" class="amenity3" height="20"/></a>
                        <a class="amenity4" href="" class="amenity4"><img alt="4" src="<?php echo base_url("frontend")."/";?>images/amenity4.png" title="Happy Hours" class="amenity4" height="20"/></a>
                    </div>     
                 </div>
                <div class="full-list">
                    
                    
                </div>
                <div class="btn-data loadmorebrands">
                    <input type="submit" class="btn" value="Load More Brands +" />
                </div>
            </div>
        </div>
     </div>
</div>
  
  </div>
  
  
  
  
<!--  
<div id="content">
    <div id="container" class="clearfix">
        <div class="element home clearfix full">
            <div class="full-logo full-logo-eat">DINE</div>
            <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.</p>
            <div class="brand_list">
                 <div class="filter">
                     <div class="filterleft">
                           I am Looking For <select name="" class="select1 dinercategorytosearch">
                           <option value="">Select a cuisine</option>
                           <?php foreach($dinercategories as $dinecategory) { ?>
                            <option value="<?php echo $dinecategory->id;?>"><?php echo $dinecategory->name; ?></option>
                            <?php }; ?>
                            </select>
                    </div>
                    <div class="filterright">
                        <input name="search" type="text" class="input1 search" id="search" placeholder="Search Directory" size="30" title="Search *"/>
                    </div>     
                 </div>
                 <div class="range atoz">
                    <a href="#">Z</a>
                </div>
                <div class="filter">
                     
                    <div class="filterright amenitylist">
                         Filter By Amenity
                        <a class="amenity1"><img alt="1" src="<?php echo base_url("frontend")."/";?>images/amenity1.png" class="amenity1" /></a>
                        <a class="amenity2"><img alt="2" src="<?php echo base_url("frontend")."/";?>images/amenity2.png" class="amenity2" /></a>
                        <a class="amenity3"><img alt="3" src="<?php echo base_url("frontend")."/";?>images/amenity3.png" class="amenity3" /></a>
                        <a class="amenity4"><img alt="4" src="<?php echo base_url("frontend")."/";?>images/amenity4.png" title="Happy Hours" class="amenity4" /></a>
                    </div>     
                 </div>
                 <div class="alldiners">
                
                </div>
            </div>
        </div>
     </div>
</div>-->

<script>
            var alph="";
            var search="";
            var category="";
            var amenity1 = "0";            
            var amenity2 = "0";            
            var amenity3 = "0";            
            var amenity4 = "0";            
            var first="";
            $(document).ready(function() {
                
                function adddiners(data,isnew) {
                    console.log(data);
                    if(!isnew)
                    {
                        $(".full-list").html("");
                    };
                    for(var i=0;i<data.length;i++)
                    {
                        if(data[i].logo == "")
                        {
                            data[i].logo = "nologo.jpg";
                        };
                        if(data[i].location == "")
                        {
                            data[i].location = "Not Specified";
                        };
                        
                        if(data[i].hours == "")
                        {
                            data[i].hours = "Not Specified";
                        };
                        if(i+1 <data.length)
                            {
                        if(data[i+1].logo == "")
                        {
                            data[i+1].logo = "nologo.jpg";
                        };
                                if(data[i+1].location == "")
                        {
                            data[i+1].location = "Not Specified";
                        };
                                if(data[i+1].hours == "")
                        {
                            data[i+1].hours = "Not Specified";
                        };
                            };
                        
                        
                        var text = "";
                        if(i%2 == 0)
                        {
                            var loc1 = location.protocol+'//'+location.host+'/hsp/uploads/'+data[i].logo;
                            if(i+1 < data.length)
                            {
                                var loc2 = location.protocol+'//'+location.host+'/hsp/uploads/'+data[i+1].logo;
                            };
                            text = text.concat('<div class="dine"><div class="eat"><a href="eat_inner?id='+data[i].id+'"><div class="eat_img" style="background-image: url('+loc1+')"></div><div class="eat_data"><div class="heading">Name</div>'+data[i].name+'<div class="heading">Hours</div>'+data[i].hours+'<div class="heading">Location</div>'+data[i].location+'</div></a></div>');
                            if(i+1 <data.length)
                            {
                                text = text.concat('<div class="eat"><a href="eat_inner?id='+data[i+1].id+'"><div class="eat_img" style="background-image: url('+loc2+')"></div><div class="eat_data"><div class="heading">Name</div>'+data[i+1].name+'<div class="heading">Hours</div>'+data[i+1].hours+'<div class="heading">Location</div>'+data[i+1].location+'</div></a</div>');
                            };
                            text = text.concat('</div>');
                            $(".full-list").append(text);
                        };
                    };
//                    $('#container').isotope('reLayout');
                    $('#container').isotope({masonry: {
    columnWidth: 200
  }});
                };
                
                function callfilter(isnew) {
                    console.log(alph);
                    console.log(search);
                    console.log(category);
                    console.log(amenity1);
                    if(!isnew)
                    {
                        first=0;
                    };
                    console.log(first);
                    $.getJSON("<?php echo site_url("website/dinefilter");?>",{alph:alph,search:search,category:category,amenity1:amenity1,amenity2:amenity2,amenity3:amenity3,amenity4:amenity4,first:first},function(data) {
                        console.log(data);
                        adddiners(data,isnew);
                    });
                };
                callfilter(false);  
                $(".atoz a").click(function() {
                    $(".atoz a").removeClass("makered");
                    $(this).addClass("makered");
                    alph=$(this).text();
                    search="";
                    $(".input1.search").val("");
                    callfilter(false);
                    return false;
                });
                $(".dinercategorytosearch").change(function () {
                    category=$(this).val();
                    callfilter(false);
                });
                $(".input1.search").keyup(function() {
                    search=$(this).val();
                    $(".atoz a").removeClass("makered");
                    alph="";
                    callfilter(false);
                });
                $(".amenitylist a img").click(function() {
                    if($(this).attr("alt") == "1")
                    {
                        $(".atoz a").removeClass("makered");
                        alph="";
                        if(amenity1 == "0")
                        {
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity1_w.png");
                            amenity1 = $(this).attr("alt");
                        }else
                        {
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity1.png");
                            amenity1 = "0";
                        };
                    }
                    if($(this).attr("alt") == "2")
                    {
                        $(".atoz a").removeClass("makered");
                        alph="";
                        if(amenity2 == "0")
                        {
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity2_w.png");
                            amenity2 = $(this).attr("alt");
                        }else{
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity2.png");
                            amenity2 = "0";
                        };
                    }
                    if($(this).attr("alt") == "3")
                    {
                        $(".atoz a").removeClass("makered");
                        alph="";
                        if(amenity3 == "0")
                        {
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity3_w.png");
                            amenity3 = $(this).attr("alt");
                        }else{
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity3.png");
                            amenity3 = "0";
                        };
                    };
                    if($(this).attr("alt") == "4")
                    {
                        $(".atoz a").removeClass("makered");
                        alph="";
                        if(amenity4 == "0")
                        {
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity4_w.png");
                            amenity4 = $(this).attr("alt");
                        }else{
                            $(this).attr("src","<?php echo base_url("frontend")."/";?>images/amenity4.png");
                            amenity4 = "0";
                        };
                    }
                    callfilter(false);
                    return false;
                    
                    
                });
                $(".loadmorebrands").click(function() {
                        console.log(first);
                    first=$(".dine .eat").length;
                        
                    callfilter(true);
                    });
                
            });
        </script>

<?php $this->load->view("frontend/footer");?>
<script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url("frontend")."/";?>js/jquery.smoothwheel.js"></script>-->
<script src="<?php echo base_url("frontend")."/";?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/responsive-nav.js" type="text/javascript"></script>
<script src="<?php echo base_url("frontend")."/";?>js/scrollup.js" type="text/javascript"></script>
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