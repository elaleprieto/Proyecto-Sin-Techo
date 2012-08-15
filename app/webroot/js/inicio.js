/**
 * @author ale
 */
$(document).ready(function() {
	jwplayer('mediaspace').setup({
		'flashplayer' : 'files/player.swf',
		'file' : 'files/Big_Buck_Bunny_Trailer.webm',
		'controlbar' : 'bottom',
		'width' : '470',
		'height' : '320',
		'text-align': 'center'
	});
});
