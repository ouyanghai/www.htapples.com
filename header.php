<?php
//$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
//mysql_select_db("web",$command);
$command = mysql_connect("192.168.1.122","admin","admin") or die("mysql connect error!");
mysql_select_db("haodianpu",$command);
mysql_query("set names 'utf8'");
$ftype = array(
    'jryw'=>'今日要闻',
    'hyfocus'=>'行业聚焦',
    'qydt'=>'企业动态',
    'zxzs'=>'装修知识',
    'jzfs'=>'家装风水',
    'zxrj'=>'装修日记',
    'cyjj'=>'创意家居',
    'sjal'=>'设计案例',
    'sjgl'=>'设计攻略',
    'ssjj'=>'时尚家居',
    'sjs'=>'设计师',
    'yndt'=>'业内动态',
    'weiyu'=>'卫浴',
    'taoci'=>'陶瓷',
    'jiaju'=>'家居',
    'diban'=>'地板',
    'jiafang'=>'家纺',
    'menchuang'=>'门窗',
    'cainuan'=>'采暖',
    'zhaoming'=>'照明',
    'qiangmian'=>'墙面',
    'chugui'=>'橱柜',
    'tuliao'=>'涂料',
    'bizhi'=>'壁纸'
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="ck 9794" />
<title>万家网_中国家居行业资讯第一门户网站</title>
<meta name="keywords" content="万家网,装修,装饰,家居,家居网站,装修设计,室内装修,房屋装修,家具,建材,家电,软装,装修公司">
<meta name="description" content="万家网为泛家居行业人士提供新闻资讯、行业动态、家居风水、家居装修装饰等信息，是泛家居人士必备家居网站。">
<link rel="stylesheet" type="text/css" href="http://www.homehome.com.cn/statics/css/channelheader950.css">
<link href="http://www.homehome.com.cn/statics/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://www.homehome.com.cn/statics/css/zhuangxiu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://www.homehome.com.cn/statics/js/focus.min.js"></script>
<!-- START WRating v1.0 -->
<script type="text/javascript" src="http://www.homehome.com.cn/statics/js/a1.js"></script>
<script type="text/javascript" src="http://www.homehome.com.cn/statics/js/chinaadclient.js" charset="utf-8"></script>
<script language="JavaScript" type="text/javascript" src="http://www.homehome.com.cn/statics/js/channelheader.js"></script>
<!-- END WRating v1.0 -->
<style type="text/css">
.tt_nav{
    margin-left:30px;
}
.rowhd h2{
    width:100px;
}
</style>
</head>

<body>


<div class="container">

    <div id="uup">
    	  <div class="logo"><a href="http://www.htapples.com" target="_blank" title=""><img src="./images/logo.png" width="147" height="72" alt="" title="" /></a></div>
      <div class="rightlogo"><img src="http://www.homehome.com.cn/statics/images/haolaike.jpg" width="790" height="70"  /></div>
    </div>
    <div class="clear"></div>
    <div id="headnav">
    	<div id="leftnav"></div>
        <div id="nav">
            <div class="tt_nav" style="margin-left:10px">
                <p><a href="./index.php"><img src="./images/shouye.png" width="21" height="41" alt="" title="" /></a></p>
            </div>
        	<div class="tt_nav">
            	<p><img src="http://www.homehome.com.cn/statics/images/nav1.png" width="21" height="41" alt="" title="" /></p>
            </div>
            <ul style="width:120px;">
            	<li><a href="./list.php?type=jryw" target="_blank" title="">今日要闻</a></li>
                <li><a href="./list.php?type=hyfocus" target="_blank" title="">行业聚焦</a></li>
                <li><a href="./list.php?type=qydt" target="_blank" title="">企业动态</a></li>
                <li><a href="./list.php?type=jiafang" target="_blank" title="">精致家纺</a></li>
            </ul>
            <div class="tt_nav">
            	<p><img src="http://www.homehome.com.cn/statics/images/nav2.png" width="21" height="41" alt="" title="" /></p>
            </div>
            <ul style="width:180px;">
            	<li><a href="./list.php?type=zxzs" target="_blank" title="">装修知识</a></li>
                <li><a href="./list.php?type=jzfs" target="_blank" title="">家装风水</a></li>
                <li><a href="./list.php?type=ssjj" target="_blank" title="">时尚家居</a></li>
                <li><a href="./list.php?type=zxrj" target="_blank" title="">装修日记</a></li>
                <li><a href="./list.php?type=cyjj" target="_blank" title="">创意家居</a></li>
                <li><a href="./list.php?type=weiyu" target="_blank" title="">厨房卫浴</a></li>
            </ul>
            <div class="tt_nav">
            	<p><img src="http://www.homehome.com.cn/statics/images/nav3.png" width="21" height="41" alt="" title="" /></p>
            </div>
            <ul style="width:90px;">
            	<li><a href="./list.php?type=sjal" target="_blank" title="">案例</a></li>
                <li><a href="./list.php?type=sjgl" target="_blank" title="">攻&nbsp;&nbsp;略</a></li>
                <li><a href="./list.php?type=yndt" target="_blank" title="">动态</a></li>
                <li><a href="./list.php?type=sjs" target="_blank" title="">设计师</a></li>
            </ul>
            <div class="tt_nav">
            	<p><img src="http://www.homehome.com.cn/statics/images/nav4.png" width="21" height="41" alt="" title="" /></p>
            </div>
            <ul style="width:210px;">
            	<li><a href="./list.php?type=weiyu" target="_blank" title="">卫浴</a></li>
                <li><a href="./list.php?type=taoci" target="_blank" title="">陶瓷</a></li>
                <li><a href="./list.php?type=jiaju" target="_blank" title="">家具</a></li>
                <li><a href="./list.php?type=diban" target="_blank" title="">地板</a></li>
                <li><a href="./list.php?type=jiafang" target="_blank" title="">家纺</a></li>
                <li><a href="./list.php?type=menchuang" target="_blank" title="">门窗</a></li>
                <li><a href="./list.php?type=cainuan" target="_blank" title="">采暖</a></li>
                <li><a href="./list.php?type=zhaoming" target="_blank" title="">照明</a></li>
                <li><a href="./list.php?type=qiangmian" target="_blank" title="">墙面</a></li>
                <li><a href="./list.php?type=chugui" target="_blank" title="">橱柜</a></li>
                <li><a href="./list.php?type=tuliao" target="_blank" title="">涂料</a></li>
                <li><a href="./list.php?type=bizhi" target="_blank" title="">壁纸</a></li>
            </ul>
        </div>
        <div id="rightnav"></div>
    </div> 