<?php include("includes/header.php"); ?>

    
    <script type='text/javascript'>
    $(document).ready( function(){
        $("#jquery_jplayer_1").jPlayer({
                    ready: function () {
                            $(this).jPlayer("setMedia", {
                                    mp3: "http://files.austinstone.org/audio/asw/all_i_need_clip.mp3"
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
		<div class="fourcol">
			<div class="sidebar">
				<h2 class="dkgrey">Track List</h2>
				<div class="rule"></div>
					<ul class="track_list">
						<a href="/live_01.php"><li>01 God Undefeatable</li></a>
						<a href="/live_02.php"><li>02 Love Shines</li></a>
						<a href="/live_03.php"><li>03 Forever Reign</li></a>
						<a href="/live_04.php"><li>04 Your Great Name</li></a>
						<a href="/live_05.php"><li>05 Solid Rock</li></a>
						<a href="/live_06.php"><li>06 Praise To The Lord</li></a>
						<a href="/live_07.php"><li>07 Hallelujah What A Savior</li></a>
						<a href="/live_08.php"><li>08 The Righteous One</li></a>
						<a href="/live_09.php"><li class="current">09 All I Need</li></a>
						<a href="/live_10.php"><li>10 Let Your Kingdom Come</li></a>
						<a href="/live_11.php"><li>11 You Are Worthy Of Your Glory</li></a>
					</ul>
				</div><!--/sidebar-->
			</div><!--/fourcol-->		
	
		<div class="fourcol_3" style="float:right;">
				<!--audio-->
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>
				
				<div id="jp_container_1" class="jp-audio">
				
			        <div class="jp-type-single">
		                <div class="jp-gui jp-interface">
		
		                 <div id="custom-tweet-button">
			                <a onClick="popup()" target="_blank">
					            <img src="images/twitter_wh.png" />
					        </a>
					    </div><!--/tweet-->
		                
		                <div id="custom-fb-button">
			                <a onclick="fbs_click()" target="_blank">
					            <img src="images/fb_wh.png" />
					        </a>
					    </div><!--/facebook-->							    
		
		                        <h2 class="song_title">09 / All I Need</h2>
							    
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
		                       <!-- <a class="pop" href="#data"><h4 class="download">Free Download</h4></a>
		                        <div style="display:none"><div id="data"><iframe height="340" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://theaustinstone.wufoo.com/embed/s6x4k1/"><a href="https://theaustinstone.wufoo.com/forms/s6x4k1/" title="Free Download for GOD UNDEFEATABLE">Free Download</a></iframe></div></div>-->	                        
		                </div>
		
		                <div class="jp-no-solution">
		                        <span>Update Required</span>
		                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. Site best viewed in Safari or Chrome.
		                </div>
			        </div>
				</div><!--/audio-->
			
				<div class="resources">
				
					<h2 class="dkgrey">Resources / <span class="grey">All I Need</h2>
					<div class="rule"></div>
					
					<div class="bumpbump"></div>
						
					<div class="threecolb">
						<a href="files/live/09_all-i-need_theo.pdf"><img src="images/dl_theo.png" /></a>
						<h3>Download Theology</h3>
					</div>
					<div class="threecolb">
						<a class="pop" href="files/live/09_all-i-need_chords.png"><img src="images/view_chords.png" /></a>
						<h3>Pre-View Chord Chart</h3>
					</div>
					<div class="threecolb">
						<a href="files/live/09_all-i-need_chords.pdf"><img src="images/dl_chords.png" /></a>
						<h3>Download Chord Chart</h3>
					</div>
					
					<div class="bumpbump"></div>
					
					<div class="coming"><h3 class="grey" style="font-style:italic;">Easy tiger, videos for this track will be released on January 16</h3></div>

					
				</div><!--/resources-->
			
			</div><!--/fourcol_3-->	
			
			<div class="fourcol" style="position:relative;">
				<a href="http://itunes.apple.com/us/album/id482639306"><div class="move"><img src="images/album_cover-live.png" /></div></a>
			</div>
			
			<div style="clear:both;"></div>
			<div class="bumpbump"></div>


			<div class="rule"></div>
			<div class="tinybump"></div>
			
			<img src="images/asw_logo-ftr.png" alt="ASW"/>
			<div class="footer_links">
				<a href="http://www.facebook.com/austinstoneworship">Facebook</a> | <a href="http://twitter.com/asworship">Twitter</a> | <a href="mailto:info@austinstoneworship.com">Email</a> | <a href="http://austinstone.org">The Austin Stone Community Church</a>
			</div>
			
	</div><!--/container-->
	
	<div style="clear:both;"></div>

<div class="bumpbump"></div>	
</body>
	
</html>