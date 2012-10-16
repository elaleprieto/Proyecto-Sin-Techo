/**
 * @author ale
 */
$(document).ready(function() {
	jwplayer('player').setup({
		'flashplayer' : 'files/player.swf',
		// 'file' : 'files/Big_Buck_Bunny_Trailer.webm',
		// 'file' : 'http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm',
		'controlbar' : 'bottom',
		'width' : '100%',
		'height' : '300',
		'text-align': 'center',
		// 'autostart': 'true',
		// 'provider': 'video/webm'
		levels: [
	        {file: 'files/Big_Buck_Bunny_Trailer.webm', type: 'video/webm' },
	        {file: 'http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.mp4', type: 'video/mp4' },
	    ],
	    modes: [
	        { type: 'html5' },
	        { type: 'flash', src: '/jwplayer/jwplayer.swf' }
	    ],
	});
});
