var model = function(){};
$(document).ready(function(){
	
	model.prototype.init=function(){
		var li = $('.nav-c ul li');
		//初始化
		li.height(li.width())
			
		//横竖转换初始化
		$(window).resize(function(){
			change()
			li.height(li.width())
			$('.screen').width($(window).width()).height($(window).height()-45)			
		})
		change()
		this.litoge();
		
		}
	model.prototype.litoge = function(){
		var li = $('.list ul li');
		for(var i=0;i<li.length;i++){
			if(i%2 !=0){
				li.eq(i).addClass('li-bg').find('a').addClass('red')
			
			}else{
				li.eq(i).find('a').addClass('black')
				
			}
		}
	}
	/*model.prototype.loading = function(_do){
		//_do 为y是加载 为w是加载完毕 为n是没有可加载 
		if(_do == 'y'){
			$('.loading').text('玩命加载中...')
		}else if(_do == 'w'){
			$('.loading').text('点击加载更多')
		}else if(_do == 'n'){
			$('.loading').text('没有新内容可加载')
		}
		
	}
	*/
		model.prototype.loading = function(_do){
		//_do 为y是加载 为w是加载完毕 为n是没有可加载 
		if(_do == 'y'){
			//$('.loading').text('玩命加载中...')
			$('.loading').hide();
            $('circle').eq(1).attr('stroke-dasharray', '180 188.4');
			
		}else if(_do == 'w'){
			$('circle').eq(1).attr('stroke-dasharray', '188.4 188.4');
			$('.loading').show().test('点击加载更多')
			$('circle').eq(1).hide();
		}else if(_do == 'n'){
			$('circle').eq(1).attr('stroke-dasharray', '180 188.4');
			$('.loading').test('没有新内容可加载')
		}
		
	}
	model.prototype.objsub = function(obj,num){
		var length = obj.length;
		var num1;
		if(length>0){
			for(var i =0;i<length-1;i++){
				var html = obj.eq(i).html();
				if(obj.eq(i).html().length>num){
					num1 = num
				}else{
					num1 = obj.eq(i).html().length
				}
				console.log(num1)
				var h_html = html.substr(0,num1);	
				obj.eq(i).html(h_html)
			}
		}
		
	}
	
	model.prototype.screen = function(){
		$('.screen-click').css('opacity',0).css('z-index',-10);
		$('.screen').css({'opacity':1,'width':$(window).width(),'height':$(window).height()-45,'border-radius':0,'top':0,'right':0,'position':'fixed'})
	}
	model.prototype.screenhide = function(){
		$('.screen-click').css('opacity',1).css('z-index',100000);
		$('.screen').css({'opacity':0,'width':50,'height':50,'border-radius':'50%','top':10,'right':10,'position':'absolute'})
	}
	/*model.prototype.news=function(){
		  var news = getCookie('new').split('%2C');
		  var news_html = '';
		  for(var i=0;i<news.length-1;i++){
			  news_html = '<li>'+news[i]+'<\/li>'+news_html 
		  }
		  $('.screen .news').html(news_html)
	}*/
	
	function change() {
			var winw = document.body.scrollWidth;;
			var html = $("html");
			var add = 0;
			add = (winw - 320)*0.0625;
			if(10+add>22){
				html.css('font-size', '22px');
			}else{
			html.css('font-size', 10 + add + 'px');
			}
			
		}
	//$(".loading").click(function(){
	//	var page=parseInt($("#pagesdiv").find("span").text());
	//	var catid=parseInt($("#catid").text());
	//	var num=$("#list li").length;
	//	alert(num);
	//});
})
$(function(){
		var allen = new model(); //实例化一个model
		allen.init()//调用初始化
})																																																																																																																																																																																																														


	