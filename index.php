<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:image" content="http://austinstoneworship.com/images/asw_fb2.png"/> 
	
	
	
	<title>Austin Stone Worship</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" href="/css/jquery.fancybox-1.3.4.css" type="text/css" /> 
    <link href='css/jplayer_style.css' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen">	
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 

	
	<script type="text/javascript" src="http://use.typekit.com/dvt1bdb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <script src='js/jquery.min.js' type='text/javascript'></script>
    <script src='js/scripts.js' type='text/javascript'></script>
    <script src='js/jquery.jplayer.min.js' type='text/javascript' ></script>
    <script type="text/javascript" src="../js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="../js/jquery.fancybox-1.3.4.js"></script>

	<script>
		$(function(){
			$('.expand .show').click(function(){
				var obj = $(this).parents('.expand');
				if ($(obj).hasClass('expanded')) {
					$(obj).removeClass('expanded');
					$('.content',obj).slideUp('slow');					
					$(this).text('About the Album');
				} else {
					$(obj).addClass('expanded');
					$('.content',obj).slideDown('slow');
					$(this).text('– Hide Details –');
				}
				return false;
			});
		});
	</script>

    
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
 
     <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    <script>
        function popup() {
            window.open('https://twitter.com/share?text=Listening to music from Austin Stone Worship @asworship',"Share","status=1,height=450,width=550,resizable=0");
        }    
        function fbs_click() {
            u=location.href;
            window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u),'sharer','toolbar=0,status=0,width=626,height=336');
            return false;
        }
    </script>
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3493264-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
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
		
		<div class="stream_tuesday"><a class="iframe style="width:720px;height:410px;" href="http://stream.austinstone.net/view/"><img src="images/live_stream.png" /></a></div>
		<a href="http://itunes.apple.com/us/album/id482639306"><div class="move_home"><img src="images/album_cover-live_home.png" /></div></a>	
		</div><!--/home_wrap-->
	</div><!--/container-->
	
	<div style="clear:both;"></div>

<div class="bumpbump"></div>	
</body>
	
</html>