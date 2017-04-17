<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<?php if ($this->_var['auto_redirect']): ?>
<meta http-equiv="refresh" content="3;URL=<?php echo $this->_var['message']['back_url']; ?>" />
<?php endif; ?>

<title><?php echo $this->_var['page_title']; ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/yiguofree/js/action.js"></script>
<style>.ur_here{width:1190px;}</style>
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


<div class="block1 "><?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="mod1 blank" id="messages">
	
	<h1 class="mod1tit"><?php echo $this->_var['lang']['system_info']; ?></h1>
	<div class="mod1con">
			<div class="tips"><?php echo $this->_var['message']['content']; ?></div>
		  <div class="tc" style="padding-bottom:20px;">
			<?php if ($this->_var['message']['url_info']): ?>
			<?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
			 <p><a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a></p>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 <?php endif; ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">divheight("messages");</script>
</div>

<div class="blank10"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
