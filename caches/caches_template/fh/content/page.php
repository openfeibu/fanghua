<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if($parentid==9) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8d2022a939836b5dc1a722d8db333e0e&action=category&siteid=1&catid=%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$catid,'limit'=>'1',));}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<?php header('location:'.$r['url'].'');?>
<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } ?>
<?php include template("content","header"); ?>
<div id="banner">
  <h1 class="b<?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h1>
</div>
<div id="main">
  	<?php include template("content","left"); ?>
 	<?php if($catid==33) { ?>
 	 <ul class="servicelist">
	 	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=395869ab857a54988ecc3f2a22505ac5&action=category&catid=%24parentid&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
		<?php if($r[catid]!=33) { ?>	
		<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
		<?php } ?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>	
 	<?php } else { ?>
    <h2><?php echo $title;?></h2>
   	<?php echo $content;?>
   	<?php } ?>
  </div>
</div>
<?php include template("content","footer"); ?>