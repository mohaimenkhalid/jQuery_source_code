$(function(){

	$(window).scroll(function(){
		
		if ($(this).scrollTop() > 100) {
			$("#goup").fadeIn();
		}else{
			$("#goup").fadeOut();
		}
	});

	$("#goup").click(function(){
		$("html").animate({scrollTop:0}, 500);
	});
});