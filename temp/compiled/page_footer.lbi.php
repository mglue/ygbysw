 <DIV class=footer>
<DIV class=helper>

<DIV class=devide_line>
</DIV>
<DIV class=hl_lnk>
<DIV class=hll_lf>


<div id="service-2013">
	    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
    <dl class="fore<?php echo $this->_foreach['no']['iteration']; ?>">
      <dt><b></b><strong><?php echo $this->_var['help_cat']['cat_name']; ?></strong></dt>
      <dd>
        <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <div><a href="help.php?id=<?php echo $this->_var['item']['article_id']; ?>" target="_blank" rel="nofollow"><?php echo $this->_var['item']['short_title']; ?></a></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


</div>



</DIV>
            
            
            
            
</DIV></DIV>
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<DIV style="width:1210px">
<DIV class=youqing_links>
<DIV class=youqing_right>
<DIV class=aalink>
<?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
     
       <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
       
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <div class="clear"></div>
        <a href="http://www.68ecshop.com" target="_blank" style="padding-left:92px;color: #A87D26;">68ecshop</a> | 
        <a href="http://www.68ecshop.com/category-33-b0.html" style="color: #A87D26;" target="_blank">68ecshop模板中心</a> | 
        <a href="http://bbs.68ecshop.com" style="color: #A87D26;" target="_blank">68ecshop论坛</a> | 
        <?php if ($this->_var['txt_links']): ?>
        <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['name']['iteration']++;
?>
        <a href="<?php echo $this->_var['link']['url']; ?>" style="color: #A87D26;" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a> <?php if (! ($this->_foreach['name']['iteration'] == $this->_foreach['name']['total'])): ?>|<?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
</DIV>

</DIV>
<DIV class=clear></DIV></DIV></DIV>
<?php endif; ?>

<DIV class=copyright>

<DIV class=cr_box>
	
<P>
  <?php if ($this->_var['navigator_list']['bottom']): ?> 
  
  <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_63863100_1492342385');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_63863100_1492342385']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
  <a href="<?php echo $this->_var['nav_0_63863100_1492342385']['url']; ?>" <?php if ($this->_var['nav_0_63863100_1492342385']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_63863100_1492342385']['name']; ?></a> 
  <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
  | 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <?php endif; ?> 
</P>
<DIV id=copyright_box>
  <?php echo $this->_var['copyright']; ?>
  <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?> 
  <?php if ($this->_var['service_phone']): ?> 
  Tel: <?php echo $this->_var['service_phone']; ?> 
  <?php endif; ?> 
  <?php if ($this->_var['service_email']): ?> 
  E-mail: <?php echo $this->_var['service_email']; ?><br />
  <?php endif; ?> 
  <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><a href="http://www.68ecshop.com" style="display:none;">68ECSHOP模版中心</a><?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> <?php if ($this->_var['im']): ?> <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/yiguofree/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <img src="themes/yiguofree/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
  <?php if ($this->_var['im']): ?> 
  <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
  <?php endif; ?> 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
  <?php if ($this->_var['icp_number']): ?> 
  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
  <?php endif; ?> 
 

<script type="text/javascript" src="themes/yiguofree/js/chat.float.min.js"></script>
<div id="footer_ban">
  <a href="http://www.68ecshop.com" target="_blank">  <img src="themes/yiguofree/images/footer.jpg" alt="68ecshop版权所有" /></a>
  <a href="http://www.68ecshop.com" target="_blank"><p>68ecshop模板</p></a>
  </div>