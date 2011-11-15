<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:image" content="http://austinstoneworship.com/images/asw_fb.png"/> 

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
                                    mp3: "/music/god_undefeatable.mp3"
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
        $("#jquery_jplayer_2").jPlayer({
                    ready: function () {
                            $(this).jPlayer("setMedia", {
                                    mp3: "/music/love_shines.mp3"
                            });
                    },
                    play: function() { // To avoid both jPlayers playing together.
                            $(this).jPlayer("pauseOthers");
                    },
                    swfPath: "/js",
                    supplied: "mp3",
                    cssSelectorAncestor: "#jp_container_2",
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
    
    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
    <script>
        function popup() {
            window.open('https://twitter.com/share?text=I just got a free download from Austin Stone Worship.',"Share","status=1,height=450,width=550,resizable=0");
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
            		<li class="nav-one"><a href="#t1">Track 01</a></li>
            		<li class="nav-two"><a href="#t2" class="current">Track 02</a></li>
            		<li class="nav-three"><a href="#t3">Track 03</a></li>
        		</ul>
    		<div class="list-wrap">
    		 	<ul id="t1" class="hide">
    		 		<div class="container">
						  <!-- //First player -->
						<div id="jquery_jplayer_1" class="jp-jplayer"></div>
						
						<div id="jp_container_1" class="jp-audio">
						
					        <div class="jp-type-single">
				                <div class="jp-gui jp-interface">

				                 <div id="custom-tweet-button">
					                <a onClick="popup()" target="_blank">
							            <img src="images/twitter.png" />
							        </a>
							    </div><!--/tweet-->
				                
				                <div id="custom-fb-button">
					                <a onclick="fbs_click()" target="_blank">
							            <img src="images/fb.png" />
							        </a>
							    </div><!--/facebook-->							    

							    
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
				                        <div style="clear:both;"></div>
				                        <a class="pop" href="#data"><h4 class="download">Free Download</h4></a>
				                        <div style="display:none"><div id="data"><iframe height="340" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://theaustinstone.wufoo.com/embed/s6x4k1/"><a href="https://theaustinstone.wufoo.com/forms/s6x4k1/" title="Free Download for GOD UNDEFEATABLE">Free Download</a></iframe></div></div>		                        
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
							<a href="files/god_undefeatable_theology.pdf"><img alt="Chord Chart" src="images/theo_t1.png" /></a>
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
							<a class="iframe" href="http://player.vimeo.com/video/31089270"><img src="images/story_t1.jpg"/></a>
							<h2>Song Story</h2>
						</div>
						
						<div class="fourcol top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31112716"><img src="images/piano_t1.jpg"/></a>
							<h2>Piano</h2>		
						</div>
						
						<div class="fourcol vid3_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31124476"><img src="images/guitar_t1.jpg"/></a>
							<h2>Guitar</h2>		
						</div>
						
						<div class="fourcol vid4_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31044904"><img src="images/drums_t1.jpg"/></a>
							<h2>Drums</h2>						
						</div>
									
					</div><!--/container-->																		
				</ul><!--/tab1-->
   			 
   			 	<div style="clear:both;"></div>
				
				<ul id="t2">
    		 		<div class="container">
						  <!-- //First player -->
						<div id="jquery_jplayer_2" class="jp-jplayer"></div>
						
						<div id="jp_container_2" class="jp-audio">
						
					        <div class="jp-type-single">
				                <div class="jp-gui jp-interface">

				                 <div id="custom-tweet-button">
					                <a onClick="popup()" target="_blank">
							            <img src="images/twitter.png" />
							        </a>
							    </div><!--/tweet-->
				                
				                <div id="custom-fb-button">
					                <a onclick="fbs_click()" target="_blank">
							            <img src="images/fb.png" />
							        </a>
							    </div><!--/facebook-->							    

							    
				                        <h3 style="letter-spacing:2px;">TRACK</h3>
				                        <h2 class="song_title"><span class="dark_gold">02</span> &nbsp;/&nbsp; LOVE SHINES</h2>
									    
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
				                        <div style="clear:both;"></div>
				                        <a class="pop" href="#data2"><h4 class="download">Free Download</h4></a>
				                        <div style="display:none"><div id="data2"><iframe height="340" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://theaustinstone.wufoo.com/embed/s6x2a3/"><a href="https://theaustinstone.wufoo.com/forms/s6x2a3/" title="Free Download for LOVE SHINES">Fill out my Wufoo form!</a></iframe></div></div>		                        
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
							<a href="files/love_shines_theology.pdf"><img alt="Chord Chart" src="images/theo_t1.png" /></a>
							<h2>Song Theology</h2>
						</div>
						
						<div class="threecol top_border">
							<a class="pop" href="images/love_shines_chords.png"><img src="images/view_chord_t1.png"/></a>
							<h2>Pre-View Chord Chart</h2>
						</div>
						
						<div class="threecol top_border">
							<a href="files/love_shines_chords.pdf"><img src="images/download_chord_t1.png"/></a>
							<h2>Download Chord Chart</h2>
						</div>
						
						<div class="bumpbump">&nbsp;</div>
						
						<div class="onecol"><h1>Teaching Videos</h1></div>
						
						<div class="fourcol vid1_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31702978"><img src="images/story_t2.jpg"/></a>
							<h2>Song Story</h2>
						</div>
						
						<div class="fourcol top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31702897"><img src="images/piano_t2.jpg"/></a>
							<h2>Piano</h2>		
						</div>
						
						<div class="fourcol vid3_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31702850"><img src="images/guitar_t2.jpg"/></a>
							<h2>Guitar</h2>		
						</div>
						
						<div class="fourcol vid4_t1 top_border">
							<a class="iframe" href="http://player.vimeo.com/video/31702824"><img src="images/drums_t2.jpg"/></a>
							<h2>Drums</h2>						
						</div>
									
					</div><!--/container-->								
    			</ul><!--/tab2-->

   			 	<div style="clear:both;"></div>
				
				<ul id="t3" class="hide">
    			    <p style="text-align:center;height:400px;">Easy tiger, Track 03 doesn't release until November 21.<br>Be sure to check back then! </h1>							
    			</ul><!--/tab3-->    			
    			        			 
			</div> <!-- END List Wrap -->
		</div> <!--/tabs-->
	</div><!--/container-->
	
	<div style="clear:both;"></div>
	
	<div class="container">
	<div class="bump">&nbsp;</div>
	<div class="top_border">&nbsp;</div>
		<div class="footer">
			<a href="http://facebook.com/austinstoneworship"><p>Facebook</a> &nbsp;|&nbsp; <a href="http://twitter.com/asworship">Twitter</a> &nbsp;|&nbsp; <a href="mailto:info@austinstoneworship.com">Email</a></p></a>			
		</div>
	</div><!--/container-->

	<div class="bumpbump"></div>
	<div class="bumpbump"></div>		
</body>
	
</html>