<?php include("includes/header.php"); ?>

    
    <script type='text/javascript'>
    $(document).ready( function(){
        $("#jquery_jplayer_1").jPlayer({
                    ready: function () {
                            $(this).jPlayer("setMedia", {
                                    mp3: "http://files.austinstone.org/audio/asw/god_undefeatable_clip.mp3"
                            });
                    },
                    play: function() { // To avoid both jPlayers playing together.
                            $(this).jPlayer("pauseOthers");
                    },
                    swfPath: "/js",
                    supplied: "mp3",
                    cssSelectorAncestor: "#jp_container_1",
                    wmode: "window"
            });
             
        });
    </script>
    
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a.pop").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.8
			});
			
			
			// for iframes
			$(".iframe").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.8			
			});
			
		});
	</script>	
 
 <?php include("includes/social-analytics.php"); ?>
    
</head>


<body>
	<?php include("includes/top.php"); ?>

	
	<div class="bumpbump"></div>
	
	<div class="container">
		<div class="fourcol">&nbsp;</div>	

		<div class="fourcol">
			
			<div class="exclusive"><a href="http://www.yousendit.com/download/T2dmZm1aTlE1R05qQTlVag"><h2>Exclusive Free<br>Album Download</h2></a></div>
						<br>
				<p><a href="/live_01.php">&larr; back to main site</a></p>
		</div><!--/fourcol_3-->	
		

		
		<div style="clear:both;"></div>
		<div style="width:100%;height: 200px;">&nbsp;</div>


		<div class="rule"></div>
		<div class="tinybump"></div>
		
		<a href="/"><img src="images/asw_logo-ftr.png" alt="ASW"/></a>
		
		<div class="footer_links">
			<a href="http://www.facebook.com/austinstoneworship">Facebook</a> | <a href="http://twitter.com/asworship">Twitter</a> | <a href="mailto:info@austinstoneworship.com">Email</a> | <a href="http://austinstone.org">The Austin Stone Community Church</a>
		</div>
			
	</div><!--/container-->
	
	<div style="clear:both;"></div>

<div class="bumpbump"></div>	
</body>
	
</html>