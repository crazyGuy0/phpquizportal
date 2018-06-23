$(window).ready(function(){
$(".sml-blk").hide();
$("document").ready(function(){
	$(".sml-blk").slideDown(2200);
});
var org;
	$(".sml-blk").mouseover(function(){
		$(this).css("transform","scale(1.1,1.1)");
		 org = $(this).text();
		$(this).text("Take Quiz");
	});
	$(".sml-blk").mouseout(function(){
		$(this).css("transform","scale(1,1)");
		$(this).text(org);
	});
});