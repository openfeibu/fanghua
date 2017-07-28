<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="banner">
  <h1 class="b<?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h1>
</div>
<div id="main">
  	<?php include template("content","show_left"); ?> 	
    <h2><?php echo $title;?></h2>
   	<?php echo $content;?>
  </div>
</div>
<?php include template("content","footer"); ?>