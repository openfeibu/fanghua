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
    <div id="map_pic">
      <img src="<?php echo CSS_PATH;?>fh/img/map.png" alt="">
    </div>
 	<h2><?php echo $catname;?></h2>
    <div class="subleft contact">	
	   	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d4be0815ba6de24b97c607a2bc28befe&sql=SELECT+%2A+FROM+v9_page+where+catid%3D41\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=41 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
		<h3><?php echo $val['title'];?></h3>

        	<?php echo $val['content'];?>

		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
    </div>
    <div class="subright contact">
      	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ddf029a2da825c86714d3c18d863fe82&sql=SELECT+%2A+FROM+v9_page+where+catid%3D42\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=42 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
		<h3><?php echo $val['title'];?></h3>

        	<?php echo $val['content'];?>

		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
    </div>
    <div class="subleft contact">
      	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b4911d539c16e3ec97f69b0feee215bd&sql=SELECT+%2A+FROM+v9_page+where+catid%3D43\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=43 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
		<h3><?php echo $val['title'];?></h3>

        	<?php echo $val['content'];?>

		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
    </div>
    <!--<div class="subright contact">
      <h3>示例内容</h3>
      <dl>
        <dt>示例内容</dt>
        <dd>www.aaa.com</dd>
      </dl>
    </div>-->
    <div id="map">	
      	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aab54280a7bebe64efc2bdd363b379a1&sql=SELECT+%2A+FROM+v9_page+where+catid%3D44\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=44 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
		<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
		<?php echo $val['content'];?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <div id="mapbox">
      </div>
	  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=E3a31095f675532dffe9ea6c88f28fad"></script>
	  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("mapbox"); 
      map.centerAndZoom(new BMap.Point(113.389145,23.105945),15);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"中国广东省广州市海珠区新港东路琶洲新村11栋8楼",title:"广东芳华律师事务所",imageOffset: {width:-46,height:-21},position:{lat:23.104813,lng:113.388913}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:0});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>
    </div>
  </div>
</div>
<?php include template("content","footer"); ?>
