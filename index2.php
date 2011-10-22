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
		<!-- TABS -->
		<div id="page-wrap">
    		<div id="gallery">
    			<ul class="nav_tab">
            		<li class="nav-one"><a href="#t1" class="current">Track 01</a></li>
            		<li class="nav-two"><a href="#t2">Track 02</a></li>
            		<li class="nav-three"><a href="#t3">Track 03</a></li>
        		</ul>
    		<div class="list-wrap">
    		 	<ul id="t1">
    		 		<div class="container">
						  <!-- //First player -->
						<div id="jquery_jplayer_1" class="jp-jplayer"></div>
						
						<div id="jp_container_1" class="jp-audio">
					        <div class="jp-type-single">
				                <div class="jp-gui jp-interface">
				                        <h3>TRACK</h3>
				                        <h2 class="song_title"><span class="dark_gold">01</span> &nbsp;/&nbsp; GOD UNDEFEATABLE</h2>
				                        <div class="jp-progress">
				                                <div class="jp-seek-bar">
				                                        <div class="jp-play-bar"></div>
				                                </div>
				                        </div>
				                        <div class="jp-controls-holder">
				                            <ul class="jp-controls">
				                                    <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
				                                    <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
				                                    <li>&nbsp;/&nbsp;</li>
				                                    <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
				                            </ul>
				                        </div>
				                        <div class="jp-time-holder">
				                                <div class="jp-current-time"></div>
				                                &ndash;
				                                <div class="jp-duration"></div>
				                        </div>
				                        <h4 class="download"><a href="#TB_inline?height=155&width=300&inlineId=email_signup" class="thickbox">Free Download</a></h4>
				                </div>
				
				                <div class="jp-no-solution">
				                        <span>Update Required</span>
				                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				                </div>
					        </div>
						</div><!-- //End first player -->
						
						<div class="bumpbump">&nbsp;</div>
						
						<div class="onecol"><h1>Theology &amp; Resources</h1></div>
						
						<div class="threecol top_border">
							<a class="pop" href="images/theo_pop.png"><img alt="Chord Chart" src="images/theo_t1.png" /></a>
							<h2>Song Theology</h2>
						</div>
						
						<div class="threecol top_border">
							<a class="pop" href="images/god_undefeatable_chords.png"><img src="images/view_chord_t1.png"/></a>
							<h2>Pre-View Chord Chart</h2>
						</div>
						
						<div class="threecol top_border">
							<a href="files/god_undefeatable_chords.pdf"><img src="images/download_chord_t1.png"/></a>
							<h2>Download Chord Chart</h2>
						</div>
						
						<div class="bumpbump">&nbsp;</div>
						
						<div class="onecol"><h1>Teaching Videos</h1></div>
						
						<div class="fourcol vid1_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/29157489"><img src="images/story_t1.jpg"/></a>
							<h2>Song Story</h2>						
						</div>
						
						<div class="fourcol top_border">
							<a class="iframe" href="http://player.vimeo.com/video/29157489"><img src="images/piano_t1.jpg"/></a>
							<h2>Piano</h2>						
						</div>
						
						<div class="fourcol vid3_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/29157489"><img src="images/guitar_t1.jpg"/></a>
							<h2>Drums</h2>						
						</div>
						
						<div class="fourcol vid4_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/29157489"><img src="images/drums_t1.jpg"/></a>
							<h2>Piano</h2>						
						</div>
									
					</div><!--/container-->																		
				</ul><!--/tab1-->
   			 
   			 	<div style="clear:both;"></div>
				
				<ul id="t2" class="hide">
    			    <h1 class="notyet" style="text-align:center;">Whoa there, Track 02 doesn't release until November 14.<br>Be sure to check back then! </h1>							
    			</ul><!--/tab2-->

   			 	<div style="clear:both;"></div>
				
				<ul id="t3" class="hide">
    			    <h1 class="notyet" style="text-align:center;">Easy tiger, Track 03 doesn't release until November 28.<br>Be sure to check back then! </h1>							
    			</ul><!--/tab3-->    			
    			        			 
			</div> <!-- END List Wrap -->
		</div> <!--/tabs-->
	</div><!--/container-->

	<div class="bumpbump"></div>
	<div class="bumpbump"></div>		
	
</body>
	
</html>