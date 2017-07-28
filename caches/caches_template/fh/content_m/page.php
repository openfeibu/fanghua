<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content_m","header"); ?>
<body>
	<section class='main'>
		<?php if($catid==33) { ?>
		<section class='top-bg'>
			<h2><?php echo $CATEGORYS[$parentid]['catname'];?></h2>
			<p><?php echo $CATEGORYS[$parentid]['catdir'];?></p>
		</section>
		<article class='field'>
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=395869ab857a54988ecc3f2a22505ac5&action=category&catid=%24parentid&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
				<?php $url=str_replace("www","m",$r[url]); ?>
				<?php if($r[catid]!=33) { ?>	
				<li><a href="<?php echo $url;?>"><?php echo $r['catname'];?></a></li>
				<?php } ?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
				<div class='clear'></div>
				
			</ul>
			
		</article>
		<?php } else { ?>
		<section class='top-bg'>
			<h2><?php echo $catname;?></h2>
			<p><?php echo $catdir;?></p>
		</section>
		<article class='xq'>
			<h2><?php echo $title;?></h2>
			
			<p></p>
			<section class='test'>
				<?php echo $content;?>
			</section>
		</article>	
		<?php } ?>
	</section>
<?php include template("content_m","footer"); ?>
	
	

						