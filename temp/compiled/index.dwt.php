<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<script type="text/javascript" src="themes/yiguofree/js/action.js"></script>
<script src="themes/yiguofree/js/common.min.js"></script>
<script language="JavaScript" src="themes/yiguofree/js/index.min.js?0622"></script>
<style>
#category_tree{display:block;}
</style>
</head>
<body class="body2"><script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
                }
                else
                {
                    DisSub2.style.display = "none";
                }
            }
</script>

<?php echo $this->fetch('library/page_header_index.lbi'); ?>


    <?php echo $this->fetch('library/index_ad3.lbi'); ?>
    <div class="new_laba" style="height:32px; line-height:32px;">
	<div id="" style="width:10px;float:left;"></div>
	<div id="marquee1" style="overflow:hidden;padding-left:0px;background-image:none;">
	<?php echo $this->_var['shop_notice']; ?>
    </div>
</div>
<div style=" height:10px; line-height:10px; clear:both;"></div>
<div class="block1 ">
<div id="pageLeft" class="fl">
    <div class="bg blank12">
      <div class="mod1" >
        <h1 class="mod1tit"><?php echo $this->_var['lang']['shop_notice']; ?></h1>
        <div class="mod1con shop_notice"> 
<?php echo $this->fetch('library/cat_articles.lbi'); ?>
 
</div>

      </div>
      <script type="text/javascript">divheight("mod1");</script> 
    </div>

    
<?php echo $this->fetch('library/ad_position.lbi'); ?>


</div>
<div id="pageRight" class="fr bg" > 
<?php echo $this->fetch('library/recommend_promotion.lbi'); ?> </div>
<div class="clear"></div>
</div>
<div class="block1 ">

    <?php if ($this->_var['hot_goods']): ?> 
    <?php echo $this->fetch('library/recommend_hot.lbi'); ?> 
    <?php endif; ?> 
    
    <?php if ($this->_var['best_goods']): ?> 
    
    <?php echo $this->fetch('library/recommend_best.lbi'); ?> 
    
    <?php endif; ?> 
    <?php echo $this->fetch('library/recommend_new.lbi'); ?>
    

</div>

<div class="block1 "> 
<?php echo $this->fetch('library/cat_goods.lbi'); ?>
 </div>

<div class="block1 "> 
<?php echo $this->fetch('library/cat_goods.lbi'); ?>
 </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<!--<style>
.info123 {
	PADDING-BOTTOM: 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BACKGROUND: url(themes/yiguofree/images/img3-5_3.png) repeat-y; PADDING-TOP: 5px;  padding-left:20px;
}
</style>-->
<SCRIPT type=text/javascript>(function(){window._currentWidth=1210;window.onresize=function(){window._currentWidth=1210;index=0;autoRun();};})();var imgDom=M.$("a","#JS_side_stage");for(var i=0,ii=imgDom.length;i<ii;i++){imgDom[i].style.cssText="background:url("+imgDom[i].getAttribute("data-bg")+") center center no-repeat";imgDom[i].removeAttribute("data-bg");}var stage=M.$("#JS_side_stage"),imgList=M.$("a",stage),handler=M.$("a","#JS_side_nav"),len=handler.length,current=0,index=0;for(var k=0,kk=len;k<kk;k++){handler[k]._key=k;handler[k].onmouseover=function(){index=this._key;clearInterval(auto);autoRun();};handler[k].onmouseout=function(){auto=setInterval(function(){autoRun();},5000);};}var autoRun=function(){M.removeClass(handler[current],"current");M.addClass(handler[index],"current");M.Animate(stage,{marginLeft:(0-index)*window._currentWidth+"px"},200);current=index;index=(index>=len-1)?0:index+1;};var auto=setInterval(function(){autoRun();},5000);</SCRIPT>
<script type="text/javascript">divheight("links");</script>	
</body>
</html>