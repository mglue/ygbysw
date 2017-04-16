<?php if ($this->_var['promotion_goods']): ?>
<div class="blank1">
<div style="clearfix">
<div class="more clearfix pro_title" >
<h1 class="tit"><?php echo $this->_var['lang']['promotion_goods']; ?></h1>
<h1 class="h1title">
<div style="float:right;">
<a href="search.php?intro=promotion" style="font-weight:normal;" >更多>></a>
</div>
</h1>
</div>
</div>
<div class="recommendContent entry-content clearfix"  >

<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
<div class="goodsbox1">
				<div class="imgbox1"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
			 <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="show68ecshop"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
              <p><?php echo $this->_var['lang']['shop_price']; ?><font class="goodspice market"><?php echo $this->_var['goods']['shop_price']; ?></font></p>
			
			 <p><?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b></p>
			

			</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<?php endif; ?>
