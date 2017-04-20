<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $this->_var['page_title']; ?></title>
	<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
	<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category.css">
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/ecsmart.css">
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'user.js')); ?>

	</head>
<body style="background: rgb(235, 236, 237);">
<div id="wrapper" class="xm_app">
  <div id="viewport" class="viewport" style="background: transparent;">
<div id="header" class="header_03">
	 <a href="javascript:history.back(-1)" class="top_home">首页</a>
    <div class="tit" style="">
      <h3><h1><?php if ($this->_var['action'] == 'profile'): ?><?php echo $this->_var['lang']['profile']; ?><?php elseif ($this->_var['action'] == 'bonus'): ?><?php echo $this->_var['lang']['bonus']; ?><?php elseif ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?><?php echo $this->_var['lang']['my_order']; ?><?php elseif ($this->_var['action'] == 'account_log' || $this->_var['action'] == 'account_deposit' || $this->_var['action'] == 'account_raply' || $this->_var['action'] == 'account_detail' || $this->_var['action'] == 'act_account' || $this->_var['action'] == 'pay'): ?><?php echo $this->_var['lang']['pay_manage']; ?><?php elseif ($this->_var['action'] == 'address_list'): ?><?php echo $this->_var['lang']['address_list']; ?><?php endif; ?></h1></h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span id="ECS_CARTINFO" class="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span> </li>
      </ul>
    </div>
  </div>
<?php if ($this->_var['action'] == 'profile'): ?>  <?php echo $this->fetch('library/user_welcome.lbi'); ?><?php endif; ?>
<?php if ($this->_var['action'] == 'order_list'): ?>  <?php echo $this->fetch('library/user_order_list.lbi'); ?><?php endif; ?>
<?php if ($this->_var['action'] == 'bonus'): ?>  <?php echo $this->fetch('library/user_bonus.lbi'); ?><?php endif; ?>
<?php if ($this->_var['action'] == 'address_list'): ?>  <?php echo $this->fetch('library/user_address_list.lbi'); ?><?php endif; ?>
<?php if ($this->_var['action'] == 'order_detail'): ?><?php echo $this->fetch('library/user_order_detail.lbi'); ?><?php endif; ?>
<?php if ($this->_var['action'] == "account_raply" || $this->_var['action'] == "account_log" || $this->_var['action'] == "act_account" || $this->_var['action'] == "account_deposit" || $this->_var['action'] == "account_detail"): ?><?php echo $this->fetch('library/user_account.lbi'); ?><?php endif; ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</div>

</div>
</body>
</html>