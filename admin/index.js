$(document).ready(function(e){
	$("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
	    e.preventDefault();
	    $(this).siblings('a.active').removeClass("active");
	    $(this).addClass("active");
	    var index = $(this).index();
	    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
	    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
	});
	$("ul#nav_child>li>a").click(function(e){
		e.preventDefault();
		var index;
		if($(this).attr('id') == "tk_bill") index = 3;
		if($(this).attr('id') == "tk_thuchi") index = 2;
		
		$("div.bhoechie-tab-menu>div.list-group>a").siblings('a.active').removeClass('active');
		$("div.bhoechie-tab-menu>div.list-group>a").eq(index).addClass('active');
		$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass('active');
	});
});