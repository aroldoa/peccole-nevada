  jQuery(function() {
	// Font Size
	var default_size = [];
	var new_size = [];
	var font_size;
	var elements;

	jQuery('*').not( jQuery('.upperdeck, .upperdeck *')).each(function(index) {
		font_size = jQuery(this).css('font-size');
		font_size = font_size.slice(0,-2);
		default_size.push(font_size);
		new_size.push(font_size);
	});
	
	switch (jQuery.cookie('text_size')){
		case 'largest':
			jQuery('*').not( jQuery('.upperdeck, .upperdeck *')).each(function(index){
					jQuery(this).css('font-size', parseInt(new_size[index]) + 2 + 'px');
				jQuery.cookie('text_size', 'largest', { expires: 15, path: '/' });
			});
			break;
		case 'larger':
			jQuery('*').not( jQuery('.upperdeck, .upperdeck *')).each(function(index){
					jQuery(this).css('font-size', parseInt(new_size[index]) + 1 + 'px');
				
				jQuery.cookie('text_size', 'larger', { expires: 15, path: '/' });
			});
			break;
		case 'default':
			jQuery('*').each(function(index){
				jQuery(this).css('font-size', '');
				jQuery.cookie('text_size', 'default', { expires: 15, path: '/' });
			});
		default:
			jQuery.cookie('text_size', 'default', { expires: 15, path: '/' });
	}

	jQuery('#largest').on('click', function(){	
		jQuery.cookie('text_size', 'largest', { expires: 15, path: '/' });
		location.reload(true);
	});
	jQuery('#larger').on('click', function(){
		jQuery.cookie('text_size', 'larger', { expires: 15, path: '/' });
		location.reload(true);
	});
	jQuery('#reset').on('click', function(){
		jQuery.cookie('text_size', 'default', { expires: 15, path: '/' });
		location.reload(true);
	});
});