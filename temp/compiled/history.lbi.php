
<div id='history_div' >
<div class="mod1 mod2 blank" id="historybox" style="border-top:none;" >
<h1 class="left_title"><?php echo $this->_var['lang']['view_history']; ?></h1>
	<div id='history_list' class="history_list mod2con">
	 <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
  </div>
</div>
</div>
<script type="text/javascript">
divheight("historybox");
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
}
</script>
