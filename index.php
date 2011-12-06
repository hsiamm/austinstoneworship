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
		<!--<a class="iframe style="width:720px;height:410px;" href="http://stream.austinstone.net/view/"><img src="images/live_drums_t3.png" /></a>-->
		<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
			<!--
			
			dateFuture = new Date(2011,11,6,19,0,0);
			
			function GetCount(){
			
			        dateNow = new Date();                                                                        //grab current date
			        amount = dateFuture.getTime() - dateNow.getTime();                //calc milliseconds between dates
			        delete dateNow;
			
			        // time is already past
			        if(amount < 0){
			                document.getElementById('countbox').innerHTML="Now!";
			        }
			        // date is still good
			        else{
			                days=0;hours=0;mins=0;secs=0;out="";
			
			                amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs
			
			                hours=Math.floor(amount/3600);//hours
			                amount=amount%3600;
			
			                mins=Math.floor(amount/60);//minutes
			                amount=amount%60;
			
			                secs=Math.floor(amount);//seconds
			
			                if(days != 0){out += days +" day"+((days!=1)?"s":"")+" / ";}
			                if(days != 0 || hours != 0){out += hours +" hr"+((hours!=1)?"s":"")+" / ";}
			                if(days != 0 || hours != 0 || mins != 0){out += mins +" min"+((mins!=1)?"s":"")+" / ";}
			                out += secs +" secs";
			                document.getElementById('countbox').innerHTML=out;
			
			                setTimeout("GetCount()", 1000);
			        }
			}
			
			window.onload=function(){GetCount();}//call when everything has loaded
			
			//-->
		</script>
		<div id="countbox"></div><!--/counter-->
		<a href="http://itunes.apple.com/us/album/id482639306"><div class="move_home"><img src="images/album_cover-live_home.png" /></div></a>	
		</div><!--/home_wrap-->
	</div><!--/container-->
	
	<div style="clear:both;"></div>

<div class="bumpbump"></div>	
</body>
	
</html>