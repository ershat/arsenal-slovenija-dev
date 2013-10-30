/**
*
* Disqus
*
**/
var disqus_shortname = 'asscslovenija';

/* * * DON'T EDIT BELOW THIS LINE * * */
(function() {
  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();

jQuery(document).ready(function($) {
	
	/**
	*
	* Fancybox
	*
	**/
	$('.fancybox').fancybox({
		padding: 0,
		helpers: {
			thumbs: {
				width: 100,
				height: 70
			}
		}
	});

});