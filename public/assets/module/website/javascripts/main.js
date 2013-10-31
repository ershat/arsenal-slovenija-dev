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

	tinymce.init({
    selector: ".editable",
    inline: true,
    toolbar: "undo redo",
    menubar: false
	});

	tinymce.init({
	  selector: "div.editable",
	  inline: true,
	  plugins: [
	      "advlist autolink lists link image charmap print preview anchor save",
	      "searchreplace visualblocks code fullscreen",
	      "insertdatetime media table contextmenu paste"
	  ],
	  menubar: false,
	  toolbar: "save | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	  save_onsavecallback: function(){
	  	var element = $('#' + $(this)[0].id);
	  	$.post(element.data('url'), { 'name': element.data('name'), 'value': element.html() }, function(data){
	  		if (data.status !== undefined){
	  			if (data.status) {
	  				alert('Saved!');
	  			} else {
	  				alert('Error saving!');
	  			}
	  		} else {
	  			alert('Error saving!');
	  		}
	  	});
	  }
	});

});