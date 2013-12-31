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

/**
*
* Document ready
*
**/
jQuery(document).ready(function($) {
	
	/**
	*
	* Carousel
	*
	**/
	$('.carousel').carousel({
		interval: 3500
	});

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

	// Menu on hover
	$(".nav li").hoverIntent(
		function(){
			$(this).find("a").addClass("over");
			$(this).find(".navbar-submenu").slideDown();
		},
		function(){
			$(this).find("a").removeClass("over");
			$(this).find(".navbar-submenu").hide();
		}
	);

	// Forum posts open
	$(".hiddenForumControl").click(function(e){
		e.preventDefault();

		if ($(this).hasClass('open')) {
			$(this).removeClass('open');
			$(this).find('.hiddenForumControlHide').hide();
			$(this).find('.hiddenForumControlShow').show();
			$('.hiddenForumPosts').slideUp();
		} else {
			$(this).addClass('open');
			$(this).find('.hiddenForumControlShow').hide();
			$(this).find('.hiddenForumControlHide').show();
			$('.hiddenForumPosts').slideDown();
		}
	});

});