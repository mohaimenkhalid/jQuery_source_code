$(function(){

	$("#slider").slider({
		value:2000,
		min:0,
		max:10000,
		step:50,
		slide:function(event, ui){
			$("#amount").val("Tk." + ui.value);
		}
	});

	$("#amount").val("Tk."+ $("#slider").slider("value"));

	
});