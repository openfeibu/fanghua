<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="banner">
  <h1 class="b<?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h1>
</div>
<div id="fb-main" class="specialty">
<div class="all-out">	
	<?php if($catid==61) { ?>

	<div id="fb-side">
    <ul class="fb-tab">
	    <li <?php if(!$id) { ?>class="ed"<?php } ?>><a href="index.php?m=content&c=index&a=lists&catid=61">查看所有</a></li>
       	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1346f6c03491be59fa7ccfa72ccb07b5&action=lists&catid=%24catid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>		
		<li  <?php if($r[id]==$id) { ?>class="ed"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>		
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  	</div>
   	<div id="specialty">
	<div class="subnav">您所在的位置：<a href="index.php">网站首页</a> &gt; <a href="<?php echo $CATEGORYS[$CAT['parentid']]['url'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a> &gt; <?php echo $CAT['catname'];?></div>

 	 <ul class="servicelist">
	 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1346f6c03491be59fa7ccfa72ccb07b5&action=lists&catid=%24catid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<li ><a href="<?php echo $r['url'];?>" style="background: #FFF url(<?php echo $r['thumb'];?>) no-repeat;"><?php echo $r['title'];?></a></li>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>	

    <?php } elseif ($catid==40) { ?> 
    
	<div id="fb-area">
	<div class="subnav">您所在的位置：<a href="index.php">网站首页</a> &gt; <a href="<?php echo $CATEGORYS[$CAT['parentid']]['url'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a> &gt; <?php echo $CAT['catname'];?></div>
    <dl class="fb-newlist f16">
	  	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b95a8062d4aa4f2ba8984f4b38d1bf7a&action=lists&catid=%24catid&order=id+DESC&page=%24page&moreinfo=1&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
		<dt><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></dt>
		<dd><?php echo date('Y-m-d',$r[inputtime]);?></dd>		
		<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</dl>
    <div class="fb-pagenav"><?php echo $pages;?></div>
	
	<?php } else { ?>
    <?php include template("content","left"); ?> 
    <dl class="newlist f16">
	  	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b95a8062d4aa4f2ba8984f4b38d1bf7a&action=lists&catid=%24catid&order=id+DESC&page=%24page&moreinfo=1&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
		<dt><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></dt>
		<dd><?php echo date('Y-m-d',$r[inputtime]);?></dd>		
		<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</dl>
    <div class="pagenav"><?php echo $pages;?></div>
    <?php } ?>
  </div>
</div>
</div>
<?php include template("content","footer"); ?>