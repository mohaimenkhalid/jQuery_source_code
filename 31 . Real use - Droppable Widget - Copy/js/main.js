$(function(){

	$( "#techlist li" ).draggable({

		cursor:'move',
		opacity: 0.5,
		helper:'clone'
	});

	$("#phpframework").droppable({

		accept: 'li[data-value="php"]',
		drop:function(event, ui){
			$("#php").append(ui.draggable);
		}
	});

	$("#javaframework").droppable({

		accept: 'li[data-value="java"]',
		drop:function(event, ui){
			$("#java").append(ui.draggable);
		}
	});
	
});