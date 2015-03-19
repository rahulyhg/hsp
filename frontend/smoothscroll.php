<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url("frontend")."/";?>js/TweenMax.min.js"></script>
		<script src="<?php echo base_url("frontend")."/";?>js/ScrollToPlugin.min.js"></script>
        
        <script>
            $(function(){
	            var $window = $(window);		//Window object
	            var scrollTime = 1.2;			//Scroll time
	            var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
		
	            $window.on("mousewheel DOMMouseScroll", function(event){
		
		            event.preventDefault();	
										
		            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		            var scrollTop = $window.scrollTop();
		            var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		            TweenMax.to($window, scrollTime, {
			            scrollTo : { y: finalScroll, autoKill:true },
				            ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
				            autoKill: true,
				            overwrite: 5							
			            });
	            });
            });
        </script>
    </head>
    <body>
        <div class="holder">
			<h1>Smooth Scroll</h1>
			<h2>Use your mousewheel to scroll</h2>
			<p>High life brooklyn dolore, food truck ex portland eu pork belly laboris. Ut voluptate salvia, jean shorts echo park officia sunt lomo actually nostrud magna qui fugiat you probably haven't heard of them four loko. Odd future magna messenger bag, godard tattooed culpa you probably haven't heard of them narwhal ullamco consectetur truffaut gastropub biodiesel pariatur vice. Disrupt trust fund minim esse occaecat, plaid shoreditch bespoke cardigan cillum. Skateboard tumblr cosby sweater cillum culpa actually. Readymade keytar salvia, authentic dolore DIY scenester sriracha occupy neutra lo-fi. Do quinoa swag, selvage umami tattooed dreamcatcher ethical nihil wolf next level dolore.</p>
			<p>Scenester nisi aliqua fixie velit literally. Pariatur odd future PBR narwhal, elit high life post-ironic duis squid ad hella. Nihil quinoa dreamcatcher pop-up narwhal. Pork belly ennui fanny pack vice swag, locavore plaid dreamcatcher you probably haven't heard of them actually disrupt accusamus. Labore meggings anim sed skateboard, blue bottle next level disrupt nisi viral squid laboris vice. High life iphone eu, PBR fap shoreditch tumblr cupidatat hella wayfarers put a bird on it. Quinoa mollit pour-over, placeat tofu whatever magna adipisicing typewriter wayfarers accusamus.</p>
			<p>Yr vinyl swag, seitan organic lo-fi blog. Kogi cred odd future fixie retro fap, chambray flannel literally anim farm-to-table irony DIY. Eiusmod dolor cupidatat art party tattooed. Neutra keytar cosby sweater leggings, reprehenderit sriracha semiotics four loko flexitarian fanny pack proident bicycle rights biodiesel eiusmod thundercats. Aesthetic bicycle rights enim nesciunt. Aesthetic VHS nesciunt leggings, minim pop-up wolf whatever nisi godard non. Minim pinterest vice irure, esse fanny pack commodo american apparel.</p>
			<p>Carles pickled marfa, umami pug plaid sed next level banksy skateboard master cleanse leggings assumenda nisi esse. Consequat nostrud reprehenderit Austin. Aliqua seitan eiusmod before they sold out, echo park duis keffiyeh flannel excepteur. Helvetica 90's delectus photo booth, flexitarian sint high life cillum letterpress brooklyn 3 wolf moon. Ea vice gluten-free umami excepteur lo-fi. Blue bottle brunch synth messenger bag. Narwhal eu scenester, officia stumptown minim readymade mlkshk pinterest plaid trust fund occupy do intelligentsia ethnic.</p>
			<p>Enim aliquip you probably haven't heard of them, mixtape cosby sweater trust fund pop-up iphone irure selvage exercitation meh PBR blue bottle. Mustache pour-over cupidatat, ea intelligentsia letterpress veniam pop-up fixie farm-to-table banksy nihil. Lomo selfies carles narwhal beard viral. Et whatever try-hard, cred excepteur officia eu. Intelligentsia yr beard, forage mlkshk pitchfork raw denim mumblecore proident labore ut ethical. Tofu sapiente ut, lomo et laborum mollit quis fap deep v sint leggings ethical. Hella deep v banksy, commodo four loko terry richardson esse DIY biodiesel velit twee american apparel.</p>
			<p>Sed meh adipisicing organic gastropub. Dolor high life actually food truck fap, ugh marfa freegan helvetica godard bespoke sustainable. Nihil duis actually minim church-key. Meggings intelligentsia dolor leggings excepteur, small batch food truck sartorial dolore forage photo booth before they sold out aute squid. Adipisicing cosby sweater nulla, mustache banksy accusamus nihil pitchfork fanny pack brunch. Marfa sunt non sustainable. Mustache veniam seitan, exercitation nulla nisi squid sustainable cosby sweater carles officia selvage stumptown aute.</p>
			<p>Butcher proident farm-to-table Austin fingerstache commodo. Keffiyeh intelligentsia eu, ut whatever scenester single-origin coffee tempor post-ironic vegan sriracha nulla marfa. Artisan dreamcatcher street art quinoa vice. Authentic occupy proident hoodie, brunch church-key est. Consequat vinyl sunt jean shorts. Thundercats pork belly irure, craft beer etsy ullamco artisan art party viral in whatever. Brooklyn duis elit echo park, viral anim incididunt odio esse fixie cred qui hashtag.</p>
			<p>Typewriter veniam letterpress, odio disrupt placeat readymade cliche. Shoreditch deep v godard iphone vero, tumblr quinoa nisi blog truffaut fashion axe 90's art party hoodie minim. Narwhal fashion axe high life, jean shorts next level before they sold out nostrud intelligentsia. Gluten-free seitan church-key vice vegan banh mi. Before they sold out nostrud fingerstache, food truck hella id esse. Kogi jean shorts seitan, pickled before they sold out YOLO retro blog wayfarers enim church-key tumblr try-hard exercitation. Accusamus vero eiusmod aliqua, Austin brunch sustainable esse bespoke locavore 90's selfies nisi.</p>
			<p>Bushwick elit fugiat, mixtape kale chips keffiyeh four loko tofu consectetur chambray. Wayfarers lo-fi pour-over aute, duis bespoke sed cosby sweater shoreditch cupidatat. Ad selfies Austin meggings, irony photo booth plaid aesthetic laborum tofu labore deep v ethnic. Four loko lo-fi sartorial blog fixie. Leggings gluten-free sint banksy dolore. Hashtag selfies meggings, beard 8-bit intelligentsia bespoke squid eu officia. YOLO aute biodiesel sartorial, cliche magna brunch velit mustache wolf tempor intelligentsia in.</p>
			<p>Ullamco put a bird on it adipisicing mollit nulla sint, consequat ethnic qui voluptate. Pinterest iphone adipisicing, literally commodo wes anderson pour-over ut kogi esse bushwick dreamcatcher hashtag sartorial wolf. Whatever mlkshk cupidatat tattooed occupy. Bicycle rights lomo next level, magna dreamcatcher wayfarers portland art party pickled occaecat street art bespoke esse skateboard leggings. Irony art party post-ironic keytar, beard mustache laboris. Mollit sriracha sustainable, minim banjo biodiesel sunt. Art party four loko jean shorts odio delectus gluten-free.</p>
			<p>Vegan intelligentsia carles beard. Pinterest selvage odd future quinoa you probably haven't heard of them, DIY mixtape vinyl. Flannel pitchfork fingerstache deep v wolf, beard ethnic. Leggings banksy four loko photo booth, retro organic skateboard viral blog fanny pack bespoke. Next level blog tousled aesthetic put a bird on it, readymade ethical mcsweeney's odd future raw denim tumblr disrupt. Cosby sweater pitchfork literally direct trade, meggings master cleanse umami you probably haven't heard of them iphone. Post-ironic ethnic bespoke food truck cliche viral.</p>
			<p>Church-key messenger bag deep v, ugh leggings flexitarian pickled letterpress flannel disrupt yr. Banh mi tumblr church-key helvetica gentrify, mustache typewriter sriracha fap DIY. Photo booth williamsburg portland kogi leggings. Pitchfork banksy hella, dreamcatcher freegan fixie beard brooklyn 90's banjo disrupt. Cred kale chips photo booth, single-origin coffee cray squid direct trade plaid locavore truffaut mumblecore ethnic lomo odd future. Fashion axe raw denim hashtag beard, banjo master cleanse fixie. Actually +1 sartorial bespoke, fanny pack polaroid craft beer food truck.</p>
		</div>
    </body>
</html>
