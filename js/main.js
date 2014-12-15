// JavaScript Document

$(document) .ready(function(){
	$('.more') .click(function(e){
		e.preventDefault();
		$('dynamic') .load('content/blog-page1.html');
		$(this) .remove();
	});
});