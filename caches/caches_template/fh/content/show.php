<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="banner">
  <h1 class="b<?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h1>
</div>
<div id="main">
	<?php if($catid==61) { ?>
	<div id="side">
    <ul class="tab">
       	<li<?php if(!$id) { ?> class="ed"<?php } ?>><a href="index.php?m=content&c=index&a=lists&catid=61">查看所有</a></li>
       	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aadf84d1679058b923b1c2df730ccea2&action=lists&catid=%24catid&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>		
		<li<?php if($r[id]==$id) { ?> class="ed"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>		
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  	</div>
   <div id="area">
<div class="subnav">您所在的位置：<a href="index.php">网站首页</a> &gt; <a href="<?php echo $CATEGORYS[$CAT['parentid']]['url'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a> &gt; <?php echo $title;?></div>
	<?php } else { ?>
  	<?php include template("content","show_left"); ?> 
  	<?php } ?>	
    <h2><?php echo $title;?></h2>
    <h4 class="ch4 <?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?>h4"><?php echo $inputtime;?>　来源：<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c51856033b69f8a0c30f84652140d2b3&sql=SELECT+copyfrom+FROM+v9_news_data+where+id%3D%24id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT copyfrom FROM v9_news_data where id=$id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<?php list($copyfrom) = explode('|', $val['copyfrom'])?>
<?php echo $copyfrom;?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></h4>
   	<?php echo $content;?>
  </div>
</div>
<?php include template("content","footer"); ?>