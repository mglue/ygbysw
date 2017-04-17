<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<script type="text/javascript" src="themes/yiguofree/js/action.js"></script>

</head>
<body><script type="text/javascript">
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
			function showhide(show){
				document.getElementById("category_tree").style.display = show;
				}
</script>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block1 ">
<?php echo $this->fetch('library/ur_here.lbi'); ?>

  <div id="pageLeft" class="fl">
	 
	 <?php echo $this->fetch('library/category_tree.lbi'); ?> 
	 <?php echo $this->fetch('library/top10.lbi'); ?>
	
	 <?php echo $this->fetch('library/promotion_info.lbi'); ?>
      <?php echo $this->fetch('library/history.lbi'); ?>
   
	</div>
	<div id="pageRight" class="fr">
    
	<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
    <h1 class="screen "><span style="  margin-left:10px; color:#666666; font-size:14px;"><?php echo $this->_var['lang']['goods_filter']; ?></span></h1>
	<div class="mod1 blank" id="filter">
	<div class="mod1con">
		  <?php if ($this->_var['brands']['1']): ?>
			<div class="screeBox">
			  <strong><?php echo $this->_var['lang']['brand']; ?>：</strong>
				<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
					<p><?php echo $this->_var['brand']['brand_name']; ?></p>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<?php endif; ?>
			<?php if ($this->_var['price_grade']['1']): ?>
			<div class="screeBox">
			<strong><?php echo $this->_var['lang']['price']; ?>：</strong>
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<p><?php echo $this->_var['grade']['price_range']; ?></p>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<?php endif; ?>
			<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_23444400_1492353854');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_23444400_1492353854']):
?>
      <div class="screeBox">
			<strong><?php echo htmlspecialchars($this->_var['filter_attr_0_23444400_1492353854']['filter_attr_name']); ?>：</strong>
			<?php $_from = $this->_var['filter_attr_0_23444400_1492353854']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<p><?php echo $this->_var['attr']['attr_value']; ?></p>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		</div>
	</div>
	<script type="text/javascript">divheight("filter");</script>
	<?php endif; ?>	
	 
  	
	<?php echo $this->fetch('library/goods_list.lbi'); ?>
	<?php echo $this->fetch('library/pages.lbi'); ?>

	</div>
    <div class="clear"></div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
