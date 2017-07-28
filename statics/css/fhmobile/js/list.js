$(function(){
	var allen = new model()



	allen.litoge();
	
	/*$('.screen-click').tap(function(){
		//禁止滑动
		$('#news')[0].ontouchstart=function(){
			document.ontouchstart=function(){
				return false;
			}
		}
		$('.nav')[0].ontouchstart=function(){
			document.ontouchstart=function(){
				return false;
			}
		}
		//取消禁止滑动
		$('#news')[0].ontouchend=function(){
			document.ontouchstart=function(){
				return true;
			}
		}
		$('.nav')[0].ontouchstart=function(){
			document.ontouchstart=function(){
				return true;
			}
		}
		allen.screen()
		
	})
	$('.screen .close').tap(function(){
	
		allen.screenhide()
	})
	*/
})
var cookie = [];
var email_z = "/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/ ";
function messcheck(){
	var name = $(".lau .text").eq(0).val()
	var email = $(".lau .text").eq(1).val()
	var mess = $(".lau textarea").val()
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 if (filter.test(email) && name.length>0 && mess.length>0){	
		 return true;
	 } else {
		alert('您的填写有误');
		return false;
	 }
	}
	

function check(){
		var length = $('.screen .text').val().length;
			if(length >0){
			/*	cookie = getCookie('new').split('%2C');
				cookie.push($('.screen .text').val());
				setCookie({
					name :'new',
					value:cookie,
				});*/
			 return true;
			}else{
				return false;
			}
}
function change() {
			var winw = $(window).width();
			var html = $("html");
			var add = 0;
			add = (winw - 320)*0.0625;
			if(10+add>22){
				html.css('font-size', '22px');
			}else{
				alert(1)
			html.css('font-size', 10 + add + 'px');
			}
			
		}	
	


	