<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="description" content="{$SEO[description]" />
<meta name="keywords" content="{$SEO[keywords]" />
<title><?php if($catid) { ?><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?> | <?php } ?><?php echo $SEO['site_title'];?></title>
<link href="<?php echo CSS_PATH;?>fhmobile/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo CSS_PATH;?>fhmobile/js/zepto.min.js"></script>
</head>
<body>
	<article class='main'>
		<section class='nav-c'>
			<ul>
				<li class='li1'><a href='index.php?m=content&c=index&a=lists&catid=27'><p>芳华简介</p></a></li>
				<li class='li2'><a href='index.php?m=content&c=index&a=lists&catid=30'><p>律师团队</p></a></li>
				<li class='li3'><a href='index.php?m=content&c=index&a=lists&catid=61'><p>专业领域</p></a></li>
				<li class='li4'><a href='index.php?m=content&c=index&a=lists&catid=40'><p>典型案例</p></a></li>
			</ul>
		</section>
	</article>
	<?php include template("content_m","footer"); ?>

						