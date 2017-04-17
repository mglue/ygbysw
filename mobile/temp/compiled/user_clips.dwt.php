<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<script src="themesmobile/68ecshopcom_mobile/js/modernizr.js"></script>
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
    <?php if ($this->_var['action'] == 'default'): ?> <a href="index.php" class="arrow">首页</a><?php else: ?> <a href="javascript:history.back(-1)" class="top_home ">首页</a><?php endif; ?>
    <div class="tit" style="">
      <h3><?php if ($this->_var['action'] == 'default'): ?><?php echo $this->_var['lang']['defaultt']; ?><?php elseif ($this->_var['action'] == 'affiliate'): ?><?php echo $this->_var['lang']['affiliate']; ?><?php elseif ($this->_var['action'] == 'booking_list'): ?><?php echo $this->_var['lang']['booking_list']; ?><?php elseif ($this->_var['action'] == 'add_booking'): ?><?php echo $this->_var['lang']['add_booking']; ?><?php elseif ($this->_var['action'] == 'collection_list'): ?><?php echo $this->_var['lang']['label_collection']; ?><?php elseif ($this->_var['action'] == 'message_list'): ?><?php echo $this->_var['lang']['message_list']; ?><?php elseif ($this->_var['action'] == 'comment_list'): ?><?php echo $this->_var['lang']['comment_list']; ?><?php endif; ?></h3>
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
  <?php if ($this->_var['action'] == 'default'): ?>
    <?php echo $this->fetch('library/user_nav.lbi'); ?>
    <?php endif; ?>
    <?php if ($this->_var['action'] == 'collection_list'): ?><?php echo $this->fetch('library/user_collection.lbi'); ?><?php endif; ?>
    <?php if ($this->_var['action'] == 'message_list' || $this->_var['action'] == 'comment_list'): ?><?php echo $this->fetch('library/user_message.lbi'); ?><?php endif; ?> 
    <?php if ($this->_var['action'] == 'affiliate'): ?><?php echo $this->fetch('library/user_affiliate.lbi'); ?><?php endif; ?> 
  <?php if ($this->_var['action'] == 'comment_list'): ?><?php echo $this->fetch('library/user_comments.lbi'); ?><?php endif; ?>
     <?php if ($this->_var['action'] == 'booking_list'): ?><?php echo $this->fetch('library/user_book.lbi'); ?><?php endif; ?> 
  
     <?php if ($this->_var['action'] == 'add_booking'): ?><?php echo $this->fetch('library/user_book.lbi'); ?><?php endif; ?> 
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
</html>