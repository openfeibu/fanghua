<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="zh-cmn-Hans-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="description" content="{$SEO[description]" />
<meta name="keywords" content="{$SEO[keywords]" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>搜索结果 | <?php echo $SEO['site_title'];?></title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link href="<?php echo CSS_PATH;?>fh/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="//ajax.microsoft.com/ajax/jquery/jquery-1.11.3.min.js"></script>
<script async="async" type="text/javascript" src="<?php echo CSS_PATH;?>fh/js/chocoslider.js"></script>
</head>
<body>
	<?php $data1=$data?>
<div id="header">
  <div id="logo"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b32ea71ea71acef0aa89212ca0683956&sql=SELECT+%2A+FROM+v9_page+where+catid%3D53\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=53 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> <?php echo $val['content'];?> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></div>
  <div class="tel">咨询热线：<span><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=247051f10ff2a0540f568c11b19d519a&sql=SELECT+%2A+FROM+v9_page+where+catid%3D51\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=51 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?> <?php echo $val['content'];?> <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</span></div>
  <div id="searchbox">
    <form name="search" type="get">
	   	<input type="hidden" name="m" value="search"/>
	  	<input type="hidden" name="c" value="index"/>
	  	<input type="hidden" name="a" value="init"/>
	  	<input type="hidden" name="typeid" value="1" id="typeid"/>
	  	<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
     	<input name="q" type="text" id="skey" class="searcha" placeholder="输入关键词……"  <?php if($_GET['q']) { ?>value="<?php echo $_GET['q']; ?>"<?php } ?>>
      	<input id="sbtn" type="submit" class="searchb" value="">
    </form>
    <script type="text/javascript">
	$(function(){
		
		$(".searchb").click(function(){
			var keywork=$.trim($(".searcha").val());
			if(keywork==""){
				alert("请输入关键字");
				return false;
			}
			$("form").submit();
		});
	});
</script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
  </div>
</div>
<div id="navbg">
  <ul id="nav">
    <li <?php if(!$catid ) { ?> id="navc" <?php } ?> ><a href="index.php">网站首页</a></li>
    
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6e196bb1cddfb5d66935e64e7da31877&action=category&catid=9&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
	<?php $n=1; if(is_array($data)) foreach($data AS $cid => $r) { ?>
	<li <?php if($r[catid]==$CATEGORYS[$CAT[parentid]][catid] || $r[catid]==$catid) { ?> id="navc" <?php } ?> ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
	<ol>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc543d14eb92e7fe6411d98818888d47&action=category&catid=%24cid&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cid,'order'=>'listorder ASC','limit'=>'6',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
	<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
	<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</ol>
    </li>
	<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </ul>
</div>

<div id="banner">
  <h1 class="bsearch">搜索结果</h1>
</div>
<div id="main">
  	<div id="side">
    <ul class="tab">
       	 <li class="ed"><a href="#">搜索结果</a></li>
    </ul>
  </div>
   <div id="area">
	   <div class="subnav">您所在的位置：<a href="index.php">网站首页</a> &gt; 站内搜索</div>
 	<div class="news_type">
	        <ul class="list_news">
				<?php $n=1; if(is_array($data1)) foreach($data1 AS $i => $r) { ?>	
					<li><font  class="font">·</font><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a><span class="date">[<?php echo date('Y-m-d',$r[inputtime]);?>]</span></li>
				<?php $n++;}unset($n); ?>
			</ul>
            <div id="pages" class="text-c mg_t20"><?php echo $pages;?></div>
    </div>
  </div>
</div>
<?php include template("content","footer"); ?>