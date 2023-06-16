// JavaScript Document
$("#header .gnb>ul>li").mouseover(function(){
	$(this).children(".sub").stop().slideDown();
});

$("#header .gnb>ul>li").mouseout(function(){
	$(this).children(".sub").stop().slideUp();
});// JavaScript Document

var scroll_top = 0;
$(window).scroll(function(){
    scroll_top = $(window).scrollTop();
    $('.logo').css('transform', 'rotate(' + scroll_top * 0.1 + 'deg');
});

$("#header_m .gnb_m>ul>li").mouseover(function(){
	$(this).children(".sub").stop().slideDown();
});

$("#header_m .gnb_m>ul>li").mouseout(function(){
	$(this).children(".sub").stop().slideUp();
});

        
$("#header_m .button_m").click(function(){   // 모바일 버튼을 클릭하면 뭔가를 하겠다
    $("#header_m .gnb_m").fadeToggle();
});


$(window).scroll(function(){
	if($(window).scrollTop()> 0.1){
        $("#shortcut").css('top','-60px');
        $("#header").css('top','0px');
	}else{
		$("#shortcut").css('top','0px');
        $("#header").css('top','60px');
	}
	
});

$(window).scroll(function(){
	if($(window).scrollTop()> 0.1){
        $("#shortcut").css('top','-60px');
        $("#header_m").css('top','0px');
	}else{
		$("#shortcut").css('top','0px');
        $("#header_m").css('top','60px');
	}
	
});