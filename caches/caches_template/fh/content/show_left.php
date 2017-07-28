<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="side">
    <ul class="tab">
       	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=345949e830ab00bf00fa8c054c8f2456&action=category&catid=%24CAT%5Bparentid%5D&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CAT[parentid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>		
		<li  <?php if($r[catid]==$catid) { ?>class="ed"<?php } ?>><a href="<?php echo $r['url'];?>#side"><?php echo $r['catname'];?></a></li>		
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
    </ul>
  </div>
   <div id="area">
<div class="subnav">您所在的位置：<a href="index.php">网站首页</a> &gt; <a href="<?php echo $CATEGORYS[$CAT['parentid']]['url'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a> &gt; <?php echo $CAT['catname'];?></div>
	