$(function(){
	$("#textage").tooltip({
		content:tolltipData(),
		track:true,
		show:{dilay:100, duration:500, effect:'slideDown'},
		hide:{dilay:100, duration:500, effect:'slideUp'}
	});

	function tolltipData(){
		return "Data from function.."
	}
});