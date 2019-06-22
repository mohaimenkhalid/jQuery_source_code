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
		},
		over: function(event, ui){  //for hover
			$(this).addClass('hover');
		},
		out: function(event, ui){  //for out from hover
			$(this).removeClass('hover');
		},
		activate: function(event, ui){ //after hold cursor hover destination 
			$(this).addClass('hover');
		},

		deactivate: function(event, ui){
			$(this).removeClass('hover');
		}
	});

	$("#javaframework").droppable({

		accept: 'li[data-value="java"]',
		drop:function(event, ui){
			$("#java").append(ui.draggable);
		},
		over: function(event, ui){
			$(this).addClass('hover');
		},
		out: function(event, ui){
			$(this).removeClass('hover');
		},
		
		activate: function(event, ui){
			$(this).addClass('hover');
		},

		deactivate: function(event, ui){
			$(this).removeClass('hover');
		}

	});
	
});