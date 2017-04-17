<h1 class="left_titletop"><a href="catalog.php"><?php echo $this->_var['lang']['all_category']; ?></a></h1>
<div id="menu" class="mod1 mod2 blank"> 
	<ul>
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_79559300_1492353855');$this->_foreach['cat1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat1']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_79559300_1492353855']):
        $this->_foreach['cat1']['iteration']++;
?>
		<li><?php if ($this->_var['cat_0_79559300_1492353855']['cat_id']): ?><em></em><?php endif; ?><a href='<?php echo $this->_var['cat_0_79559300_1492353855']['url']; ?>' style="color:#333333; font-family:微软雅黑; font-size:14px;"><?php echo htmlspecialchars($this->_var['cat_0_79559300_1492353855']['name']); ?></a>
		<ul >
         <?php $_from = $this->_var['cat_0_79559300_1492353855']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_79600000_1492353855');$this->_foreach['cat2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat2']['total'] > 0):
    foreach ($_from AS $this->_var['child_0_79600000_1492353855']):
        $this->_foreach['cat2']['iteration']++;
?>
			<li><?php if ($this->_var['child_0_79600000_1492353855']['cat_id']): ?><em></em><?php endif; ?><a href='<?php echo $this->_var['child_0_79600000_1492353855']['url']; ?>'><?php echo htmlspecialchars($this->_var['child_0_79600000_1492353855']['name']); ?></a>
            <ul>
            <?php $_from = $this->_var['child_0_79600000_1492353855']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_79639900_1492353855');$this->_foreach['cat3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat3']['total'] > 0):
    foreach ($_from AS $this->_var['childer_0_79639900_1492353855']):
        $this->_foreach['cat3']['iteration']++;
?>
				<li><?php if ($this->_var['childer_0_79639900_1492353855']['cat_id']): ?><em></em><?php endif; ?><a href='<?php echo $this->_var['childer_0_79639900_1492353855']['url']; ?>' style="color:#888888;"><?php echo htmlspecialchars($this->_var['childer_0_79639900_1492353855']['name']); ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
		</ul>
		</li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
	</ul>
</div>
<script type="text/javascript"> 
(function(e){
	for(var _obj=document.getElementById(e.id).getElementsByTagName(e.tag),i=-1,em;em=_obj[++i];){
		em.onclick = function(){ //onmouseover
			var ul = this.nextSibling;
			if(!ul){return false;}
			ul = ul.nextSibling; if(!ul){return false;} 
			if(e.tag != 'a'){ ul = ul.nextSibling; if(!ul){return false;} } //a 标签控制 隐藏或删除该行
			for(var _li=this.parentNode.parentNode.childNodes,n=-1,li;li=_li[++n];){
				if(li.tagName=="LI"){
					for(var _ul=li.childNodes,t=-1,$ul;$ul=_ul[++t];){
						switch($ul.tagName){
						case "UL":
							$ul.className = $ul!=ul?"" : ul.className?"":"off";
						break;
						case "EM":
							$ul.className = $ul!=this?"" : this.className?"":"off";
						break;
						}
					}
				}
			}
		}
	}
})({id:'menu',tag:'em'});
</script>
