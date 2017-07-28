<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header"); ?>
<body>
	<article class='main'>
		<section class='top-bg success-top'>
			<h2><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h2>
			<p><?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?></p>
		</section>
		<?php if($catid==61) { ?>
		<article class='field'>
			<ul>
				
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aadf84d1679058b923b1c2df730ccea2&action=lists&catid=%24catid&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
			<?php
				$url=str_replace("www","m",$r[url]);
				
			?>	
			<li><a href="<?php echo $url;?>"><?php echo $r['title'];?></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			
		<?php } else { ?>
		<article class='list'>
			<ul id="list">							
			</ul>		
			<div id="catid" style="display:none;"><?php echo $catid;?></div>
			<div id="page" style="display:none;">1</div>
			<div class='loading_box'>
				 <svg width="3rem" height="3rem" viewbox="0 0 80 80" style='margin:0 auto;display:block' id='svg'>
					<circle cx="40" cy="40" r="30" stroke-width="10" stroke="#D1D3D7" fill="none"></circle>
					<circle cx="40" cy="40" r="30" stroke-width="10" stroke="#f00" fill="none" transform="matrix(0,-1,1,0,0,80)" -webkit-transform="matrix(0,-1,1,0,0,80)" stroke-dasharray="0 188.4"></circle>
				</svg>
				<article class='loading'>点击加载更多</article>
			</div>
			
		</article>
		<?php } ?>
		
	</article>
<?php include template("content_m",footer); ?>
<script type="text/javascript">
	$(function(){
		var catid =parseInt($("#catid").text());
		var page  =parseInt($("#page").text());
		theajax(catid,page);
		function loading(){
			var catid =parseInt($("#catid").text());
			var page  =parseInt($("#page").text());
			theajax(catid,page);
		}
		$(".loading").on('click',loading)
		function theajax(catid,page){
			$.ajax({
			url:'index.php?m=content&c=index&a=theajax',
			data:{'catid':catid,'page':page},
			dataType:'text',
			beforeSend:function(){
				$('.loading').text('玩命加载中...');
				$('circle').eq(1).attr('stroke-dasharray', '0 188.4');
				$('#svg').css('opacity','1');
				$('circle').eq(1).attr('stroke-dasharray', '188.4 188.4');
			
			},
			success:function(data){	
				setTimeout(function(){
					$('#svg').css('opacity','0');
					$('circle').eq(1).attr('stroke-dasharray', '0 188.4');

					if(data==""){
					$('.loading').text('没有新内容可加载');
					$('.loading').attr('class',"noloading");
					$('.loading').removeClass('loading');	
					$(".noloading").off('click')					
					return false;
					}
					$('.loading').text('点击加载更多');
					$("#list").append(data);
					$("#page").text(page+1);
					var li = $('.list ul li');
					for(var i=0;i<li.length;i++){
						if(i%2 ==0){
							li.eq(i).addClass('li-bg').find('a').addClass('red')
						
						}else{
							li.eq(i).find('a').addClass('black')
							
						}
					}
					},500)
				
				
			}
			});
		}
	});
</script>
						