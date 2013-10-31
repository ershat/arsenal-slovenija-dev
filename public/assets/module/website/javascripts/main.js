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

	$("#editIt").click(function(e){
		e.preventDefault();

		if ($(this).hasClass('editing')) {
			$(this).removeClass('btn-success').removeClass('editing').addClass('btn-primary').html('Edit');
			removeTinymce();
		} else {
			$(this).removeClass('btn-primary').addClass('btn-success').addClass('editing').html('Cancel editing');
			tinymce.init({
		    selector: ".editable",
		    plugins: "save",
		    inline: true,
		    toolbar: "save | undo redo",
		    menubar: false,
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

			tinymce.init({
			  selector: "div.editable",
			  inline: true,
			  plugins: [
			      "advlist autolink lists link image charmap print preview anchor save",
			      "searchreplace visualblocks code fullscreen",
			      "insertdatetime media table contextmenu paste"
			  ],
			  style_formats: [
			  	{
			  		title: 'Image Left', selector: 'img',
			  		classes: 'thumbnail pull-left img-responsive',
			  		styles: {
			  			'margin': '0 10px 10px 0'
			  		}
			  	},
			  	{
			  		title: 'Image Right', selector: 'img', 
			  		classes: 'thumbnail pull-right img-responsive',
			  		styles: {
			  			'margin': '0 0 10px 10px'
			  		}
			  	}
			  ],
			  menubar: false,
			  relative_urls: false,
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
			  },
			  external_filemanager_path:"/assets/vendor/filemanager/",
				filemanager_title:"Filemanager" ,
				external_plugins: { "filemanager" : "/assets/vendor/filemanager/plugin.min.js"}
			});
		}

	});

});

function removeTinymce()
{
  if(tinymce.editors.length > 0){
		for(i = 0; i < tinymce.editors.length; i++){
		  tinyMCE.editors[i].remove();
		}
  }
}