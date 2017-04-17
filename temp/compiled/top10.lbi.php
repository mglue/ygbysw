<?php if ($this->_var['top_goods']): ?>
	

<div class="mod1 mod2 blank bg" id="topbox" style="border-top:none;" >
	<h1 class="left_title"><?php echo $this->_var['lang']['top10']; ?></h1>
	 <ul id="top10">
		 <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
		  <li>
			 <div class="first" <?php if (($this->_foreach['top_goods']['iteration'] == $this->_foreach['top_goods']['total'])): ?>style="border-bottom:none;"<?php endif; ?>>
			  <div class="fl">
				<font style="color:#DD0000; font-weight:bold"><?php echo $this->_foreach['top_goods']['iteration']; ?>.</font> <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo sub_str($this->_var['goods']['short_name'],15); ?></a>
				</div>
				<div class="fr"><b class="f1"><?php echo $this->_var['goods']['price']; ?></b></div>
			 </div>
			 
			</li>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		 </ul>
</div>

<?php endif; ?>