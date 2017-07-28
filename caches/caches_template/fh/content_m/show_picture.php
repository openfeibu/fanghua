<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header"); ?>
<body>
	<article class='main'>
		<section class='top-bg lv'>
			<h2><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></h2>
			<p><?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?></p>
		</section>
		<article class='xq'>
			<h2><?php echo $title;?></h2>
		<!--	<p class='plo'>CEO</p>-->
			<section class='test team_test'>
				<?php echo $content;?>				
			</section>
		</article>

		
	</article>
<?php include template("content_m","footer"); ?>
						