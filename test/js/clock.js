$(document).on("ready",function(e){
	e.preventDefault();
	
	$('#clock').countdown('2019/11/10').on('update.countdown', function(event){
	    var $this = $(this).html(event.strftime(''
	    + '<span>%-w</span> Minggu, '
	    + '<span>%-d</span> Hari. '
	    + '<span>%H</span>:'
	    + '<span>%M</span>:'
	    + '<span>%S</span>'));
	    
	});
})