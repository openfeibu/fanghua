<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<?php include template("content_m","header"); ?>
<body>
	<article class='main'>
		<section class='top-bg success-top'>
			<h2><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h2>
			<p><?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?></p>
		</section>
		<article class='xq'>
			<h2><?php echo $title;?></h2>
			<p class='time'>发布时间：<?php echo date('Y-m-d',time($inputtime));?></p>
			<p class='plo'>来源：<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c51856033b69f8a0c30f84652140d2b3&sql=SELECT+copyfrom+FROM+v9_news_data+where+id%3D%24id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT copyfrom FROM v9_news_data where id=$id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
<?php list($copyfrom) = explode('|', $val['copyfrom'])?>
<?php echo $copyfrom;?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></p>
			<section class='test'>
				<?php echo $content;?>
			</section>
		</article>

		
	</article>
<?php include template("content_m",footer); ?>
						