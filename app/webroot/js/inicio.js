/**
 * @author ale
 */
$(document).ready(function() {
	$("#jquery_jplayer_1").jPlayer({
		ready : function() {
			$(this).jPlayer("setMedia", {
				webmv : "files/Big_Buck_Bunny_Trailer.webm",
				poster : "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
			}).jPlayer("play");
		},
		swfPath : "files",
		supplied : "webmv",
		cssSelector : {
			videoPlay : '.jp-video-play',
			play : '.jp-play',
			pause : '.jp-pause',
			stop : '.jp-stop',
		}
	});
	
	$(".jp-stop").jPlayer("stop");
});
