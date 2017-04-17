<?php if ($this->_var['orders']): ?>
<div class="order_list mlr20">
  <div class="box">
    <div class="list_order list_order_tmp list_nav">
      <ul id="OrderList">
      <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <li style="position:relative; padding-bottom:15px;">
          <div class="order items">
          
          <a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="lnk" >
          
            <div class="order_info" >
              <dl>
                <dt class="add_time">订单日期：<?php echo $this->_var['item']['order_time']; ?> </dt>
                <dd class="order_id">订单编号：<?php echo $this->_var['item']['order_sn']; ?></dd>
                <dd> <span class="goods_amount">总价：<?php echo $this->_var['item']['total_fee']; ?></span> </dd>
                <dd ><span class="order_type">状态：<?php echo $this->_var['item']['order_status']; ?></span></dd>
          	</dl>
            </div>
          	</a>
          	</div>
           <div style="" class="dingdancaozuo"><?php echo $this->_var['item']['handler']; ?></div>
 		</li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </ul>
</div>
</div>
<div style="background:#FFF; margin-top:1em;">
<?php echo $this->fetch('library/pages.lbi'); ?> 
</div>
</div>
<?php else: ?>
<div id="list_0_0" class="alertText font12"><?php echo $this->_var['lang']['order_empty']; ?></div>
<?php endif; ?> 

<script type="text/javascript">
<?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>