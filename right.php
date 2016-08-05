<?php 
$jres = mysql_query("select id,title from `tg_jiaju` where type='jryw' order by time desc limit 10");
$jres1 = mysql_query("select id,title from `tg_jiaju` where type='jryw' order by time desc limit 10,10");
$cyres = mysql_query("select id,title from `tg_jiaju` where type='chanpin' order by time desc limit 10");
$cres = mysql_query("select id,title,pic from `tg_jiaju` where type='cyjj' and is_pic=1 order by time desc limit 4");
?>
<div class="right_listyemian">
    <div style="width:250px;">
    <script type="text/javascript" src="http://i.haodianpu.com/show.php?aid=59&param=250*250"></script>  
    </div>
    <div class="con_rl">
        <div class="tit_conrl">
            <h3><a href="./list.php?type='jryw'" target="_blank" title="最新资讯">最新资讯</a></h3>
            <p><a href="./list.php?type='jryw'" target="_blank" title="更多">更多</a></p>
        </div>
        <ul class="listppp">
        <?php while($jrow=mysql_fetch_assoc($jres)){ ?>
            <li style="overflow:hidden;"><a href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><?php echo $jrow['title'] ?></a></li>
        <?php } ?>
        </ul>
    </div>
    <div class="clear"></div>
    
    <div class="con_rl">
        <div class="tit_conrl">
            <h3><a href="./list.php?type=cyjj" target="_blank" title="创意家居">创意家居</a></h3>
            <p><a href="./list.php?type=cyjj" target="_blank" title="更多">更多</a></p>
        </div>
        <ul class="listimg">
        <?php while($crow=mysql_fetch_assoc($cres)){ ?>
            <li>
                <a href="./show.php?id=<?php echo $crow['id'] ?>" target="_blank" title="<?php echo $crow['title'] ?>"><img src="<?php echo $crow['pic'] ?>" width="100" height="70" alt="<?php echo $crow['title'] ?>" title="<?php echo $crow['title'] ?>" /></a><br /><a href="./show.php?id=<?php echo $crow['id'] ?>" target="_blank" title="<?php echo $crow['title'] ?>"><?php echo mb_substr($crow['title'],0,8,'utf-8') ?></a></li>
        <?php } ?>
        </ul>
    </div>
    <div class="clear"></div>
    <?php if(empty($_GET['type'])){ ?>
    <div class="con_rl">
        <div class="tit_conrl">
            <h3><a href="./list.php?type=jryw" target="_blank" title="猜你喜欢">猜你喜欢</a></h3>
            <p><a href="./list.php?type=jryw" target="_blank" title="更多">更多</a></p>
        </div>
       <ul class="listppp">
            <?php while($jrow=mysql_fetch_assoc($jres1)){ ?>
            <li style="overflow:hidden;"><a href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><?php echo $jrow['title'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="con_rl">
        <div class="tit_conrl">
            <h3><a href="./list.php?type=chanpin" target="_blank" title="产品导购">产品导购</a></h3>
            <p><a href="./list.php?type=chanpin" target="_blank" title="更多">更多</a></p>
        </div>
            
        <ul class="listppp">
            <?php while($jrow=mysql_fetch_assoc($cyres)){ ?>
            <li style="overflow:hidden;"><a href="./show.php?id=<?php echo $jrow['id'] ?>" target="_blank" title="<?php echo $jrow['title'] ?>"><?php echo $jrow['title'] ?></a></li>
        <?php } ?>
        </ul>
    </div>
    <?php } ?>
    <div class="clear"></div>
</div>