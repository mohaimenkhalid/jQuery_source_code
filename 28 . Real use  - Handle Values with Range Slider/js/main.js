$(function(){

	var getOutput = $("#state");
	var getSlider = $("#slider");

	getSlider.slider({
		range:true,
		min:10,
		max:100,
		values:[20,50],
		slide:function(event, ui){
			getOutput.html(ui.values[0]+'-'+ui.values[1]+'Taka');

			$("#minvalue").val(ui.values[0]);
			$("#maxvalue").val(ui.values[1]);
		}
	});

	getOutput.html(getSlider.slider('values', 0)+'-'+getSlider.slider('values', 1)+'taka');

	$("#minvalue").val(getSlider.slider('values', 0));
	$("#maxvalue").val(getSlider.slider('values', 1));



	
});