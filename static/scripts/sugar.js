	/**
	*	sugar.js: just a few helper jQuery functions for thomaskeunebroek.fr look and feel
	*/

	$(".jump-top").click(function() {
		$('html:not(:animated),body:not(:animated)').animate({scrollTop: 0});
		return false;
	});

	$('a[rel=tooltip]').tooltip({
    	'placement': 'bottom'
	});

	$(".obfuscated-link").each(function(){
	  var w = $(this).attr("href");
	  $(this).attr("href", "mailto:" + w.replace(/ /,".").replace(/ /,"@").replace(/ /, '.'));
	});

	$(".obfuscated-text").each(function(){
	  var w = $(this).text();
	  $(this).text(w.replace(/ /,".").replace(/ /,"@").replace(/ /, '.'));
	});

	$(".obfuscated-all").each(function(){
	  var w = $(this).text();
	  var deObfuscatedText = w.replace(/ /,".").replace(/ /,"@").replace(/ /, '.');
	  $(this).text(deObfuscatedText);
	  $(this).attr("href", "mailto:" + deObfuscatedText);
	});