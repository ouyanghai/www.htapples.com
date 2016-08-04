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
  <h2 class="focusTopic_tit"><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110558.html' target=_blank >经典二室二厅装修 展示年轻人的时代感</a></h2>
  <div class="focusTopic_txt">[<a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110426.html" target=_blank> 10万搞定130平米靓家 实在太超值了

</a>]</br>
[<a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110230.html" target=_blank> 80后小青年的青睐 4万3打造35平方小户型

</a>]
</div>
</div><div class="focusTopic">
  <h2 class="focusTopic_tit"><a href=http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105448.html target=_blank >12万装修125平家 网友打造简约样板房</a></h2>
  <div class="focusTopic_txt">[<a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105448.html" target=_blank> 我爱我家 5万5打造60平小户型</a>]</br>
[<a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105235.html" target=_blank>24万搞定106平三室 网友打造心中的BMW</a>]
</div>
</div><div class="focusTopic">
  <h2 class="focusTopic_tit"><a href=http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105148.html target=_blank >小户型装修 10万打造60平简约风格家</a></h2>
  <div class="focusTopic_txt">[<a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105042.html" target=_blank> 美女15万家居装修DIY 70平地中海风格家

</a>]</br>
[<a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/104904.html" target=_blank>80后的高调奢华 30万打造130平三室两厅

</a>]
</div>
</div>
        <div class="newslist">
          <ul>
            <li><a href='/zhuangxiu/cyjj/2013/1015/163700.html'  target='_blank' class='title_default'>时间还可以这样看 荐13款好玩创意钟饰</a></li><li><a href='/zhuangxiu/cyjj/2013/1015/163632.html'  target='_blank' class='title_default'>春季好养花 12款创意花盆造福城市花农</a></li><li><a href='/zhuangxiu/cyjj/2013/1015/163555.html'  target='_blank' class='title_default'>夏日萌翻你的家 荐12款童趣创意家品</a></li><li><a href='/zhuangxiu/cyjj/2013/1015/163528.html'  target='_blank' class='title_default'>贴心实用之选 热荐12款父亲节创意礼品</a></li><li><a href='/zhuangxiu/cyjj/2013/1015/163433.html'  target='_blank' class='title_default'>懒人最爱的神器！荐12款创意厨房用品</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="mod exclusive">
        <div class="modhd">
          <h3>家装风水</h3>
          <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/" target="_blank">更多</a></div>
        </div>
        <div class="modbd">

		  <ul>
            <li><a href='/jzfs/2013/1015/103220.html'  target='_blank' class='title_default'>尽显尊贵奢华 大理石电视背景墙装修</a></li><li><a href=http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/103150.html target=_blank >打造家居好风水 电视背景墙风水有讲究</a></li><li><a href=http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102818.html target=_blank >装修设计知识 厨房风水很致命</a></li><li><a href=http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102312.html target=_blank >厨房装饰 让你吃出好运来</a></li>
          </ul>
        </div>
        <div class="modft"></div>
      </div>
      <div class="mod spa">
        <div class="modhd">
          <h3>装修日记</h3>
          <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/zxrj/" target="_blank">更多</a></div>
        </div>
        <div class="modbd">
		<ul>
            <li><a href=http://www.homehome.com.cn/zhuangxiu/zxrj/2013/1015/173303.html target=_blank >打造清爽简约三口之家【进入油漆季】</a></li><li><a href=http://www.homehome.com.cn/zhuangxiu/zxrj/2013/1015/173227.html target=_blank >燃气热水器的位置及阀门位置的安装</a></li><li><a href=http://www.homehome.com.cn/zhuangxiu/zxrj/2013/1015/173206.html target=_blank >姐是打不死的小强！姐要越挫越勇！</a></li><li><a href=http://www.homehome.com.cn/zhuangxiu/zxrj/2013/1015/172907.html target=_blank >淡淡中国风——装修完结</a></li>
          </ul>
        </div>
      </div>
      <div class="mod clubEvents">
        <div class="modhd">
          <h3>创意家居</h3>
          <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/cyjj/" target="_blank">更多</a></div>
        </div>
        <div class="modbd">
          <div class="misc">
		  	<div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/cyjj/2013/1015/163700.html"  target='_blank'><img border='0' src=http://www.homehome.com.cn/statics/images/17745449_806270.jpg width="209" height="89" alt='床头背景设计成就你的完美卧室'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/cyjj/2013/1015/163632.html"  target='_blank'>春季好养花 12款创意花盆造福城市花农</a></div></div>
		  </div>
		  <ul>
            <li><a href='/hd/lt/11093438/20130418/17785849.html'  target='_blank' class='title_default'>高锐地产2013年北京春展海外展区独占鳌头</a></li><li><a href='/dg/wy/11092606/20130407/17764669.html'  target='_blank' class='title_default'>如何选购安全的淋浴房 注意细节不吃亏</a></li><li><a href='/stj/jd/11093440/20130407/17764594.html'  target='_blank' class='title_default'>84平二手房的第二春 电影人生</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>

  <div class="row02">
    <div class="rowhd">
      <h2>家装美图</h2>
      <div class="more"><a href="http://www.homehome.com.cn/index.php?m=content&c=index&a=lists&catid=54" target="_blank">更多</a></div>
    </div>
       <div class="photoAlbum">
          <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110558.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015110703783.jpg'   width='50' height='70'  alt='经典二室二厅装修 展示年轻人的时代感'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110558.html"  target='_blank'>经典二室二厅装修 展示年轻人的时代感</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110426.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015110549276.jpg'   width='50' height='70'  alt='10万搞定130平米靓家 实在太超值了'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110426.html"  target='_blank'>10万搞定130平米靓家 实在太超值了</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110230.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015110418678.jpg'   width='50' height='70'  alt='80后小青年的青睐 4万3打造35平方小户型'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/110230.html"  target='_blank'>80后小青年的青睐 4万3打造35平方小户型</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105637.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015110226577.jpg'   width='50' height='70'  alt='你的最佳选择 11万搞定现代简约风90平2居室'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/105637.html"  target='_blank'>你的最佳选择 11万搞定现代简约风90平2居室</a></div></div>
         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/104716.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015104856910.jpg'   width='50' height='70'  alt='两套60平奢华公寓装修 享自在单身生活'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/2013/1015/104716.html"  target='_blank'>两套60平奢华公寓装修 享自在单身生活</a></div></div>
       </div>
      </div>

  <div class="row03 clearfix">
    <div class="rowhd">
      <h2>装修宝典</h2>
      <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/" target="_blank">更多</a></div>
    </div>
    <div class="left">
          <div class="photoAlbum">
      	         <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102211.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102303349.jpg'   width='50' height='70'  alt='卧室风水 10条宜忌保卫婚姻'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102211.html"  target='_blank'>卧室风水 10条宜忌保卫婚姻</a></div></div>
                 <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102120.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102204813.jpg'   width='50' height='70'  alt='春季装修正当时 10条家居风水布置'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102120.html"  target='_blank'>春季装修正当时 10条家居风水布置</a></div></div>
                 <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102011.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102113623.jpg'   width='50' height='70'  alt='家居风水达人 蛇年催财招官运'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102011.html"  target='_blank'>家居风水达人 蛇年催财招官运</a></div></div>
                 <div class="photoAlbum_item"><div class="photoAlbum_item_pic"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/101923.html"  target='_blank'><img border='0' src='http://www.homehome.com.cn/uploadfile/2013/1015/20131015102005598.jpg'   width='50' height='70'  alt='卧室风水 专家教你装修后摆好卧室床'></a></div><div class="photoAlbum_item_txt"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/101923.html"  target='_blank'>卧室风水 专家教你装修后摆好卧室床</a></div></div>
              </div>
        </div>
    <div class="mid">
      <div class="mod fashion">
        <div class="modhd">
          <h3>时尚前沿</h3>
          <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/ssjj/" target="_blank">更多</a></div>
        </div>
        <div class="modbd newslist">
                  <ul>
          		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193847.html'  target='_blank' class='title_default'>电脑自动关机是什么原因</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193758.html'  target='_blank' class='title_default'>榆木家具好吗？榆木家具的优缺点</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193727.html'  target='_blank' class='title_default'>空气能热水器的优缺点</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193621.html'  target='_blank' class='title_default'>乌金木家具有哪些优缺点</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193547.html'  target='_blank' class='title_default'>【玫瑰茄】玫瑰茄是什么,玫瑰茄的作</a></li>
          <li class="hr"></li>          		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193520.html'  target='_blank' class='title_default'>楸木家具的优缺点是什么？</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193444.html'  target='_blank' class='title_default'>光波炉的危害 光波炉的使用方法</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193341.html'  target='_blank' class='title_default'>豆浆机致癌吗</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193309.html'  target='_blank' class='title_default'>柏木家具好不好 柏木家具的优缺点</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/ssjj/2014/0903/193211.html'  target='_blank' class='title_default'>胡桃木家具怎么样,胡桃木家具的优缺</a></li>
          <li class="hr"></li>                    </ul> 
                 
        </div>
      </div>
    </div>
    <div class="right">
      <div class="mod future">
        <div class="modhd">
          <h3>家装风水</h3>
          <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/" target="_blank">更多</a></div>
        </div>
        <div class="modbd">
          <div class="focusTopic">
          
            <div class="focusTopic">
	<div class="focusTopic_pic">
			<a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102818.html" target="_blank"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015102913582.jpg" alt="装修设计知识 厨房风水很致命" height="88" width="125" /></a>
	</div>
	<div class="focusTopic_cont">
		
		<div class="focusTopic_tit">
			<a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102818.html" target=_blank >装修设计知识 厨房风</a>
		</div>
		<div class="focusTopic_txt">
			<a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102818.html" target="_blank">装修设计知识 厨房风水很致命</a><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102818.html" target="_blank"><span class="moreLnk">详细</span></a>
		</div>
		
	</div>
</div>
          </div>
          <div class="newslist">
                    <ul>
                              <li><a href='http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1112/133137.html'  target='_blank' class='title_default'>新房装修的17条风水禁忌 2013年最</a></li>
                              <li><a href='http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/103220.html'  target='_blank' class='title_default'>尽显尊贵奢华 大理石电视背景墙装修</a></li>
                        </ul>
                    </div>
        </div>
      </div>
      <div class="mod knowledge">
        <div class="modhd">
          <h3>装修知识</h3>
          <div class="more"><a href="http://www.homehome.com.cn/zhuangxiu/zxzs/" target="_blank">更多</a></div>
        </div>
        <div class="modbd newslist">
                    <ul>
		  		  <li><a href='http://www.homehome.com.cn/zhuangxiu/zxzs/2013/1219/154414.html'  target='_blank' class='title_default'>接触油烟患肺癌？ 减少厨房油烟妙招</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/zxzs/2013/1015/225238.html'  target='_blank' class='title_default'>装修程序——各工种进场施工(1)</a></li>
                    		  <li><a href='http://www.homehome.com.cn/zhuangxiu/zxzs/2013/1015/224426.html'  target='_blank' class='title_default'>装修程序——装修初体验(1)</a></li>
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
      <div class="more"><a href="http://www.homehome.com.cn/sheji/" target="_blank">更多</a></div>
    </div>
    <div class="sjcon">
    	<div class="left_sjc">
        	<h1>设计师<span><a href="http://www.homehome.com.cn/sheji/sjs/" target="_blank" title="">更多>></a></span></h1>
            <ul class="piclist">
            	<li style="padding-left:0;"><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145700.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/shunlei.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">孙蕾</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145636.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/shijianmin.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">施建民</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145604.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/zhengweiping.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">曾卫平</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145524.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/hanjiaxing.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">韩加兴</a></li>
                <li style="padding-left:0;"><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145500.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/liangyunfei.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">梁云飞</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145357.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/wangkaifang.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">王开方</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145335.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/xinjun.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">辛军</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145303.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/liwenbin.jpg" width="50" height="50" alt="" title="" /></a><br /><a href="" target="_blank" title="">李文彬</a></li>
            </ul>
            <div class="clear"></div>
            <ul class="zilist">
            	<li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145700.html" target="_blank" title="">孙蕾：创业让我懂得“大爱”</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145636.html" target="_blank" title="">施建民：与中国室内设计共成长</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145604.html" target="_blank" title="">曾卫平：做中国室内商业设计的推动者</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/sjs/2013/1016/145524.html" target="_blank" title="">韩加兴：设计需要有态度</a></li>
            </ul>
            <div class="clear"></div>
            <h1>业内动态<span><a href="http://www.homehome.com.cn/sheji/yndt/" title="">更多>></a></span></h1>
             <ul class="zilist">
            	<li><a href="http://www.homehome.com.cn/sheji/yndt/2013/1016/154359.html" target="_blank" title="">第二届全国建筑装饰科技大会11月举办</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/yndt/2013/1016/154601.html" target="_blank" title="">“设计之都 智慧城市”国际设计开幕</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/yndt/2013/1016/154424.html" target="_blank" title="">引爆杭州思想热潮 6大设计师联袂解读</a></li>
                <li><a href="http://www.homehome.com.cn/sheji/yndt/2013/1016/154454.html" target="_blank" title="">石家庄艺术与设计论坛讲座首度开讲</a></li>
            </ul>
        </div>
        <div class="mid_sjc">
        	<h1>设计案例<span><a href="http://www.homehome.com.cn/sheji/sjal/" target="_blank" title="">更多>></a></span></h1>
            <div class="con_msjc">
            	<div class="left_cmsjc">
                	<a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161735.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/shejianli.jpg" width="150" height="110" alt="" title="" /></a><br /><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161735.html" target="_blank" title="">245平奢华别墅设计 美式加州风情住宅</a>
                </div>
                <div class="right_cmsjc">
                	<ul>
                    	<li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161645.html" target="_blank" title="">带阁楼的别墅设计 改造空间扩大50㎡</a></li>
                        <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161545.html" target="_blank" title="">120平简约别墅推荐 掌握中式风格装修</a></li>
                        <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161506.html" target="_blank" title="">空间充实饱满 曼哈顿Loft豪华复式公寓</a></li>
                        <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161412.html" target="_blank" title="">清新浪漫韩式 俏美眉设计的90平复式</a></li>
                        <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161330.html" target="_blank" title="">时尚简约样板间 土豪金的复式大空间</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div class="down">
            	<ul>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161249.html" target="_blank" title="">绝对出色设计 44平小屋变豪宅</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161214.html" target="_blank" title="">时尚客厅 17平小户型彩妆后惊艳</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161113.html" target="_blank" title="">16万打造小复式 巧用阁楼空间</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161035.html" target="_blank" title="">155平日式风格设计 让空间升级</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160943.html" target="_blank" title="">180平零隔断设计空间甜美变身</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160825.html" target="_blank" title="">纯白色调185平简欧复式阁楼</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160746.html" target="_blank" title="">北欧风 25万打造140平家居</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160704.html" target="_blank" title="">工薪族15万省装时尚三居室</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160616.html" target="_blank" title="">两居室 150平空间宽敞又大气</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160450.html" target="_blank" title="">8.8万打造轻美式92平米三居</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160406.html" target="_blank" title="">插画师自主设计色彩时尚家</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/160330.html" target="_blank" title="">老式公寓设计送给父母的礼物</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/155955.html" target="_blank" title="">美女红色装扮柔美50平小窝</a></li>
                    <li><a href="http://www.homehome.com.cn/sheji/sjal/2013/1015/111001.html" target="_blank" title="">我的窝4万5打造55平幸福小窝</a></li>
                </ul>
            </div>
        </div>
        <div class="right_sjc">
        	<h1>设计攻略<span><a href="http://www.homehome.com.cn/sheji/sjgl/" target="_blank" title="">更多>></a></span></h1>
            <a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161959.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/gonglue1.jpg" width="215" height="135" alt="" title="" /></a><br /><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161959.html" target="_blank" title="">不寻常手法 设计师炮制3套实用大户型</a>
            <div class="clear"></div>
            <a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161811.html" target="_blank" title=""><img src="http://www.homehome.com.cn/statics/images/gonglue2.jpg" width="215" height="135" alt="" title="" /></a><br /><a href="http://www.homehome.com.cn/sheji/sjal/2013/1016/161811.html" target="_blank" title="">背景墙大挪移 挑战纠结的老客厅设计</a>
        </div>
    </div>
  </div>
  
  <div class="ad"><img src="http://www.homehome.com.cn/statics/images/daziran.jpg" width="950" height="90" alt="" title="" /></div>
