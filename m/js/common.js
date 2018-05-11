$(document).ready(function(){
	console.log('r');

	var innerH = $('body').height();
	var dep1 = $('.depth1 > li'); // depth1
	var dep2 = $('.depth2');

		//gnb 높이설정
	$('.gnb').css({'height':innerH});
	$('.depth1').css({'height': '100' + '%'});

	//gnb 실행
	$('.gnb_btn').click(function(){
		$('.black').css({'display':'block'}); //body 어둡게
		$('.gnb').stop().animate({'left':0},'200');
	})

	//gnb 닫기
	$('.close_btn').click(function(){
		$('.black').css({'display':'none'}); //body 밝게
		$('.gnb').stop().animate({'left':-360},'50');
		dep2.removeClass('active').slideUp();
	});
	$('.black').click(function(){
		$('.black').css({'display':'none'}); //body 밝게
		$('.gnb').stop().animate({'left':-360},'50');
		dep2.removeClass('active').slideUp();
	});



	//gnb 토글서브메뉴
	dep1.click(function(){
		var clkList = $(this).children('ul');
		if(clkList.hasClass('active')) {

		} else {
			//선택한 li의 서브메뉴가 펼쳐져있지 않을때
			dep2.removeClass('active');
			clkList.slideDown();
		}
		$(this).children('ul').toggleClass('active').slideDown();
		dep2.not('.active').slideUp();
	})


})
