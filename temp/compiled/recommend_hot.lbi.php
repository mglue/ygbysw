<?php if ($this->_var['hot_goods']): ?>

<div class="blank1">
<div style="clearfix">
<div class="more clearfix best" id="itemHot" >
<h1 class="tit"><?php echo $this->_var['lang']['hot_goods']; ?></h1>
<h1 class="h1title">
<div style="float:right;">


<?php $_from = $this->_var['cat_rec']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
<h2 class="h2bg">
<a href="category.php?id=<?php echo $this->_var['rec_data']['cat_id']; ?>" ><?php echo $this->_var['rec_data']['cat_name']; ?></a> |

</h2>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<a href="search.php?intro=hot" style="font-weight:normal;" >更多>></a>
</div>
</h1>
</div>
</div>
<div class="recommendContenttong entry-content clearfix"   >

<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_82352000_1492342383');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_82352000_1492342383']):
?>
<div class="goodsbox1">
				<div class="imgbox1"><a href="<?php echo $this->_var['goods_0_82352000_1492342383']['url']; ?>"><img src="<?php echo $this->_var['goods_0_82352000_1492342383']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_82352000_1492342383']['name']); ?>" /></a></div>
			 <a href="<?php echo $this->_var['goods_0_82352000_1492342383']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_82352000_1492342383']['name']); ?>" class="show68ecshop"><?php echo $this->_var['goods_0_82352000_1492342383']['short_style_name']; ?></a><br />
                <p><?php echo $this->_var['lang']['market_price']; ?><font class="goodspice market"><?php echo $this->_var['goods_0_82352000_1492342383']['market_price']; ?></font></p>
                 
			 <?php if ($this->_var['goods_0_82352000_1492342383']['promote_price'] != ""): ?>
			   <p><?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods_0_82352000_1492342383']['promote_price']; ?></b></p>
			 <?php else: ?>
			   <p><?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods_0_82352000_1492342383']['shop_price']; ?></b></p>
			 <?php endif; ?>

			</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</div>
</div>

<?php endif; ?>