jQuery(document).ready(function($) {

	simpleTinyMCE(".editable");

});

/**
*
* On save function
*
**/
function tinyMCEOnSave()
{
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

/**
*
* some tinyMCE settings
*
**/
var simpleToolbar = "save | undo redo";

/**
*
* Simple TinyMCE
*
**/
function simpleTinyMCE(selector)
{
	tinymce.init({
    selector: selector,
    plugins: "save",
    inline: true,
    toolbar: simpleToolbar,
    menubar: false,
    save_onsavecallback: tinyMCEOnSave
	});
}