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

$(".obfuscated-link").each(function() {
	var that = $(this);
  	var w = that.attr("href");
  	that.attr("href", "mailto:" + w.replace(/ /, ".").replace(/ /, "@").replace(/ /, '.'));
});

$(".obfuscated-text").each(function() {
	var that = $(this);
  	var w = that.text();
  	that.text(w.replace(/ /, ".").replace(/ /, "@").replace(/ /, '.'));
});

$(".obfuscated-all").each(function() {
	var that = $(this);
  	var w = that.text();
  	var deObfuscatedText = w.replace(/ /, ".").replace(/ /, "@").replace(/ /, '.');
  	that.text(deObfuscatedText);
  	that.attr("href", "mailto:" + deObfuscatedText);
});