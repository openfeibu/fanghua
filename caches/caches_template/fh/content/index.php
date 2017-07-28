<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script>var uaTest = /Android|webOS|Windows Phone|iPhone|ucweb|ucbrowser|iPod|BlackBerry/i.test(navigator.userAgent.toLowerCase());var touchTest = 'ontouchend' in document;if(uaTest && touchTest){window.location.href ='http://m.fanghualawyer.com';}</script>
<div id="banner">
  <div id="slider">
	  	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e787131e39a983766245095fda70933d&action=lists&catid=52&order=id+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'52','order'=>'id ASC','limit'=>'4',));}?>
	    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
	     <a href="<?php echo $val['url'];?>"><img src="<?php echo $val['thumb'];?>" alt="<?php echo $val['title'];?>" title=""/></a>
	    <?php $n++;}unset($n); ?>
	    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
</div>
<div id="fb-main" class="home">
  <div id="fb-side1">

 <div id="title">
    <h4>关于我们<span>/ About Us</span></h4>
</div>
   <div id="side1">  
    <img src="<?php echo CSS_PATH;?>fh/img/slider1.jpg" width="100%" alt="关于我们"/>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1fd3ca882089b0b6a5ad23b43ca648db&sql=SELECT+%2A+FROM+v9_page+where+catid%3D27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=27 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
	<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
	<P><?php echo str_cut(strip_tags($val[content]),422,"");?>......</P>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

   <div class="more"></br><a href="index.php?m=content&c=index&a=lists&catid=27">More</a></div>
	</div>

 <div id="title">
  <h4>芳华动态<span>/ Recent News</span></h4>
</div>
   <div id="side1">
    <ul>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ce14f05b04355da2c6c0c88bdd6f9a9b&action=lists&catid=22&order=id+DESC&page=%24page&moreinfo=1&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'22','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
	<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
	<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
	<?php $n++;}unset($n); ?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>

    <div class="more"></br><a href="index.php?m=content&c=index&a=lists&catid=27">More</a></div>
  </div>
	
  <div id="title">
   <h4>联系我们<span>/ Contact Us</span></h4>
</div>
   <div id="side3">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d4be0815ba6de24b97c607a2bc28befe&sql=SELECT+%2A+FROM+v9_page+where+catid%3D41\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=41 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>		
        <?php echo $val['content'];?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

<div class="more"></br><a href="index.php?m=content&c=index&a=lists&catid=27">More</a></div>
  </div>
  </div>

  <div id="case">
    <h4>典型案例<span>Project And Case</span></h4>
    <div class="more"><span>..................................................................................................</span><a href="index.php?m=content&c=index&a=lists&catid=40">More</a></div>
     
    <dl class="newlist">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3290b075628146a0263e5036b7b7e7d1&action=lists&catid=40&order=id+DESC&page=%24page&moreinfo=1&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'40','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'40','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
	<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>

		<dt><a href="<?php echo $r['url'];?>"><?php echo str_cut(strip_tags($r[title]),80,"...");?></a></dt>
      	<dd><?php echo date('Y-m-d',$r[inputtime]);?></dd>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
    <ul class="piclink" id="piclink">
      <li><a href="index.php?m=content&c=index&a=lists&catid=30">律师团队</a></li>
      <li><a href="index.php?m=content&c=index&a=lists&catid=60">专业领域</a></li>
      <li><a href="index.php?m=content&c=index&a=lists&catid=22">资讯中心</a></li>
      <li><a href="index.php?m=content&c=index&a=lists&catid=25">联系我们</a></li>
    </ul>
    <div class="subleft">
      <h4>最新法规<span>Laws Update</span></h4>
      <div class="more"><span>.........................</span><a href="index.php?m=content&c=index&a=lists&catid=23">More</a></div>
      <ol>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ca162cb82a54b5e05c582c1b0b37f1c6&action=lists&catid=23&order=id+DESC&page=%24page&moreinfo=1&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'23','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'23','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
	<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
      	<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ol>
    </div>
    <div class="subright">
      <h4>劳动法规<span>Labour Laws</span></h4>
      <div class="more"><span>.........................</span><a href="index.php?m=content&c=index&a=lists&catid=47">More</a></div>
      <ol>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a8578c5b49b3b0261681ed0a9299bf7c&action=lists&catid=47&order=id+DESC&page=%24page&moreinfo=1&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'47','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'47','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
	<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
      	<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ol>
    </div>
    <h4>友情链接<span>Links</span></h4>
    <div class="more"><span>..................................................................................................</span><a href="index.php?m=content&c=index&a=lists&catid=26">More</a></div>
    <dl class="linklist">
	    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=274750ae87f3b000334b2eeb6e2a35bc&action=type_lists&listorder=desc&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_lists')) {$data = $link_tag->type_lists(array('listorder'=>'desc','siteid'=>$siteid,'limit'=>'20',));}?>  
        <?php $n=1;if(is_array($data)) foreach($data AS $type_v) { ?>  
           <dt><?php echo $type_v['name'];?></dt><dd>
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=f08f52d48d606157c4805055a065c78d&action=type_list&siteid=%24siteid&typeid=%24type_v%5Btypeid%5D&order=listorder+DESC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>$type_v[typeid],'order'=>'listorder DESC','limit'=>'20',));}?>
           <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?> 
           <a href="<?php echo $v['url'];?>"><?php echo $v['name'];?></a>
           <?php $n++;}unset($n); ?>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           </dd>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </dl>
  </div>
  <div class="sidebar" id="sidebar-left">
    <div id="close1" class="close">X</div>
    <div class="sbg"><a href="#"><img src="<?php echo CSS_PATH;?>fh/img/contact3.jpg" alt=""></a></div>
  </div>

  <div class="sidebar" id="sidebar-right">
    <div id="close2" class="close">X</div>
    <div class="sbg"><a href="#"><img src="<?php echo CSS_PATH;?>fh/img/contact3.jpg" alt=""></a></div>
  </div>
</div>
  
<script type="text/javascript" src="//ajax.microsoft.com/ajax/jquery/jquery-1.11.3.min.js"></script>
<script async="async" type="text/javascript" src="<?php echo CSS_PATH;?>fh/js/chocoslider.js"></script>
<script type="text/javascript">
  var action = function(){
      this.timer = null;  
    
  }
  action.prototype.startMove = function(option){
      var that = this;
      var oDiv=document.getElementById(option.obj);
      clearInterval(that.timer);
      that.timer=setInterval(function(){
          var speed=(option.iTarget-oDiv.offsetTop)/6;
          var speed=speed>0?Math.ceil(speed):Math.floor(speed);
          //Math.ceil 向上取整 会取跟这个数最接近，且比这个数大的一个整数；Math.floor 向下取整  会取跟这个数最接近，且比这个数小的一个整数
          if(oDiv.offsetTop==option.iTarget)
          {
            clearInterval(that.timer);
          }
          else
          {
            oDiv.style.top=oDiv.offsetTop+speed-25+'px';
          }
          
        },30);
    }


var a = new action();
var b = new action();
var load=window.onload;

window.onload=function(){
  var close1=document.getElementById('close1');
  var close2=document.getElementById('close2');
  var left=document.getElementById('sidebar-left');
  var right=document.getElementById('sidebar-right');
  close1.onclick=function(){
    left.style.display='none';
  };
    close2.onclick=function(){
    right.style.display='none';
  };
};

 window.onscroll=function()
 {
  
  var oDiv1=document.getElementById('sidebar-left');
  var oDiv2=document.getElementById('sidebar-right');
  var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
  //scrollTop:设置或获取位于对象最顶端和窗口中可见内容的最顶端之间的距离 
  
  //oDiv.style.top=document.documentElement.clientHeight-oDiv.offsetHeight+scrollTop+'px';
  
  // startMove1('sidebar-left',document.documentElement.clientHeight-oDiv1.offsetHeight+scrollTop);
  a.startMove({'obj':'sidebar-left','iTarget':document.documentElement.clientHeight-oDiv1.offsetHeight+scrollTop});
  b.startMove({'obj':'sidebar-right','iTarget':document.documentElement.clientHeight-oDiv2.offsetHeight+scrollTop});
  // startMove2('sidebar-right',documentElementcument.documentElement.clientHeight-oDiv2.offsetHeight+scrollTop,timer2);

 };


</script>
<?php include template("content","footer"); ?>