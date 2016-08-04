<?php 
include("./header.php");
$type = !empty($_GET['type']) ? $_GET['type'] : '';

$nres = mysql_query("select count(id) from `tg_jiaju` where type='{$type}'");
$num = mysql_fetch_row($nres);
$pages = ceil($num[0]/25);
$cur_page = (!empty($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']<=$pages&&$_GET['page']>=1) ? $_GET['page'] : 1;
$start = ($cur_page-1)*25;

$lres = mysql_query("select id,title,time from `tg_jiaju` where type='{$type}' order by time desc limit {$start},25");

?>

 <div class="listyemian" style="height:auto">
  		<div class="left_listyemian">
        	<div class="position">
                您当前的位置：<a href="http://www.homehome.com.cn">首页</a><span> > </span><a href="http://www.homehome.com.cn/news/">资讯</a> > <a href="http://www.homehome.com.cn/news/jryw/">今日要闻</a> >  列表
            </div>
            <ul class="ulul">
            <?php while($lrow=mysql_fetch_assoc($lres)){ ?>
                <li><p class="leftp"><a href="./show.php?id=<?php echo $lrow['id'] ?>" target="_blank" title="<?php echo $lrow['title'] ?>"><?php echo $lrow['title'] ?></a></p><p class="rightp"><?php echo $lrow['time'] ?></p></li>
            <?php } ?>
                <li class="hr"></li>            	            
            </ul>
            <div id="pages" class="text-c">
                <?php if($cur_page == 1){ ?>
                    <a disabled="disabled">首页</a>&nbsp;&nbsp;
                    <a disabled="disabled">上一页</a>&nbsp;&nbsp;
                <?php }else{ ?>
                    <a href="./list.php?page=1{<?php echo '&type='.$type; ?>}">首页</a>&nbsp;&nbsp;
                    <a href="./list.php?page=<?php echo ($cur_page-1).'&type='.$type; ?>">上一页</a>&nbsp;&nbsp;
                <?php } ?>
                <?php 
                    $s_page = $cur_page-4>0?$cur_page-4:1;
                    $e_page = $cur_page+5>$pages?$pages:$cur_page+5;
                    for($i=$s_page;$i<=$e_page;$i++){
                        if($i == $cur_page){
                            echo $i.'&nbsp;&nbsp;';
                        }else{ ?> 
                            <a href='./list.php?page=<?php echo $i.'&type='.$type;?>'><?php echo $i;?></a>&nbsp;&nbsp;    
                <?php }} ?>
                
                <?php if($pages == $cur_page){ ?>
                    <a disabled="disabled">下一页</a>&nbsp;&nbsp;
                    <a disabled="disabled">尾页</a>
                <?php }else{ ?>
                    <a href="./list.php?page=<?php echo ($cur_page+1).'&type='.$type; ?>">下一页</a>&nbsp;&nbsp;
                    <a href="./list.php?page=<?php echo $pages.'&type='.$type; ?>">尾页</a>
                <?php } ?>
            </div>
        </div>
        <?php include("./right.php"); ?>
</div>
<div class="clear"></div>


<?php include("./footer.php"); ?>