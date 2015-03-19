<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
    <link rel="icon" href="http://hepta.me/hsp/frontend/images/bg-cup.png">
    <title>Brands List | High Street Phoenix</title>
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
            <p class="mail"><a href="mailto:info@highstreetphoenix.com" title="">info@highstreetphoenix.com</a>
            </p>
            <p class="phone">+91-22-43339994</p>
            <p class="time">We're open MON through FRI from 7am till 11pm</p>
        </div>
        <header id="wrapper" class="clearfix header_other">
            <h1 id="logo"><a href="index.php">High Street Phoenix</a></h1>
            <div id="nav-button"> <span class="nav-bar"></span>  <span class="nav-bar"></span>  <span class="nav-bar"></span>
            </div>
            <div id="options" class="clearfix">
                <ul id="filters" class="option-set clearfix" data-option-key="filter">
                    <li><a href="<?php echo site_url("website/index"); ?>">HOME
          <div class="nav-button"></div>
          </a>
                    </li>
                    <li><a href="<?php echo site_url("website/brands_list"); ?>" class="selected">BRANDS
          <div class="nav-button"></div>
          </a>
                    </li>
                    <li><a href="<?php echo site_url("website/deals_list"); ?>">DEALS
          <div class="nav-button"></div>
          </a>
                    </li>
                    <li><a href="<?php echo site_url("website/events_list"); ?>">EVENTS
          <div class="nav-button"></div>
          </a>
                    </li>
                    <li><a href="<?php echo site_url("website/eat_list"); ?>">DINE
          <div class="nav-button"></div>
          </a>
                    </li>
                    <li><a href="<?php echo site_url("website/contact"); ?>">CONTACT
          <div class="nav-button"></div>
          </a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="content">
          <div id="container" class="clearfix">
            <div class="element home clearfix full">
                <div class="full-logo full-logo-brand">BRANDS</div>
                <p class="full-data">Brands Listing write up: Welcome to your High Street Phoenix shopping guide ! At HSP, we have hundreds of brands for every preference and price range, guaranteeing you will find whatever you are looking for. Below, you can either search or browse our brands.</p>
                <div class="brand_list">
                    <div class="filter">
                        <div class="filterleft">
                            <form method="post" accept-charset="utf-8" action="<?php echo site_url(" website/brands_list "); ?>">
                                I am Looking For
                                <select name="" class="select1 brandcategorysearch">
                                    <option value="">Search By Category</option>
                                    <?php foreach($brandcategories as $brandcategory) { ?>
                                                <option value="<?php echo $brandcategory->id; ?>"><?php echo $brandcategory->name; ?></option>
                                    <?php }; ?>
                                </select>
                            </form>
                        </div>
                        <div class="filterright">
                            <input name="search" class="input1 search" type="text" id="search" placeholder="Search Directory" size="30" title="Search *"/>
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

                    <div class="full-list">




                    </div>
                    <div class="btn-data loadmorebrands">
                        <input type="submit" class="btn" value="Load More Brands +" />
                    </div>
                </div>
            </div>
           </div>
</div>

        <script>


            var alph="";
            var search="";
            var category="";
            var first="";
            $(document).ready(function() {

                function addbrands(data,isnew) {

                    if(!isnew)
                    {
                        $(".full-list").html("");
                    }
                    for(var i=0;i<data.length;i++)
                    {
                        if(data[i].logo == "")
                        {
                            data[i].logo = "nologo.jpg";
                        };

                        if(data[i].location == "")
                        {
                            data[i].location = "NA";
                        };

                        if(data[i].hours == "")
                        {
                            data[i].hours = "NA";
                        };

                        if(i+1 < data.length)
                            {
                             if(data[i+1].logo == "")
                              {
                                  data[i+1].logo = "nologo.jpg";
                              };
      if(data[i+1].location == "")
                              {
                                  data[i+1].location = "NA";
                              };
      if(data[i+1].hours == "")
                              {
                                  data[i+1].hours = "NA";
                              };
                            };
                        var text = "";
                        if(i%2 == 0)
                        {
                            text = text.concat('<div class="brands">');
                            //var loc = location.protocol+'//'+location.host+'/hsp/uploads/'+data[i].logo;
                            var loc = 'http://hepta.me/hsp/uploads/'+data[i].logo;
                            if(i+1 < data.length)
                            {
                                //var loc2 = location.protocol+'//'+location.host+'/hsp/uploads/'+data[i+1].logo;
                                var loc2 = 'http://hepta.me/hsp/uploads/'+data[i+1].logo;
                            };
                            text=text.concat('<div class="brand" style=""><a href="brands_inner?id='+data[i].id+'"><div class="deal-img" style="background-image: url('+loc+'); "></div><div class="deal_data"><b>'+data[i].name+'</b><div class="heading">Location</div>'+data[i].location+' <div class="deal_feature"><div class="heading head_deal_feature" ><img src="<?php echo base_url("frontend")."/"; ?>images/star.png" width="20"></div><span class="head_deal_feature">FEATURED</span></div><div class="deal_feature"><div class="heading head_deal_feature2"><img src="<?php echo base_url("frontend")."/"; ?>images/brand_offer.png" width="20"></div><span class="head_deal_feature">Offer available</span></div></div></a></div>');
                            if(i+1 < data.length)
                            {
                                text=text.concat('<div class="brand" style=""><a href="brands_inner?id='+data[i+1].id+'"><div class="deal-img" style="background-image: url('+loc2+'); "></div><div class="deal_data"><b>'+data[i+1].name+'</b><div class="heading">Location</div>'+data[i+1].location+'<div class="deal_feature"><div class="heading head_deal_feature"><img src="<?php echo base_url("frontend")."/"; ?>images/new.png" width="20"></div><span class="head_deal_feature">NEW</span></div></div></a></div>');
                            };
                            text = text.concat('</div>');
                            $(".full-list").append(text);
                        };
                    };
//                    $('#container').isotope('reLayout');
                    $('#container').isotope({masonry: {
    columnWidth: 200
  }});
                }

                function callfilter(isnew) {
                    if(!isnew)
                    {
                        first=0;
                    }
                    console.log(first);
                    $.getJSON("<?php echo site_url("website/brandfilter");?>",{alph:alph,search:search,category:category,first:first},function(data) {
                        console.log(data);
                        addbrands(data,isnew);
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
                $(".brandcategorysearch").change(function () {
                    category=$(this).val();
                    callfilter(false);
                });
                $(".input1.search").keyup(function() {
                    $(".atoz a").removeClass("makered");
                    $(this).addClass("makered");
                    search=$(this).val();
                    alph="";
                    callfilter(false);
                });
                $(".loadmorebrands").click(function() {
                    first=$(".brands .brand").length;
                    callfilter(true);
                });


            });
        </script>

        <?php $this->load->view("frontend/footer");?>
        <script src="<?php echo base_url("frontend")."/";?>js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!--        <script src="<?php echo base_url("frontend")."/";?>js/jquery.smoothwheel.js"></script>-->
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
