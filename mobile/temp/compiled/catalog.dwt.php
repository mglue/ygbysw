<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/68ecshop.css"/>
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
</head>
<body >
<div id="wrapper">
  <div class="page-category" >
    <div class="header">
          <a href="./" class="top_home fl"></a>
      <div class="tit">
        <h2 ><span class="title"><?php echo $this->_var['lang']['goods_category']; ?></span></h2>
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
    <div class="category_search">
      <form id="searchForm" name="searchForm" method="get" action="search.php"  >
    
        <div class="input-word">
          <input name="keywords" type="text" id="keyword"  autocomplete="off" placeholder="<?php if ($this->_var['searchkeywords']): ?><?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <?php echo $this->_var['val']; ?> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?>" onFocus="{this.placeholder=''}" onBlur="if(this.placeholder=''){this.placeholder='<?php if ($this->_var['searchkeywords']): ?><?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <?php echo $this->_var['val']; ?> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endif; ?>'}">
          <input type="submit" class="btn" value="" >
          </div>
      </form>
    </div>
    <div class="list_category">
      <ul>
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>
        <li>
          <div class="category items js-more"><a href="<?php echo htmlspecialchars($this->_var['cat']['url']); ?>">
            <div class="imgurl"> <?php if ($this->_var['cat']['img']): ?><img src="data/catthumb/<?php echo $this->_var['cat']['img']; ?>"><?php else: ?><img src="data/catthumb/no_picture.png"><?php endif; ?></div>
            <p class="name"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></p>
            </a></div>
          <div class="category_child">
            <ul class="anim-list">
              <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <li>
                <div class="category items"><a href="<?php echo $this->_var['child']['url']; ?>">
                  <p class="name"><?php echo htmlspecialchars($this->_var['child']['name']); ?></p>
                  </a></div>
              </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </ul>
          </div>
       </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>          
          
        
      

            </ul>
          </div>

<script type="text/javascript">
	$(function(){
		 $('.js-more').click(function(){
			$(this).next().slideToggle("slow");
		});
	})
</script>

    <?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
</div>


</body>
</html>