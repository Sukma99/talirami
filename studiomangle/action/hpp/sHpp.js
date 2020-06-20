// JavaScript Document
$(document).on("ready",function(e){
	e.preventDefault();
	$("#btn-resetcari").hide();
	$('#show-data').load("action/hpp/tableHpp.php");
})