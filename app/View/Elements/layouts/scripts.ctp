<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<?php echo $this -> Html -> script(array('vendor/bootstrap.min','vendor/angular.min', 'vendor/angular-resource.min', 'plugins', 'main')); ?>
<?php echo $this -> fetch('script'); ?>

<script>
	var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
	( function(d, t) {
			var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
			g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s)
		}(document, 'script')); 
</script>

<?php //echo $this -> Js -> writeBuffer(); ?>