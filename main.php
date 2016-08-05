<?php
$mres = mysql_query("select id,title,pic from `tg_jiaju` where type='ssjj' and is_pic=1 order by time desc limit 5");
?>
<div class="row01 clearfix">
<div class="left">
    <div class="focus">
        <div class="focusPic" id="chinaFocusPic">
            <?php while($mrow=mysql_fetch_assoc($mres)){ ?>
            <div class="photoAlbum_item">
                <div class="photoAlbum_item_pic">
                    <a href="./show.php?id=<?php echo $mrow['id']?>"  target='_blank'><img border='0' src='<?php echo $mrow['pic']?>'   width='50' height='70'  alt='<?php echo $mrow['title']?>'></a>
                </div>
                <div class="photoAlbum_item_txt">
                    <a href="./show.php?id=<?php echo $mrow['id']?>"  target='_blank'><?php echo $mrow['title']?></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="focusLine"></div>
        <div class="focusFont" id="chinaFocusFont"></div>
        <div class="focusCount" id="chinaFocusCount"></div>
	  </div>
		<!-- /focus -->
    </div>
    <div class="mid">
      <div class="headline">
        <div class="focusTopic">
  <h2 class="focusTopic_tit"><a href='./show.php?id=3951' target=_blank >经典二室二厅装修 展示年轻人的时代感</a></h2>
  <div class="focusTopic_txt">[<a href="./show.php?id=3952" target=_blank> 10万搞定130平米靓家 实在太超值了

</a>]</br>
[<a href="./show.php?id=3942" target=_blank> 客厅挂钟禁忌|客厅挂钟风水

</a>]
</div>
</div><div class="focusTopic">
  <h2 class="focusTopic_tit"><a href="./show.php?id=3939" target=_blank >楠木家具的优缺点 楠木家具市场价格</a></h2>
  <div class="focusTopic_txt">[<a href="./show.php?id=3946" target=_blank> 柔然壁纸怎么样 柔然壁纸介绍</a>]</br>
[<a href="./show.php?id=3931" target="_blank">乌金木家具有哪些优缺点</a>]
</div>
</div><div class="focusTopic">
  <h2 class="focusTopic_tit"><a href="./show.php?id=3945" target="_blank" >磁疗床垫副作用 磁疗床垫价格</a></h2>
  <div class="focusTopic_txt">[<a href="./show.php?id=3937" target="_blank"> 胡桃木家具怎么样,胡桃木家具的优缺点

</a>]</br>
[<a href="./show.php?id=3941" target=_blank>针织棉和纯棉的区别 针织棉和纯棉哪个好

</a>]
</div>
</div>
        <div class="newslist">
          <ul>
            <li><a href='./show.php?id=1152'  target='_blank' class='title_default'>时间还可以这样看 荐13款好玩创意钟饰</a></li>
            <li><a href='./show.php?id=1153'  target='_blank' class='title_default'>春季好养花 12款创意花盆造福城市花农</a></li>
            <li><a href='./show.php?id=1154'  target='_blank' class='title_default'>夏日萌翻你的家 荐12款童趣创意家品</a></li>
            <li><a href='./show.php?id=1155'  target='_blank' class='title_default'>贴心实用之选 热荐12款父亲节创意礼品</a></li>
            <li><a href='./show.php?id=1156'  target='_blank' class='title_default'>懒人最爱的神器！荐12款创意厨房用品</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="mod exclusive">
        <div class="modhd">
          <h3>家装风水</h3>
          <div class="more"><a href="./list.php?type=jzfs" target="_blank">更多</a></div>
        </div>
        <div class="modbd">

		  <ul>
            <li><a href='./show.php?id=1131'  target='_blank' class='title_default'>尽显尊贵奢华 大理石电视背景墙装修</a></li>
            <li><a href='./show.php?id=1132'  target='_blank' >打造家居好风水 电视背景墙风水有讲究</a></li>
            <li><a href='./show.php?id=1133'  target='_blank'>装修设计知识 厨房风水很致命</a></li>
            <li><a href='./show.php?id=1134'  target='_blank'>厨房装饰 让你吃出好运来</a></li>
          </ul>
        </div>
        <div class="modft"></div>
      </div>
      <div class="mod spa">
        <div class="modhd">
          <h3>装修日记</h3>
          <div class="more"><a href="./list.php?type=zxrj" target="_blank">更多</a></div>
        </div>
        <div class="modbd">
		<ul>
            <li><a href='./show.php?id=1142'  target='_blank' >打造清爽简约三口之家【进入油漆季】</a></li>
            <li><a href='./show.php?id=1143'  target='_blank'>燃气热水器的位置及阀门位置的安装</a></li>
            <li><a href='./show.php?id=1144'  target='_blank'>姐是打不死的小强！姐要越挫越勇！</a></li>
            <li><a href='./show.php?id=1145'  target='_blank'>淡淡中国风——装修完结</a></li>
          </ul>
        </div>
      </div>
      <div class="mod clubEvents">
        <div class="modhd">
          <h3>创意家居</h3>
          <div class="more"><a href="./list.php?type=cyjj" target="_blank">更多</a></div>
        </div>
        <div class="modbd">
          <div class="misc">
		  	<div class="photoAlbum_item">
            <div class="photoAlbum_item_pic">
                <a href="./show.php?id=1152"  target='_blank'>
                    <img border='0' src=http://www.homehome.com.cn/statics/images/17745449_806270.jpg width="209" height="89" alt='床头背景设计成就你的完美卧室'>
                </a>
            </div>
            <div class="photoAlbum_item_txt"><a href="./show.php?id=1153"  target='_blank'>春季好养花 12款创意花盆造福城市花农</a></div>
        </div>
		  </div>
		  <ul>
            <li><a href='./show.php?id=1154'  target='_blank' class='title_default'>夏日萌翻你的家 荐12款童趣创意家品</a></li>
            <li><a href='./show.php?id=1155'  target='_blank' class='title_default'>贴心实用之选 热荐12款父亲节创意礼品</a></li>
            <li><a href='./show.php?id=1156'  target='_blank' class='title_default'>懒人最爱的神器！荐12款创意厨房用品</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>

  <div class="row02">
    <div class="rowhd">
      <h2>家装美图</h2>
      <div class="more"><a href="./list.php?type=ssjj" target="_blank">更多</a></div>
    </div>
       <div class="photoAlbum">
          <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=3951"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015110703783.jpg'   width='50' height='70'  alt='经典二室二厅装修 展示年轻人的时代感'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=3951"  target='_blank'>经典二室二厅装修 展示年轻人的时代感</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=3952"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015110549276.jpg'   width='50' height='70'  alt='10万搞定130平米靓家 实在太超值了'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=3952"  target='_blank'>10万搞定130平米靓家 实在太超值了</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=3942"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2014/0903/20140903072858117.jpg'   width='50' height='70'  alt='80后小青年的青睐 4万3打造35平方小户型'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=3942"  target='_blank'>客厅挂钟禁忌|客厅挂钟风水</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=3939"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2014/0903/20140903073127106.jpg'   width='50' height='70'  alt='你的最佳选择 11万搞定现代简约风90平2居室'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=3939"  target='_blank'>楠木家具的优缺点 楠木家具市场价格</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=3949"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1112/20131112012808792.jpg'   width='50' height='70'  alt='两套60平奢华公寓装修 享自在单身生活'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=3949"  target='_blank'>3万5装82平家不费劲 结婚新房赏析</a></div></div>
       </div>
      </div>

  <div class="row03 clearfix">
    <div class="rowhd">
      <h2>装修宝典</h2>
      <div class="more"><a href="list.php?type=jzfs" target="_blank">更多</a></div>
    </div>
    <div class="left">
          <div class="photoAlbum">
      	         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=1135"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102303349.jpg'   width='50' height='70'  alt='卧室风水 10条宜忌保卫婚姻'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=1135"  target='_blank'>卧室风水 10条宜忌保卫婚姻</a></div></div>

                 <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=1136"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102204813.jpg'   width='50' height='70'  alt='春季装修正当时 10条家居风水布置'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=1136"  target='_blank'>春季装修正当时 10条家居风水布置</a></div></div>

                 <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=1137"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102113623.jpg'   width='50' height='70'  alt='家居风水达人 蛇年催财招官运'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=1137"  target='_blank'>家居风水达人 蛇年催财招官运</a></div></div>
                 <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="./show.php?id=1138"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102005598.jpg'   width='50' height='70'  alt='卧室风水 专家教你装修后摆好卧室床'></a></div><div class="photoAlbum_item_txt"><a href="./show.php?id=1138"  target='_blank'>卧室风水 专家教你装修后摆好卧室床</a></div></div>
              </div>
        </div>
    <div class="mid">
      <div class="mod fashion">
        <div class="modhd">
          <h3>时尚前沿</h3>
          <div class="more"><a href="./list.php?type=ssjj" target="_blank">更多</a></div>
        </div>
        <div class="modbd newslist">
                  <ul>
          		  <li><a href='./show.php?id=3928'  target='_blank' class='title_default'>电脑自动关机是什么原因</a></li>
          		  <li><a href='./show.php?id=3929'  target='_blank' class='title_default'>榆木家具好吗？榆木家具的优缺点</a></li>
          		  <li><a href='./show.php?id=3930'  target='_blank' class='title_default'>空气能热水器的优缺点</a></li>
          		  <li><a href='./show.php?id=3931'  target='_blank' class='title_default'>乌金木家具有哪些优缺点</a></li>
          		  <li><a href='./show.php?id=3932'  target='_blank' class='title_default'>【玫瑰茄】玫瑰茄是什么,玫瑰茄的作</a></li>
                <li class="hr"></li>          		  
                <li><a href='./show.php?id=3933'  target='_blank' class='title_default'>楸木家具的优缺点是什么？</a></li>
          		  <li><a href='./show.php?id=3934'  target='_blank' class='title_default'>光波炉的危害 光波炉的使用方法</a></li>
          		  <li><a href='./show.php?id=3935'  target='_blank' class='title_default'>豆浆机致癌吗</a></li>
          		  <li><a href='./show.php?id=3936'  target='_blank' class='title_default'>柏木家具好不好 柏木家具的优缺点</a></li>
          		  <li><a href='./show.php?id=3937'  target='_blank' class='title_default'>胡桃木家具怎么样,胡桃木家具的优缺</a></li>
          <li class="hr"></li>                    </ul> 
                 
        </div>
      </div>
    </div>
    <div class="right">
      <div class="mod future">
        <div class="modhd">
          <h3>家装风水</h3>
          <div class="more"><a href="./list.php?type=jzfs" target="_blank">更多</a></div>
        </div>
        <div class="modbd">
          <div class="focusTopic">
          
            <div class="focusTopic">
	<div class="focusTopic_pic">
			<a href="./show.php?id=1133" target="_blank"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015102913582.jpg" alt="装修设计知识 厨房风水很致命" height="88" width="125" /></a>
	</div>
	<div class="focusTopic_cont">
		
		<div class="focusTopic_tit">
			<a href="./show.php?id=1133" target=_blank >装修设计知识 厨房风</a>
		</div>
		<div class="focusTopic_txt">
			<a href="./show.php?id=1133" target="_blank">装修设计知识 厨房风水很致命</a><a href="./show.php?id=1133" target="_blank"><span class="moreLnk">详细</span></a>
		</div>
		
	</div>
</div>
          </div>
          <div class="newslist">
                    <ul>
                              <li><a href='./show.php?id=1130'  target='_blank' class='title_default'>新房装修的17条风水禁忌 2013年最</a></li>
                              <li><a href='./show.php?id=1131'  target='_blank' class='title_default'>尽显尊贵奢华 大理石电视背景墙装修</a></li>
                        </ul>
                    </div>
        </div>
      </div>
      <div class="mod knowledge">
        <div class="modhd">
          <h3>装修知识</h3>
          <div class="more"><a href="list.php?type=zxzs" target="_blank">更多</a></div>
        </div>
        <div class="modbd newslist">
                    <ul>
		  		  <li><a href='./show.php?id=1121'  target='_blank' class='title_default'>接触油烟患肺癌？ 减少厨房油烟妙招</a></li>
                    		  <li><a href='./show.php?id=1122'  target='_blank' class='title_default'>装修程序——各工种进场施工(1)</a></li>
                    		  <li><a href='./show.php?id=1123'  target='_blank' class='title_default'>装修程序——装修初体验(1)</a></li>
                              </ul>
                  </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="ch_cht_4"><img src="http://www.homehome.com.cn/statics/images/anxin.jpg" width="950" height="90" /></div>
  <div class="row05 clearfix">
    <div class="rowhd">
      <h2>家装设计</h2>
      <div class="more"><a href="./list.php?type=sheji" target="_blank">更多</a></div>
    </div>
    <div class="sjcon">
    	<div class="left_sjc">
        	<h1>设计师<span><a href="./list.php?type=sjs" target="_blank" title="">更多>></a></span></h1>
            <ul class="piclist">
            	  <li style="padding-left:0;"><a href="./show.php?id=1310" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/shunlei.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1310" target="_blank" title="">孙蕾</a></li>
                <li><a href="./show.php?id=1311" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/shijianmin.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1311" target="_blank" title="">施建民</a></li>
                <li><a href="./show.php?id=1304" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/zhengweiping.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1304" target="_blank" title="">曾卫平</a></li>
                <li><a href="./show.php?id=1313" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/hanjiaxing.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1313" target="_blank" title="">韩加兴</a></li>
                <li style="padding-left:0;"><a href="./show.php?id=1314" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/liangyunfei.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1314" target="_blank" title="">梁云飞</a></li>
                <li><a href="./show.php?id=1316" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/wangkaifang.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1316" target="_blank" title="">王开方</a></li>
                <li><a href="./show.php?id=1317" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/xinjun.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1317" target="_blank" title="">辛军</a></li>
                <li><a href="./show.php?id=1318" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/liwenbin.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="./show.php?id=1318" target="_blank" title="">李文彬</a></li>
            </ul>
            <div class="clear"></div>
            <ul class="zilist">
            	<li><a href="./show.php?id=1310" target="_blank" title="">孙蕾：创业让我懂得“大爱”</a></li>
                <li><a href="./show.php?id=1311" target="_blank" title="">施建民：与中国室内设计共成长</a></li>
                <li><a href="./show.php?id=1304" target="_blank" title="">曾卫平：做中国室内商业设计的推动者</a></li>
                <li><a href="./show.php?id=1313" target="_blank" title="">韩加兴：设计需要有态度</a></li>
            </ul>
            <div class="clear"></div>
            <h1>业内动态<span><a href="./list.php?type=yndt" title="">更多>></a></span></h1>
             <ul class="zilist">
            	<li><a href="./show.php?id=1301" target="_blank" title="">第二届全国建筑装饰科技大会11月举办</a></li>
                <li><a href="./show.php?id=1297" target="_blank" title="">“设计之都 智慧城市”国际设计开幕</a></li>
                <li><a href="./show.php?id=1300" target="_blank" title="">引爆杭州思想热潮 6大设计师联袂解读</a></li>
                <li><a href="1299" target="_blank" title="">石家庄艺术与设计论坛讲座首度开讲</a></li>
            </ul>
        </div>
        <div class="mid_sjc">
        	<h1>设计案例<span><a href="./list.php?type=sjal" target="_blank" title="">更多>></a></span></h1>
            <div class="con_msjc">
            	<div class="left_cmsjc">
                	<a href="./show.php?id=1161" target="_blank" title=""><img src="http://www.homehome.com.cn/uploadfile/2014/0117/20140117020320508.jpg" width="150" height="110" alt="" title="" /></a><br /><a href="./show.php?id=1161" target="_blank" title="">灰色搭米色 装出大家风范三居室设计</a>
                </div>
                <div class="right_cmsjc">
                	<ul>
                    	<li><a href="./show.php?id=1162" target="_blank" title="">女生SHOWTIME 8个温柔浪漫小卧室设计</a></li>
                        <li><a href="./show.php?id=1163" target="_blank" title="">隔断有技巧 7个卫浴间设计可取细节</a></li>
                        <li><a href="./show.php?id=1164" target="_blank" title="">时尚与个性兼顾 澳洲古典大户型设计</a></li>
                        <li><a href="./show.php?id=1165" target="_blank" title="">收纳大空间为王 2套现代简约家居设计</a></li>
                        <li><a href="./show.php?id=1166" target="_blank" title="">拓展狭长空间 瑞典时尚阁楼公寓设计</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div class="down">
            <?php $rsj=mysql_query("select id,title from `tg_jiaju` where type='sjal' limit 5,14");?>
            	<ul>
                    <?php while($sjrow=mysql_fetch_assoc($rsj)){ ?>
                    <li style="overflow:hidden;"><a href="./show.php?id=<?php echo $sjrow['id'] ?>" target="_blank" title=""><?php echo $sjrow['title'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="right_sjc">
        	<h1>设计攻略<span><a href="list.php?type=sjgl" target="_blank" title="">更多>></a></span></h1>
            <a href="./show.php?id=1200" target="_blank" title=""><img src="http://www.homehome.com.cn/uploadfile/2013/1223/20131223042605168.jpg" width="215" height="135" alt="" title="" /></a><br /><a href="./show.php?id=1200" target="_blank" title="">强大空间利用率 不规则户型惊艳改造</a>
            <div class="clear"></div>
            <a href="./show.php?id=1199" target="_blank" title=""><img src="http://www.homehome.com.cn/uploadfile/2013/1223/20131223042736543.jpg" width="215" height="135" alt="" title="" /></a><br /><a href="./show.php?id=1199" target="_blank" title="">阁楼小空间巧利用 仓库变身复式公寓</a>
        </div>
    </div>
  </div>
  
  <div class="ad"><img src="http://www.homehome.com.cn/statics/images/daziran.jpg" width="950" height="90" alt="" title="" /></div>
