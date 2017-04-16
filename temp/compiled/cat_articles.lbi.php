
<h1 class="mod2tit" style="height:0"><a href="<?php echo $this->_var['articles_cat']['url']; ?>" class="more" style="margin-top:3px;">更多</a></h1>
<div class="mod2con clearfix">
    <ul>
     <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
    <li style="width:250px; margin-right:20px; display:inline; height:25px; line-height:25px;" class="fl"><a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>" class="txtdot"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <ul>
</div>

<script type="text/javascript">divheight("catArticles");</script>