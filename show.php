<?php 
include("./header.php"); 
$id = !empty($_GET['id'])&&is_numeric($_GET['id']) ? $_GET['id'] : 2;
$mres = mysql_query("select * from `tg_jiaju` where id={$id}");
$mrow = mysql_fetch_assoc($mres);
?>


<div class="listyemian">
  	<div class="left_listyemian">
        <div class="position">
        	您当前的位置：<a href="http://www.htapples.com">首页</a>
        	<span> > </span>
        	<a href="./list.php?type=jryw"><?php echo $ftype[$mrow['type']] ?></a> >  正文
        </div>
        <div class="title_article"><?php echo $mrow['title'] ?></div>
        <div class="description">
        	<span><?php echo $mrow['time'] ?></span>
        </div>
        <div class="content">
        	<?php echo $mrow['content'] ?>
		</div>
        <div id="pages" class="text-c"></div>
                         
        <div class="related">
            <h5 class="blue">延伸阅读：</h5>
            <ul class="list blue lh24 f14">
                <li>·<a href="./show.php?id=495" target="_blank">钟丽缇家居服显身材臃肿 挽好姐妹一路抱怨不断</a><span>(2014-07-11)</span></li>
                <li>·<a href="./show.php?id=2" target="_blank">诱惑接档剧是什么?诱惑接档剧秘密之门演员表剧照全曝光</a><span>(2014-09-17)</span></li>
                <li>·<a href="./show.php?id=3" target="_blank">著名演员葛优对祖籍衡水饶阳念念不忘（图）</a><span>(2014-09-25)</span></li>
                <li>·<a href="./show.php?id=4" target="_blank">杨志刚演技备受行业肯定 荣获“年度十佳演员”</a><span>(2014-11-01)</span></li>
                <li>·<a href="./show.php?id=5" target="_blank">平凡的世界演员表 平凡的世界角色介绍</a><span>(2014-11-13)</span></li>
            </ul>
        </div>
             
        <div class="pic8">
          	<ul>
                <li>
                	<a href="http://www.homehome.com.cn/zhuangxiu/cyjj/2013/1015/163700.html"  target="_blank" title="时间还可以这样看 荐13款好玩创意钟饰"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015043808720.jpg" width="140" height="110" alt="时间还可以这样看 荐13款好玩创意钟饰" title="时间还可以这样看 荐13款好玩创意钟饰" /></a><br /><a href="http://www.homehome.com.cn/zhuangxiu/cyjj/2013/1015/163700.html" target="_blank" title="时间还可以这样看 荐13款好玩创意钟饰">时间还可以这</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/zhuangxiu/cyjj/2013/1015/163433.html"  target="_blank" title="懒人最爱的神器！荐12款创意厨房用品"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015043523306.jpg" width="140" height="110" alt="懒人最爱的神器！荐12款创意厨房用品" title="懒人最爱的神器！荐12款创意厨房用品" /></a><br /><a href="http://www.homehome.com.cn/zhuangxiu/cyjj/2013/1015/163433.html" target="_blank" title="懒人最爱的神器！荐12款创意厨房用品">懒人最爱的神</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/103220.html"  target="_blank" title="尽显尊贵奢华 大理石电视背景墙装修"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015103353908.jpg" width="140" height="110" alt="尽显尊贵奢华 大理石电视背景墙装修" title="尽显尊贵奢华 大理石电视背景墙装修" /></a><br /><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/103220.html" target="_blank" title="尽显尊贵奢华 大理石电视背景墙装修">尽显尊贵奢华</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102312.html"  target="_blank" title="厨房装饰 让你吃出好运来"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015102634121.jpg" width="140" height="110" alt="厨房装饰 让你吃出好运来" title="厨房装饰 让你吃出好运来" /></a><br /><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/102312.html" target="_blank" title="厨房装饰 让你吃出好运来">厨房装饰 让</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/101554.html"  target="_blank" title="家居装修风水 让家居多一份浪漫"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015101701642.jpg" width="140" height="110" alt="家居装修风水 让家居多一份浪漫" title="家居装修风水 让家居多一份浪漫" /></a><br /><a href="http://www.homehome.com.cn/zhuangxiu/jzfs/2013/1015/101554.html" target="_blank" title="家居装修风水 让家居多一份浪漫">家居装修风水</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/chanpin/jiafang/2013/1015/100925.html"  target="_blank" title="阿依莲2014夏季掀起探索奇幻森林的冒险之旅"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015101007128.jpg" width="140" height="110" alt="阿依莲2014夏季掀起探索奇幻森林的冒险之旅" title="阿依莲2014夏季掀起探索奇幻森林的冒险之旅" /></a><br /><a href="http://www.homehome.com.cn/chanpin/jiafang/2013/1015/100925.html" target="_blank" title="阿依莲2014夏季掀起探索奇幻森林的冒险之旅">阿依莲2014夏</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/chanpin/jiafang/2013/1015/100822.html"  target="_blank" title="凯盛家纺总部生活馆换装亮相"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015100922189.jpg" width="140" height="110" alt="凯盛家纺总部生活馆换装亮相" title="凯盛家纺总部生活馆换装亮相" /></a><br /><a href="http://www.homehome.com.cn/chanpin/jiafang/2013/1015/100822.html" target="_blank" title="凯盛家纺总部生活馆换装亮相">凯盛家纺总部</a></li>
                <li>
                	<a href="http://www.homehome.com.cn/chanpin/jiafang/2013/1015/100742.html"  target="_blank" title="郑州韩香家纺旗舰店开业"><img src="http://www.homehome.com.cn/uploadfile/2013/1015/20131015100819772.jpg" width="140" height="110" alt="郑州韩香家纺旗舰店开业" title="郑州韩香家纺旗舰店开业" /></a><br /><a href="http://www.homehome.com.cn/chanpin/jiafang/2013/1015/100742.html" target="_blank" title="郑州韩香家纺旗舰店开业">郑州韩香家纺</a></li>
            </ul>
        </div>
    </div>
 	<?php include("./right.php"); ?>
</div>
<div class="clear"></div>

<?php include("./footer.php"); ?>