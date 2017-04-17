<div id="tbh5v0">
<div id="menu1" class="ub tab_menu widt100" style="margin-top:0px; ">
                    <div id="ddxq1" onClick="setUserTab('ddxq',1,4)"  class="ub-f1 tx-c b-grar-g  t-red-g tab_check">
                        <span style=" display:inline-block;"><?php echo $this->_var['lang']['order_status']; ?></span>
                    </div>
                    <div id="ddxq2" onClick="setUserTab('ddxq',2,4)" class="ub-f1 tx-c b-grar-g b-whl-g">
                        <span style=" display:inline-block;"><?php echo $this->_var['lang']['consignee_info']; ?></span>
                    </div>
                    <div id="ddxq3" onClick="setUserTab('ddxq',3,4)" class="ub-f1 tx-c b-grar-g b-whl-g">
                        <span style=" display:inline-block;"><?php echo $this->_var['lang']['pay']; ?></span>
                    </div>
                    <div id="ddxq4" onClick="setUserTab('ddxq',4,4)" class="ub-f1 tx-c b-grar-g b-whl-g">
                        <span style=" display:inline-block;"><?php echo $this->_var['lang']['other_info']; ?></span>
                    </div>
                </div>

 <div id="user_ddxq_1" class="goods_list" style="margin-top:0;">
       <table class="data_table">
			
			<tbody>
				<tr class="odd">
					<th><?php echo $this->_var['lang']['detail_order_sn']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><span class="order_id"><?php echo $this->_var['order']['order_sn']; ?></span>
					<?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><a href="./group_buy.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>" class="status"><?php echo $this->_var['lang']['order_is_group_buy']; ?></a>
					<?php elseif ($this->_var['order']['extension_code'] == "exchange_goods"): ?><a href="./exchange.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>" class="status"><?php echo $this->_var['lang']['order_is_exchange']; ?></a>
					<?php endif; ?><a href="user.php?act=message_list&order_id=<?php echo $this->_var['order']['order_id']; ?>" class="view_message dim_button"><span><?php echo $this->_var['lang']['business_message']; ?></span></a></td>
				</tr>
				<tr class="even">
					<th><?php echo $this->_var['lang']['detail_order_status']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><span class="status"><?php echo $this->_var['order']['order_status']; ?></span><span class="time"><?php echo $this->_var['order']['confirm_time']; ?></span></td>
				</tr>
				<tr class="odd">
					<th><?php echo $this->_var['lang']['detail_pay_status']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><span class="status"><?php echo $this->_var['order']['pay_status']; ?></span><?php if ($this->_var['order']['order_amount'] > 0): ?><a href="././pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['order_sn']; ?>&total_fee=<?php echo $this->_var['order']['formated_order_amount_wap']; ?>" style="display:block; width:100%; height:28px; line-height:28px; border-radius:5px; text-align:center; font-weight:normal; font-size:14px; color:#ffffff; background:#FF6600">去支付宝支付</a><?php endif; ?><span class="time"><?php echo $this->_var['order']['pay_time']; ?></span></td>
				</tr>
				<tr class="even<?php if (! $this->_var['order']['invoice_no'] && ! $this->_var['order']['to_buyer'] && ! $this->_var['virtual_card']): ?> last<?php endif; ?>">
					<th><?php echo $this->_var['lang']['detail_shipping_status']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><span class="status"><?php echo $this->_var['order']['shipping_status']; ?></span><span><?php echo $this->_var['order']['shipping_time']; ?></span></td>
				</tr>
				<?php if ($this->_var['order']['invoice_no']): ?>
				<tr class="odd<?php if (! $this->_var['order']['to_buyer'] && ! $this->_var['virtual_card']): ?> last<?php endif; ?>">
					<th><?php echo $this->_var['lang']['consignment']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last invoice_no"><?php echo $this->_var['order']['invoice_no']; ?></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_var['order']['to_buyer']): ?>
				<tr class="<?php if ($this->_var['order']['invoice_no']): ?>even<?php else: ?>odd<?php endif; ?><?php if (! $this->_var['virtual_card']): ?> last<?php endif; ?>">
					<th><?php echo $this->_var['lang']['detail_to_buyer']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><?php echo $this->_var['order']['to_buyer']; ?></td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_var['virtual_card']): ?>
				<tr class="odd last">
					<th><?php echo $this->_var['lang']['virtual_card_info']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last">
						<ul class="virtual_card clearfix">
							<?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');$this->_foreach['virtual_card'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['virtual_card']['total'] > 0):
    foreach ($_from AS $this->_var['vgoods']):
        $this->_foreach['virtual_card']['iteration']++;
?>
							<?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');$this->_foreach['vgoods_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vgoods_info']['total'] > 0):
    foreach ($_from AS $this->_var['card']):
        $this->_foreach['vgoods_info']['iteration']++;
?>
							<li>
								<span class="type"><?php echo $this->_var['vgoods']['goods_name']; ?></span>
								<span class="id"><strong><?php echo $this->_var['lang']['card_sn']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['card']['card_sn']; ?></em></span>
								<span class="serial_code"><strong><?php echo $this->_var['lang']['card_password']; ?><?php echo $this->_var['lang']['colon']; ?></strong><em><?php echo $this->_var['card']['card_password']; ?></em></span>
								<span class="expire_date"><strong><?php echo $this->_var['lang']['end_date']; ?><?php echo $this->_var['lang']['colon']; ?></strong><em><?php echo $this->_var['card']['end_date']; ?></em></span>
							</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<div style="height:12px; line-height:12px; clear:both;"></div>
		<table class="data_table">
			
			<thead>

				<tr>
					<th width="30%;"><?php echo $this->_var['lang']['goods_name']; ?></th>
					<th><?php echo $this->_var['lang']['goods_price']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?></th>
					<th><?php echo $this->_var['lang']['number']; ?></th>
					<th class="last"><?php echo $this->_var['lang']['subtotal']; ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
				<tr class="<?php echo $this->cycle(array('values'=>'odd,even')); ?><?php if (($this->_foreach['goods_list']['iteration'] == $this->_foreach['goods_list']['total'])): ?> last<?php endif; ?>">
					<td>
						<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
							
							<a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" class="name" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a>
							<span class="extra_info">
								<?php if ($this->_var['goods']['goods_attr']): ?><?php echo $this->_var['goods']['goods_attr']; ?><?php endif; ?>
								<?php if ($this->_var['goods']['is_shipping']): ?><em class="carriage_free"><?php echo $this->_var['lang']['carriage_free']; ?></em><?php endif; ?>
								<?php if ($this->_var['goods']['parent_id'] > 0): ?><em class="accessories"><?php echo $this->_var['lang']['accessories']; ?></em><?php endif; ?>
								<?php if ($this->_var['goods']['is_gift'] > 0): ?><em class="largess"><?php echo $this->_var['lang']['largess']; ?></em><?php endif; ?>
							</span>
						<?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
							<span class="name"><?php echo $this->_var['goods']['goods_name']; ?></span>
							<span class="package_goods_list"><?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');$this->_foreach['package_goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['package_goods_list']):
        $this->_foreach['package_goods_list']['iteration']++;
?><em><?php echo $this->_var['package_goods_list']['goods_name']; ?></em><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span>
						<?php else: ?>
							<?php echo $this->_var['goods']['goods_name']; ?>
						<?php endif; ?>
					</td>
					<td class="price"><?php echo $this->_var['goods']['goods_price']; ?></td>
					<td><?php echo $this->_var['goods']['goods_number']; ?></td>
					<td class="last price"><?php echo $this->_var['goods']['subtotal']; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5" class="last">
						<p><?php echo $this->_var['lang']['goods_all_price']; ?>
						<?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_goods_amount']; ?></span>
						<?php if ($this->_var['order']['discount'] > 0): ?>
						- <?php echo $this->_var['lang']['discount']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_discount']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['tax'] > 0): ?>
						+ <?php echo $this->_var['lang']['tax']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_tax']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['shipping_fee'] > 0): ?>
						+ <?php echo $this->_var['lang']['shipping_fee']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_shipping_fee']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['insure_fee'] > 0): ?>
						+ <?php echo $this->_var['lang']['insure_fee']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_insure_fee']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['pay_fee'] > 0): ?>
						+ <?php echo $this->_var['lang']['pay_fee']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_pay_fee']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['pack_fee'] > 0): ?>
						+ <?php echo $this->_var['lang']['pack_fee']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_pack_fee']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['card_fee'] > 0): ?>
						+ <?php echo $this->_var['lang']['card_fee']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_card_fee']; ?></span>
						<?php endif; ?>
						<?php if ($this->_var['order']['money_paid'] > 0): ?> - <?php echo $this->_var['lang']['order_money_paid']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_money_paid']; ?></span><?php endif; ?>
						<?php if ($this->_var['order']['surplus'] > 0): ?> - <?php echo $this->_var['lang']['use_surplus']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_surplus']; ?></span><?php endif; ?>
						<?php if ($this->_var['order']['integral_money'] > 0): ?> - <?php echo $this->_var['lang']['use_integral']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_integral_money']; ?></span><?php endif; ?>
						<?php if ($this->_var['order']['bonus'] > 0): ?> - <?php echo $this->_var['lang']['use_bonus']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_bonus']; ?></span><?php endif; ?></p>
						<p><?php echo $this->_var['lang']['order_amount']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_order_amount']; ?></span><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?></p>
						<?php if ($this->_var['allow_edit_surplus']): ?>
						
							<form action="user.php" method="post" name="formFee" id="formFee">
                            <div class=" ub-ac ub-pc font12" style="overflow: hidden;">
                   <label> 
                   <div class="all_clor dizhji lin_qu ufl mar-top mar-left">
                        <?php echo $this->_var['lang']['use_more_surplus']; ?>：
                    </div>
                    <div class=" c-wh wap_input_bor ufl mar-top mar-right1" style="width:50%;">
                        <input name="surplus" value="0" type="text" class="c-f-text"/><?php echo $this->_var['max_surplus']; ?>
                    </div>
                    </label>
                </div>                            
                          
					<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>"  class="tx-c c-org-g buttonHeight mar-top2 t-wh  font18" style="margin-top:30px;width:98%; padding:0 ;"/>
								<input type="hidden" name="act" value="act_edit_surplus">
								<input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>">
							</form>
						
						<?php endif; ?>
					</td>
				</tr>
			</tfoot>
		</table>
 </div>
  <div id="user_ddxq_2" class="goods_list" style="margin-top:0; display:none">
  <?php if ($this->_var['order']['allow_update_address'] > 0): ?>
   <section class="innercontent">
		<form action="user.php" method="post" name="formAddress" class="form address_form">
         <div class="field else">
                        <div class="c-form-search st">
					<input type="text" name="consignee" value="<?php echo htmlspecialchars($this->_var['order']['consignee']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['consignee_name']; ?>"/>
                    </div>
                </div>
			  <div class="field else">
                        <div class="c-form-search st">
					<input  type="email" name="email" value="<?php echo htmlspecialchars($this->_var['order']['email']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['email_address']; ?>"/>
                    </div>
               </div>
			<?php if ($this->_var['order']['exist_real_goods']): ?>
              <div class="field else">
                        <div class="c-form-search st">
					<input type="text" name="address" value="<?php echo htmlspecialchars($this->_var['order']['address']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['detailed_address']; ?>"/>
                    </div>
               </div>
			  <div class="field else">
                        <div class="c-form-search st">
					<input type="number" name="zipcode" value="<?php echo htmlspecialchars($this->_var['order']['zipcode']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['postalcode']; ?>"/>
                    </div>	
               </div>		
			<?php endif; ?>
             <div class="field else">
                        <div class="c-form-search st">
					<input type="tel" name="tel" value="<?php echo htmlspecialchars($this->_var['order']['tel']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['phone']; ?>"/>
                    </div>	
               </div>	
			  <div class="field else">
                        <div class="c-form-search st">
					<input type="tel" name="mobile" value="<?php echo htmlspecialchars($this->_var['order']['mobile']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['backup_phone']; ?>"/>
                    </div>				    
               </div>
			<?php if ($this->_var['order']['exist_real_goods']): ?>
              <div class="field else">
                        <div class="c-form-search st">
					<input type="text" name="sign_building" value="<?php echo htmlspecialchars($this->_var['order']['sign_building']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['sign_building']; ?>"/>
                    </div>	
               </div>
               
            <div class="field else">
                        <div class="c-form-search st">
					<input type="text" name="best_time" value="<?php echo htmlspecialchars($this->_var['order']['best_time']); ?>" class="c-f-text" placeholder="<?php echo $this->_var['lang']['deliver_goods_time']; ?>"/>
                    </div>	
               </div>			
			<?php endif; ?>
             <div class="field submit-btn">
				<input type="submit" value="<?php echo $this->_var['lang']['update_address']; ?>" class="c-btn-oran-big1"/>
                </div>
				<input type="hidden" name="act" value="save_order_address">
				<input type="hidden" name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>">
		</form>
   </section>	
		<?php else: ?>
		<table class="data_table">
		
			<tbody>
				<tr class="odd">
					<th><?php echo $this->_var['lang']['consignee_name']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td><?php echo $this->_var['order']['consignee']; ?></td>
					<th><?php echo $this->_var['lang']['email_address']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><?php echo $this->_var['order']['email']; ?></td>
				</tr>
				<?php if ($this->_var['order']['exist_real_goods']): ?>
				<tr class="even">
					<th><?php echo $this->_var['lang']['detailed_address']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td colspan="3" class="last"><?php echo $this->_var['order']['address']; ?><?php if ($this->_var['order']['zipcode']): ?>[<?php echo $this->_var['lang']['postalcode']; ?><?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['zipcode']; ?>]<?php endif; ?></td>
				</tr>
				<?php endif; ?>
				<tr class="<?php if ($this->_var['order']['exist_real_goods']): ?>odd<?php else: ?>even last<?php endif; ?>">
					<th><?php echo $this->_var['lang']['phone']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td><?php echo $this->_var['order']['tel']; ?></td>
					<th><?php echo $this->_var['lang']['backup_phone']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><?php echo $this->_var['order']['mobile']; ?></td>
				</tr>
				<?php if ($this->_var['order']['exist_real_goods']): ?>
				<tr class="even last">
					<th><?php echo $this->_var['lang']['sign_building']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td><?php echo $this->_var['order']['sign_building']; ?></td>
					<th><?php echo $this->_var['lang']['deliver_goods_time']; ?><?php echo $this->_var['lang']['colon']; ?></th>
					<td class="last"><?php echo $this->_var['order']['best_time']; ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
  </div>
   <div id="user_ddxq_3" class="goods_list" style="margin-top:0; display:none">
      <div class="notice_box ">
			<p><?php echo $this->_var['lang']['select_payment']; ?><?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['order']['pay_name']; ?></p>
			<p><?php echo $this->_var['lang']['order_amount']; ?><?php echo $this->_var['lang']['colon']; ?><span class="price"><?php echo $this->_var['order']['formated_order_amount']; ?></span></p>
			<p><?php echo $this->_var['order']['pay_desc']; ?></p>
		</div>
		<?php if ($this->_var['payment_list']): ?>
		<div class="other_payment">
			<form name="payment" method="post" action="user.php">
				<?php echo $this->_var['lang']['change_payment']; ?><?php echo $this->_var['lang']['colon']; ?>
				<select name="pay_id">
				<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
				<option value="<?php echo $this->_var['payment']['pay_id']; ?>">
				<?php echo $this->_var['payment']['pay_name']; ?>(<?php echo $this->_var['lang']['pay_fee']; ?>:<?php echo $this->_var['payment']['format_pay_fee']; ?>)
				</option>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</select>
				<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>"  class="tx-c c-org-g buttonHeight mar-top2 t-wh font18 mar7" style="margin-top:30px;width:98%;  -webkit-appearance: none;"/>
				<input type="hidden" name="act" value="act_edit_payment">
				<input type="hidden" name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>">
			</form>
		</div>
		<?php endif; ?>
   </div>
    <div id="user_ddxq_4" class="goods_list" style="margin-top:0; display:none">
       <ul class="text_list">
			<?php if ($this->_var['order']['shipping_id'] > 0): ?><li class="first"><strong><?php echo $this->_var['lang']['shipping']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['shipping_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['pay_name']): ?><li<?php if ($this->_var['order']['shipping_id'] <= 0): ?> class="first"<?php endif; ?>><strong><?php echo $this->_var['lang']['payment']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['pay_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['pack_name']): ?><li><strong><?php echo $this->_var['lang']['use_pack']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['pack_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['card_name']): ?><li><strong><?php echo $this->_var['lang']['use_card']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['card_name']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['card_message']): ?><li><strong><?php echo $this->_var['lang']['bless_note']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['card_message']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['integral'] > 0): ?><li><strong><?php echo $this->_var['lang']['use_integral']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['integral']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['inv_payee'] && $this->_var['order']['inv_content']): ?>
				<li><strong><?php echo $this->_var['lang']['invoice_title']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['inv_payee']; ?></li>
				<li><strong><?php echo $this->_var['lang']['invoice_content']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['inv_content']; ?></li>
			<?php endif; ?>
			<?php if ($this->_var['order']['postscript']): ?><li><strong><?php echo $this->_var['lang']['order_postscript']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['postscript']; ?></li><?php endif; ?>
			<?php if ($this->_var['order']['how_oos_name']): ?><li><strong><?php echo $this->_var['lang']['booking_process']; ?><?php echo $this->_var['lang']['colon']; ?></strong><?php echo $this->_var['order']['how_oos_name']; ?></li><?php endif; ?>
		</ul>
    </div>
 </div>             