

jQuery(document).ready(function(){
	
    jQuery("button").click(function(){
    	if (jQuery(".menu-nav").css('display') == 'none'){
        jQuery(".menu-nav").css({"display":"block"});
    } else {
    	jQuery(".menu-nav").css({"display":"none"});
    }
    });
});

