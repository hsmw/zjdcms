//���������˵�
$(function (){
	 $(".mleftxla",this).hide(); 
     $(".mleftx ul li").click(function(){
     $(".mleftxla",this).toggle();
		});
});




$(function(){
	//����ѡ��л�
	$(".tab_list").each(function(q){
		$(".tab_list").eq(q).find(".tab_a").each(function(e){
			$(this).mouseenter(function(){
				$(".tab_list").eq(q).find(".tab_a").removeClass("on")
				$(this).addClass("on")
				$(".tab_list").eq(q).find(".tab_b").hide()
				$(".tab_list").eq(q).find(".tab_b").eq(e).show()
			})
			
		})	
		$(".tab_list").eq(q).find(".tab_a").eq(0).mouseenter();
	})
	
	//
	
	$(".tab_click").each(function(q){
		$(".tab_click").eq(q).find(".tab_a").each(function(e){
			$(this).click(function(){
				$(".tab_click").eq(q).find(".tab_a").removeClass("on")
				$(this).addClass("on")
				$(".tab_click").eq(q).find(".tab_b").hide()
				$(".tab_click").eq(q).find(".tab_b").eq(e).show()
			})
			
		})	
		$(".tab_click").eq(q).find(".tab_a").eq(0).click();
	})
	//
			
});


	/*�������ɫ*/
	$("#go2").css({
		height: function () {
			return $(document).height()+340;
		},
		width:"100%"
	});
	function closego(){
		$("#go2").hide();
		$("#updatemsg").hide();
	}




//ע���¼����
$(function(){
	$(".cha").click(function(){
		$(".hydlbg").fadeOut();
		$("#go2").fadeOut();		
	})
	$(".toprsz").click(function(){
		$(".hydlbg").fadeIn();
		$("#go2").fadeIn();		
	})
	
	
	$(".cha2").click(function(){
		$(".hyzcbg").fadeOut();
		$("#go2").fadeOut();		
	})
	$(".toprsy").click(function(){
		$(".hyzcbg").fadeIn();
		$("#go2").fadeIn();		
	})
	

	$(".gzztbtn").click(function(){
		$(".zuotibg").fadeOut();					 
		$(".ztztbg").fadeIn();
		$("#go2").fadeIn();		
	})
	
	$(".ztzt4").click(function(){
		$(".ztztbg").fadeOut();
		$("#go2").fadeOut();
		$(".zuotibg").fadeIn();
		$("#go2").fadeIn();

	})
	$(".zuotitys2").click(function(){
		$(".zuotibg").fadeOut();
		$("#go2").fadeOut();
	})
	
	
	
	$(".keclxbtn").click(function(){
		$(".zuotibg").fadeIn();
		$("#go2").fadeIn();
	})
	$(".keccsbtn").click(function(){
		$(".zuotibg").fadeIn();
		$("#go2").fadeIn();
	})
	
	
	
	$(".gzxtbtn").click(function(){
		$(".xutibg").fadeOut();					 
		$(".ztztbg").fadeIn();
		$("#go2").fadeIn();		
	})
	$(".xutidg").click(function(){
		$(".xutibg").fadeOut();
		$("#go2").fadeOut();
	})
	$(".xutixg").click(function(){
		
		
		$(".xutibg").fadeOut();
		$(".zuotibg").fadeIn();
		$("#go2").fadeIn();
	})
	
	
	
	//����ע��
	$(".ljzcbtn").click(function(){
		$(".hydlbg").fadeOut();
		$(".hyzcbg").fadeIn();
		$("#go2").fadeIn();
	})
	//������¼
	$(".ljdlbtn").click(function(){
		$(".hyzcbg").fadeOut();
		$(".hydlbg").fadeIn();
		$("#go2").fadeIn();
	})
	
});


