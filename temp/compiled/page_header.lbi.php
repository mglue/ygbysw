<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script language="javascript"> 
<!--
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>

<div class="page-header clearfix">
<div class="top_menu">
      <div class="top_nav fl"> <span class="current1 fl"><a target="_blank" href="http://www.68ecshop.com">68ecshop官网&nbsp;</a></span>
        <div class="t_tdcode" style="z-index:9999999;" onmouseover="this.className='t_tdcode tdcode_show'" onmouseout="this.className='t_tdcode'">
          <div class="tdcode_outter">
            <div class="tdcode_inner"> <i class="arrow_outter">◆</i><i class="arrow_inner">◆</i>
              <div class="pic"></div>
              <p class="txt">扫描二维码，关注有好礼！</p>
            </div>
          </div>
        </div>
        <a target="_blank" href="http://e.t.qq.com/ecshop_moban" class="t_qq" title="关注68ecshop官方腾讯微博"><span class="hide_clip">腾讯微博</span> </a> <a target="_blank" href="http://e.weibo.com/68ecshopcom" class="t_sina" title="关注68ecshop官方新浪微博"><span class="hide_clip">新浪微博</span></a> </div>
      <div class="top_nav fr"> <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?> <font id="ECS_MEMBERZONE" > <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></font> 
        <?php if ($this->_var['navigator_list']['top']): ?> 
        <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?><span class="linetop">|</span><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?> 
      </div>
    </div>
</div>


<div class="black1"></div>



<DIV class=zt_header_box>
<DIV style="HEIGHT: 58px" class=zt_header_sign>

<A class=zt_header_logo href="http://www.68ecshop.com"></A>
<DIV style="Z-INDEX: 9999" class=zt_header_search>

<DIV style="Z-INDEX: 2; float:left" 
class=zt_header_search_bg>
<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
<INPUT name="keywords" type="text" class="zt_header_search_input" id="keyword" value="请输入你要查找的商品" onclick="javascript:this.value='';"> 
<INPUT style="FILTER: alpha(opacity=0); BACKGROUND: #fff; opacity: 0" name="btsearch" type="submit" id="btsearch" value="" class=zt_header_search_btn > 
 </form>
<DIV class=clear></DIV>
</DIV>
<P style="Z-INDEX: 3;float:left" class=zt_header_search_hot>
<?php if ($this->_var['searchkeywords']): ?>
<?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
<a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank"><?php echo $this->_var['val']; ?></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
</P>
</DIV>


<div class="header-right">

    <a href="http://weibo.com/52yiguo">

    <img class="ie6png" width="22px" height="17px" src="themes/yiguofree/images/sina-weibo.png"></img>

    </a>
    <a href="/Mobile.html">
    
        <img class="ie6png" width="13px" height="20px" src="themes/yiguofree/images/app-phone.png"></img>
    
    </a>
    <a href="#">
    
        <img class="ie6png" width="137px" height="27px" src="themes/yiguofree/images/tel.png"></img>
    
    </a>

</div>
<DIV class=clear></DIV>
 </DIV>
<DIV class=zt_header_nav_bg>

<DIV class=zt_header_nav >
<UL>
<LI <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>class=nav_active <?php else: ?> onMouseOver="this.className='nav_active'" onMouseOut="this.className=''"<?php endif; ?>><A href="index.php"><?php echo $this->_var['lang']['home']; ?></A></LI>
<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
<LI <?php if ($this->_var['nav']['active'] == 1): ?> class="nav_active"<?php else: ?>onMouseOver="this.className='nav_active'" onMouseOut="this.className=''"<?php endif; ?> ><A href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> title="<?php echo $this->_var['nav']['name']; ?>" ><?php echo $this->_var['nav']['name']; ?></A></LI>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      
  </UL>
<UL class=clear></UL></DIV>
</DIV>
</DIV>

<div class="blank" style="position:relative; width:1190px; margin:0 auto; z-index:99999;">

<DIV class=fenlei_line >
<DIV class="new_fenlei_box" onmouseover="showhide('block')" onmouseout="showhide('none')">
    <DIV class=fenlei_list>
      <DIV class=fenlei_tit>
        <H3><?php echo $this->_var['lang']['all_category']; ?></H3>
        <SPAN></SPAN></DIV>
</DIV>
<div id="category_tree" style="	top:40px;left:0px;">
<div class="clearfix" > 
<?php $_from = get_categories_tree(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
<div  class="dt" onMouseOver="sw_nav2(<?php echo $this->_foreach['no']['iteration']; ?>,1);" onMouseOut="sw_nav2(<?php echo $this->_foreach['no']['iteration']; ?>,0);">
      <dl id="HandleLI2_<?php echo $this->_foreach['no']['iteration']; ?>" <?php if (($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>style="border:none;"<?php endif; ?>>
        <dt> <a href="<?php echo $this->_var['cat']['url']; ?>"> <?php echo htmlspecialchars($this->_var['cat']['name']); ?> </a> </dt>
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['name']['iteration']++;
?> 
        <?php if ($this->_foreach['name']['iteration'] < 7): ?>
        <dd> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> </dd>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <ul id=DisSub2_<?php echo $this->_foreach['no']['iteration']; ?> style="display:none">
          <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['childs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childs']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['childs']['iteration']++;
?>
          <li <?php if (($this->_foreach['childs']['iteration'] == $this->_foreach['childs']['total'])): ?> style="border:none;"<?php endif; ?>>
            <div class="fenlei_con_tit"> <a class="over_2" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div>
            <div class="fenlei_con_a_list"> 
              <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> 
              <a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a> |&nbsp; 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
            <div class="clear"></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
</div>
</DIV>
</DIV>
</div>
<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>