<div class="blank1">
  <div style="clearfix">
    <div class="more clearfix best">
      <h1 class="tit"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></h1>
      <h1 class="h1title">
        <div style="float:right;"> <a href="<?php echo $this->_var['goods_cat']['url']; ?>" style="font-weight:normal;" >更多>></a> </div>
      </h1>
    </div>
  </div>
  <div class="recommendContenttong entry-content clearfix"  id="show_new_area" > 
    
    <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_34756200_1492342385');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_34756200_1492342385']):
?>
    <div class="goodsbox1">
      <div class="imgbox1"><a href="<?php echo $this->_var['goods_0_34756200_1492342385']['url']; ?>"><img src="<?php echo $this->_var['goods_0_34756200_1492342385']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_34756200_1492342385']['name']); ?>" /></a></div>
      <a href="<?php echo $this->_var['goods_0_34756200_1492342385']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_34756200_1492342385']['name']); ?>" class="show68ecshop"><?php echo $this->_var['goods_0_34756200_1492342385']['short_name']; ?></a><br />
      <p><?php echo $this->_var['lang']['market_price']; ?><font class="goodspice market"><?php echo $this->_var['goods_0_34756200_1492342385']['market_price']; ?></font></p>
      
      <?php if ($this->_var['goods_0_34756200_1492342385']['promote_price'] != ""): ?>
      <p><?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods_0_34756200_1492342385']['promote_price']; ?></b></p>
      <?php else: ?>
      <p><?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods_0_34756200_1492342385']['shop_price']; ?></b></p>
      <?php endif; ?> 
      
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
</div>
