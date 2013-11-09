jQuery(document).ready(function($) {
	/**
	*
	* Editor
	*
	**/
	$("#editIt").click(function(e){
		e.preventDefault();

		if ($(this).hasClass('editing')) {
			$(this).removeClass('btn-success').removeClass('editing').addClass('btn-primary').html('Edit');
			removeTinymce();
		} else {
			$(this).removeClass('btn-primary').addClass('btn-success').addClass('editing').html('Cancel editing');

			simpleTinyMCE(".editable");
			extendedTinyMCE("div.editable");
			imageTinyMCE(".editable-image");
		}

	});
});

/**
*
* Remove tinyMCE elements
*
**/
function removeTinymce()
{
  if(tinymce.editors.length > 0){
		for(i = 0; i < tinymce.editors.length; i++){
		  tinyMCE.editors[i].remove();
		}
  }
}

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
var extendedToolbar = "save | undo redo removeformat | styleselect | bold italic | alignleft aligncenter alignright alignjustify | link image";

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

/**
*
* Image TinyMCE
*
**/
function imageTinyMCE(selector)
{
	tinymce.init({
    selector: selector,
    plugins: "save image",
    inline: true,
    toolbar: "save | image",
    menubar: false,
    relative_urls: false,
    save_onsavecallback: tinyMCEOnSave,
    external_filemanager_path:"/assets/vendor/filemanager/",
  	filemanager_title:"Filemanager" ,
  	external_plugins: { "filemanager" : "/assets/vendor/filemanager/plugin.min.js"}
	});
}

/**
*
* Extended TinyMCE
*
**/
function extendedTinyMCE(selector)
{
	tinymce.init({
	  selector: selector,
	  inline: true,
	  plugins: [
	      "advlist autolink lists link image charmap print preview anchor save",
	      "searchreplace visualblocks code fullscreen",
	      "insertdatetime media table contextmenu paste"
	  ],
	  // style_formats: tinyMCEStyleFormats,
	  menubar: false,
	  relative_urls: false,
	  toolbar: extendedToolbar,
	  save_onsavecallback: tinyMCEOnSave,
	  external_filemanager_path:"/assets/vendor/filemanager/",
		filemanager_title:"Filemanager" ,
		external_plugins: { "filemanager" : "/assets/vendor/filemanager/plugin.min.js"}
	});
}

/**
*
* Styles
*
**/
var tinyMCEStyleFormats =
[
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
	},
	{
		title: 'Alert - important', selector: 'p',
		classes: 'alert alert-danger'
	},
];