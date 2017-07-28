<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="<?php echo CSS_PATH;?>fhmobile/js/zepto.min.js"></script>
<meta name="description" content="{$SEO[description]" />
<meta name="keywords" content="{$SEO[keywords]" />
<title><?php if($catid) { ?><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?> | <?php } ?><?php echo $SEO['site_title'];?></title>
<link href="<?php echo CSS_PATH;?>fhmobile/css/puclid.css" rel="stylesheet" type="text/css" />
</head>