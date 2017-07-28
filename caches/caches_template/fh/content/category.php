<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if($parentid==9) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8d2022a939836b5dc1a722d8db333e0e&action=category&siteid=1&catid=%24catid&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$catid,'limit'=>'1',));}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<?php header('location:'.$r['url'].'');?>
<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } ?>
