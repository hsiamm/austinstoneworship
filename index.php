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
				'overlayOpacity'	: 0.8,
				'height'		: 462,
				'width'			: 803	
			});
		});
	</script>	
 
 <?php include("includes/social-analytics.php"); ?>
    
</head>


<body>
	<div class="album_head">
		<img src="images/album_head_live.jpg" alt="Austin Stone Live"/>
	</div>
	
	<div class="top_logo">Austin Stone Worship</div>
	
	<div class="sep">
		<div class="container">
			<h3 style="text-align:center;"><a href="/live_01.php">Continue to site &rarr;</a></h3>
		</div><!--/container-->
	</div><!--/sep-->	

	
	<div class="bumpbump"></div>
	
	<div class="container">
		<div class="home_wrap">
		
		<a href="http://stream.austinstone.net/view/requirements.html"><p class="mono" style="margin:0 0 5px 155px;">Problems viewing live stream?</a></p>
		<div id="countbox"><a class="iframe style="width:720px;height:410px;" href="http://stream.austinstone.net/view/"><img src="images/live_stream.png" /></a></div>
		<a href="http://itunes.apple.com/us/album/id482639306"><div class="move_home"><img src="images/album_cover-live_home.png" /></div></a>	
		</div><!--/home_wrap-->
	</div><!--/container-->
	
	<div style="clear:both;"></div>

<div class="bumpbump"></div>	
</body>
	
</html>