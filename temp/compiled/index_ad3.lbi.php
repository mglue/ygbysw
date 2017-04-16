<style>html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, code, del, dfn, em, img, q, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
	border: 0;
	font-weight: inherit;
	font-style: inherit;
	font-family: inherit;
	vertical-align: baseline;
	list-style: none;
}


TABLE {
	BORDER-TOP-WIDTH: 0px; PADDING-RIGHT: 0px; PADDING-LEFT: 0px; BORDER-LEFT-WIDTH: 0px; FONT-SIZE: 100%; BORDER-BOTTOM-WIDTH: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; VERTICAL-ALIGN: baseline; PADDING-TOP: 0px; BORDER-RIGHT-WIDTH: 0px; outline: 0
}
TR {
	BORDER-TOP-WIDTH: 0px; PADDING-RIGHT: 0px; PADDING-LEFT: 0px; BORDER-LEFT-WIDTH: 0px; FONT-SIZE: 100%; BORDER-BOTTOM-WIDTH: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; VERTICAL-ALIGN: baseline; PADDING-TOP: 0px; BORDER-RIGHT-WIDTH: 0px; outline: 0
}
TH {
	BORDER-TOP-WIDTH: 0px; PADDING-RIGHT: 0px; PADDING-LEFT: 0px; BORDER-LEFT-WIDTH: 0px; FONT-SIZE: 100%; BORDER-BOTTOM-WIDTH: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; VERTICAL-ALIGN: baseline; PADDING-TOP: 0px; BORDER-RIGHT-WIDTH: 0px; outline: 0
}
TD {
	BORDER-TOP-WIDTH: 0px; PADDING-RIGHT: 0px; PADDING-LEFT: 0px; BORDER-LEFT-WIDTH: 0px; FONT-SIZE: 100%; BORDER-BOTTOM-WIDTH: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; VERTICAL-ALIGN: baseline; PADDING-TOP: 0px; BORDER-RIGHT-WIDTH: 0px; outline: 0;
}
TABLE {
	BORDER-COLLAPSE: collapse; border-spacing: 0
}
th, td {
	vertical-align: middle
}
caption, th, td {
	font-weight: normal;
}
table, td, th {
	vertical-align: top;
}
a {
	font-size: 12px;
	color: #464646;
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #000000;
}</style>
<div id="slide_banner">

	<div id="JS_slide_container" class="slide_stage">
		<table id="JS_side_stage" style="width:<?php echo $this->_var['flash_count']; ?>00%;"><tr>
        
         <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_68099300_1492342383');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_68099300_1492342383']):
        $this->_foreach['myflash']['iteration']++;
?>

 <td><div class="bg"><a target="_blank" style="background:url(themes/yiguofree/images/loading.gif) center center no-repeat;" data-bg="<?php echo $this->_var['flash_0_68099300_1492342383']['src']; ?>" href="<?php echo $this->_var['flash_0_68099300_1492342383']['url']; ?>" ></a></div></td>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						
					</tr></table> 
	</div>
	<div class="slide_handdler">
    
        <div id="JS_side_nav" class="w">
           <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_68140200_1492342383');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_68140200_1492342383']):
        $this->_foreach['myflash']['iteration']++;
?>
         
        <a <?php if (($this->_foreach['myflash']['iteration'] <= 1)): ?>class="current"<?php endif; ?> href="javascript:;"><?php echo $this->_foreach['myflash']['iteration']; ?></a>  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        
        </div>
    </div>
</div>
<div class="blank"></div>