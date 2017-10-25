<?php 
  $pageTitle = 'Sample Podcast';
  $section = "podcast";
  include('inc/header.php');
?>

<h1 class="text-center">Listen to a Clip of a NAIFA ClientCast&reg; Podcast</h1>

<div class="row">
	<div class="col-sm-6">	
		<object width="100%" height="300px" id="player_api" name="player_api" data="http://releases.flowplayer.org/swf/flowplayer-3.2.15.swf" type="application/x-shockwave-flash">
		<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.15.swf">
		<param name="allowfullscreen" value="true">
		<param name="allowscriptaccess" value="always">
		<param name="quality" value="high">
		<param name="bgcolor" value="#000000">
		<param name="wmode" value="opaque">
		<param name="flashvars" value="config={'clip':{'url':'mp4:vod/rwadmin.realwealthradiol/samples/sample-podcasts/2012/03-12-2012-real-wealth-265-sample-john-wheeler-life-insurance-as-an-asset.mp4','autoPlay':false,'provider':'rtmp'},'plugins':{'rtmp':{'url':'http://releases.flowplayer.org/swf/flowplayer.rtmp-3.2.11.swf','netConnectionUrl':'rtmp://r.rwadmin.realwealthradiol.netdna-cdn.com/play'},'controls':{'url':'http://releases.flowplayer.org/swf/flowplayer.controls-3.2.15.swf','autoHide':{'enabled':false,'fullscreenOnly':false,'hideStyle':'none'},'stop':false,'play':true,'scrubber':true,'time':true,'mute':true,'volume':true,'fullscreen':true}},'canvas':{'background':'#000000'},'playerId':'player','playlist':[{'url':'mp4:vod/rwadmin.realwealthradiol/samples/sample-podcasts/2012/03-12-2012-real-wealth-265-sample-john-wheeler-life-insurance-as-an-asset.mp4','autoPlay':false,'provider':'rtmp'}]}">
		</object>
	</div>
	<div class="col-sm-6">
		<p>NAIFA ClientCast&reg; is an online radio program, covering a wide array of topics, designed to touch your clients and prospects monthly with audio content that motivates them to take action with you, their NAIFA professional. Differentiate yourself from your competition and strengthening your relationship with your clients.</p>

		<h4><a href="register-now.php">Register to enroll</a></h4>
	</div>	
</div>

<?php include('inc/footer.php'); ?>
