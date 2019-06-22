$(function(){

	$("#imgheight, #imgwidth, #imgopacity").slider({
		min:150, 
		max:500, 
		slide: controlImg
	});

	$("#imgopacity").slider({
		min:0,
		max:100,
		value:100,
		slide:controlImg
	});

	function controlImg(){
		var height = $("#imgheight").slider('value');
		var width = $("#imgwidth").slider('value');
		var opacity = $("#imgopacity").slider('value');

		$("#liveimg").css({
			height: height,
			width : width,
			opacity:opacity/100
		});

		$("#state").html("Height: "+height+"pixel <br>" +"Width: "+width+"pixel" +"<br>opacity:"+opacity/100);
	}

	
	$("#state").html("Height:"+$("#imgheight").slider('value')+"pixel <br>" + "Width:"+$("#imgwidth").slider('value') + "pixel<br>"+"opacity:"+$("#imgopacity").slider('value')/100);

});