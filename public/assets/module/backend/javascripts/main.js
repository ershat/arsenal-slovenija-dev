jQuery(document).ready(function($) {
	
	/**
	*
	* TinyMCE
	*
	**/
	tinymce.init({
		selector:'textarea#content',
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor"
		],
		style_formats: [
			{
				title: 'Image Left', selector: 'img', 
				styles: {
					'float' : 'left', 
					'margin': '0 10px 10px 0'
				}
			},
			{
				title: 'Image Right', selector: 'img', 
				styles: {
					'float' : 'right', 
					'margin': '0 0 10px 10px'
				}
			}
		]
	});

	/**
	*
	* Confirm delete
	*
	**/
	$("a[data-toggle=confirm]").click(function(e){
		e.preventDefault();

		if (confirm("Are you sure?")){
			$("#deleteTrigger").submit();
		}

		return false;
	});

});