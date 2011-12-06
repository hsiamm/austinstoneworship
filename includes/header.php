<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:image" content="http://austinstoneworship.com/images/asw_fb.png" />


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