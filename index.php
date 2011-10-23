<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>AS Worship</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" href="/css/jquery.fancybox-1.3.4.css" type="text/css" /> 
    <link href='css/jplayer_style.css' rel='stylesheet' type='text/css' />
    <link href='css/thickbox.css' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">	
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 

	
	<script type="text/javascript" src="http://use.typekit.com/dvt1bdb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script src='js/jquery.min.js' type='text/javascript'></script>
    <script src='js/scripts.js' type='text/javascript'></script>
    <script src='js/thickbox-compressed.js' type='text/javascript'></script>
    <script src='js/jquery.jplayer.min.js' type='text/javascript' ></script>
    <script type="text/javascript" src="../js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="../js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript" src="js/organictabs.jquery.js"></script>
	<script>
       $(function() {
    
           $("#gallery").organicTabs();    
       });
    </script>
    
    <script type='text/javascript'>
    $(document).ready( function(){
        $("#jquery_jplayer_1").jPlayer({
                    ready: function () {
                            $(this).jPlayer("setMedia", {
                                    mp3: "/music/god_undefeatable.mp3",
                            });
                    },
                    play: function() { // To avoid both jPlayers playing together.
                            $(this).jPlayer("pauseOthers");
                    },
                    swfPath: "/",
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
    
</head>

<body id="">

	<div class="head">
		
		<div class="container">
			<a href="/"><div class="logo">Austin Stone Worship</div></a>
			
		    
			<h1 class="cap">The first live record from The Austin Stone releases nationally on Tuesday, December 6. The eleven songs were tracked in downtown Austin, Texas, at The Austin Stone in the Spring of 2011, featuring songs from worship leaders Aaron Ivey, Jimmy McNeal, and Andy Melvin.</h1>
					
		</div> <!-- /container -->
		
	</div><!--/.head-->
	
	<div class="divide">&nbsp;</div>
	
	<div class="container">
		<p>Because we couldn't wait until December, starting Monday, October 24, we will be sharing a free download of a single from our new album! In the meantime, check out our Facebook and Twitter for more info. We hope you're as excited as we are for this launch and be sure to spread the word! </p>
		
		<div style="float:left;width:40px;margin-left:200px"><p style="text-align:center;"><a href="http://facebook.com/austinstoneworship"><img src="images/fb.png" style="margin-left:15px;" width="28" height="30" /><br>
		Facebook </a></p></div> 
		
		<div style="float:left;width:40px;margin-left:40px;"><p style="text-align:center;"><a href="http://twitter.com/#!/asworship"><img src="images/twitter.png" style="margin-left:5px;" width="28" height="30" "/><br>
		Twitter</a></p></div>
		
		

	</div><!--/container-->

	<div class="bumpbump"></div>
	<div class="bumpbump"></div>		
	
</body>
	
</html>