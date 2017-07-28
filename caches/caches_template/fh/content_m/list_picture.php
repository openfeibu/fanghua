<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header"); ?>
<body>
	<article class='main'>
		<section class='top-bg lv'>
			<h2><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h2>
			<p><?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?></p>
		</section>
		<article class='team'>
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=395869ab857a54988ecc3f2a22505ac5&action=category&catid=%24parentid&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eaf94782e689ee2ec6cd4c808c4bef44&action=lists&catid=%24v%5Bcatid%5D&order=id+DESC&page=%24page&moreinfo=1&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$v[catid],'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<?php
					$url=str_replace("www","m",$r[url]);
					
				?>				
				<li>
					<a href="<?php echo $url;?>">
						<span><img src="<?php echo $r['thumb'];?>"/></span>
						<p class='name'><?php echo $r['title'];?></p>
						<!--<p class='zw'>CEO</p>-->
					</a>
				</li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
			</ul>
		</article>

		
	</article>
	<?php include template("content_m","footer"); ?>

	

						