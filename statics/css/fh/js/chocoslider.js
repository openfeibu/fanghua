!function(a){a.fn.chocoslider=function(b){function c(b,c,d,e){var f,g,h,i=b.data("choco:vars");return i&&!i.stop||e?(d.bChange.call(this),e?("prev"==e&&b.css("background","url("+i.currentImage.attr("src")+") no-repeat"),"next"==e&&b.css("background","url("+i.currentImage.attr("src")+") no-repeat")):b.css("background","url("+i.currentImage.attr("src")+") no-repeat"),i.currentSlide++,i.currentSlide==i.totalSlides&&(i.currentSlide=0,d.chocoEnd.call(this)),0>i.currentSlide&&(i.currentSlide=i.totalSlides-1),i.currentImage=a(c[i.currentSlide]).is("img")?a(c[i.currentSlide]):a(c[i.currentSlide]).find("img:first"),d.controlNavigation&&(a(".choco-controlNavigation a",b).removeClass("active"),a(".choco-controlNavigation a:eq("+i.currentSlide+")",b).addClass("active")),""!=i.currentImage.attr("title")?(f=i.currentImage.attr("title"),"#"==f.substr(0,1)&&(f=a(f).html()),"block"==a(".choco-title",b).css("display")?a(".choco-title p",b).fadeOut(d.speedStrip,function(){a(this).html(f),a(this).fadeIn(d.speedStrip)}):a(".choco-title p",b).html(f),a(".choco-title",b).fadeIn(d.speedStrip)):a(".choco-title",b).fadeOut(d.speedStrip),g=0,a(".choco-slice",b).each(function(){var c=Math.round(b.width()/d.numberStrips);a(this).css({height:"0px",opacity:"0",background:"url("+i.currentImage.attr("src")+") no-repeat -"+(c+g*c-c)+"px 0%"}),g++}),"random"==d.effect&&(c=["slide","fade"],i.randAnim=c[Math.floor(Math.random()*(c.length+1))],void 0==i.randAnim&&(i.randAnim="fade")),-1!=d.effect.indexOf(",")&&(c=d.effect.split(","),i.randAnim=a.trim(c[Math.floor(Math.random()*c.length)])),i.running=!0,"slide"==d.effect||"slide"==i.randAnim?(h=0,g=0,a(".choco-slice",b).each(function(){var c=a(this),e=c.width();c.css({top:"0px",height:"100%",width:"0px"}),g==d.numberStrips-1?setTimeout(function(){c.animate({width:e,opacity:"1.0"},d.speedStrip,"",function(){b.trigger("choco:animFinished")})},100+h):setTimeout(function(){c.animate({width:e,opacity:"1.0"},d.speedStrip)},100+h),h+=50,g++})):("fade"==d.effect||"fade"==i.randAnim)&&(g=0,a(".choco-slice",b).each(function(){a(this).css("height","100%"),g==d.numberStrips-1?a(this).animate({opacity:"1.0"},2*d.speedStrip,"",function(){b.trigger("choco:animFinished")}):a(this).animate({opacity:"1.0"},2*d.speedStrip),g++})),void 0):!1}var d=a.extend({},a.fn.chocoslider.defaults,b);return this.each(function(){var b,e,f,g,h={currentSlide:0,currentImage:"",totalSlides:0,randAnim:"",running:!1,paused:!1,stop:!1},i=a(this);for(i.data("choco:vars",h),i.css("position","relative"),i.addClass("chocoslider"),b=i.children(),b.each(function(){var b,c,d=a(this),e="";d.is("img")||(d.is("a")&&(d.addClass("choco-imageLink"),e=d),d=d.find("img:first")),b=d.width(),0==b&&(b=d.attr("width")),c=d.height(),0==c&&(c=d.attr("height")),b>i.width()&&i.width(b),c>i.height()&&i.height(c),""!=e&&e.css("display","none"),d.css("display","none"),h.totalSlides++}),h.currentImage=a(b[h.currentSlide]).is("img")?a(b[h.currentSlide]):a(b[h.currentSlide]).find("img:first"),a(b[h.currentSlide]).is("a")&&a(b[h.currentSlide]).css("display","block"),i.css("background","url("+h.currentImage.attr("src")+") no-repeat"),e=0;e<d.numberStrips;e++)f=Math.round(i.width()/d.numberStrips),e==d.numberStrips-1?i.append(a('<div class="choco-slice"></div>').css({left:f*e+"px",width:i.width()-f*e+"px"})):i.append(a('<div class="choco-slice"></div>').css({left:f*e+"px",width:f+"px"}));if(i.append(a('<div class="choco-title"><p></p></div>').css({display:"none",opacity:d.transparencytitle})),""!=h.currentImage.attr("title")&&(e=h.currentImage.attr("title"),"#"==e.substr(0,1)&&(e=a(e).html()),a(".choco-title p",i).html(e),a(".choco-title",i).fadeIn(d.speedStrip)),g=0,d.auto&&1<b.length&&(g=setInterval(function(){c(i,b,d,!1)},d.sliderDelay)),d.controlNavigation){for(f=a('<div class="choco-controlNavigation"></div>'),i.append(f),e=0;e<b.length;e++)f.append('<a class="choco-control" rel="'+e+'">'+(e+1)+"</a>");a(".choco-controlNavigation a:eq("+h.currentSlide+")",i).addClass("active"),a(".choco-controlNavigation a",i).on("click",function(){return h.running||a(this).hasClass("active")?!1:(clearInterval(g),g="",i.css("background","url("+h.currentImage.attr("src")+") no-repeat"),h.currentSlide=a(this).attr("rel")-1,c(i,b,d,"control"),void 0)})}d.autoPause&&i.hover(function(){h.paused=!0,clearInterval(g),g=""},function(){h.paused=!1,""==g&&d.auto&&(g=setInterval(function(){c(i,b,d,!1)},d.sliderDelay))}),i.bind("choco:animFinished",function(){h.running=!1,a(b).each(function(){a(this).is("a")&&a(this).css("display","none")}),a(b[h.currentSlide]).is("a")&&a(b[h.currentSlide]).css("display","block"),""==g&&!h.paused&&d.auto&&(g=setInterval(function(){c(i,b,d,!1)},d.sliderDelay)),d.aChange.call(this)})})},a.fn.chocoslider.defaults={auto:!0,autoPause:!0,speedStrip:500,effect:"random",numberStrips:15,sliderDelay:3e3,transparencytitle:.8,bChange:function(){},aChange:function(){},chocoEnd:function(){},controlNavigation:!0},a.fn._reverse=[].reverse}(jQuery);
$(function(){$('#slider').chocoslider();});