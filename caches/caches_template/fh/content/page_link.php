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
 	<h2><?php echo $catname;?></h2>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=274750ae87f3b000334b2eeb6e2a35bc&action=type_lists&listorder=desc&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_lists')) {$data = $link_tag->type_lists(array('listorder'=>'desc','siteid'=>$siteid,'limit'=>'20',));}?>  
    <?php $n=1;if(is_array($data)) foreach($data AS $type_v) { ?>  
       <h3><?php echo $type_v['name'];?></h3><div class="lbox">
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=f08f52d48d606157c4805055a065c78d&action=type_list&siteid=%24siteid&typeid=%24type_v%5Btypeid%5D&order=listorder+DESC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>$type_v[typeid],'order'=>'listorder DESC','limit'=>'20',));}?>
       <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?> 
       <a href="<?php echo $v['url'];?>"><?php echo $v['name'];?></a>
       <?php $n++;}unset($n); ?>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	   <div class="clearfix"></div>
       </div>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
</div>
<?php include template("content","footer"); ?>
