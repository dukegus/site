// JavaScript Document

$(document) .ready(function(){
	
	
	
	$(".w1").click(function(){
		
		$(".washer1").load("washer1.html");
		
	});
	
	$(".w1").click(function(){
		
  $(".washer1").toggle("washer1.html");
  
});

	$(".w1").mouseover(function(){
		
  $(this).css('cursor', 'pointer');
  
});
	
	$(".w2").click(function(){
		
		$(".washer2").load("washer2.html");
			
	});
	
	$(".w2").click(function(){
		
  $(".washer2").toggle("washer2.html");
  
	});
	
	$(".w2").mouseover(function(){
		
  $(this).css('cursor', 'pointer');
  
	});
});