/*Custom Light box Start here*/
	var $div = $('<div />').attr({"id": "lb_box"}).prependTo('body');
	$(document.body).find('#lb_box').html($("#lb_content").html());


	function lb_show(){
    	$("#lb_box").fadeIn(400);
	}
	function lb_hide(){
    	$("#lb_box").fadeOut(400);
	}
/*Custom Light box End here*/