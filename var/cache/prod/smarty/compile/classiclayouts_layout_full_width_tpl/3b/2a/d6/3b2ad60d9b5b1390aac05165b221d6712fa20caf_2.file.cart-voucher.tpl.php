<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 14:15:10
  from 'C:\xampp\htdocs\getideashop\themes\classic\templates\checkout\_partials\cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb337e52c2d2_80363458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b2ad60d9b5b1390aac05165b221d6712fa20caf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\getideashop\\themes\\classic\\templates\\checkout\\_partials\\cart-voucher.tpl',
      1 => 1607151450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb337e52c2d2_80363458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20940650565fcb337e5239e7_64918850', 'cart_voucher');
?>

<?php }
}
/* {block 'cart_voucher_list'} */
class Block_17852326265fcb337e5242b1_84715576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="promo-name card-block">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <div class="float-xs-right">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php if (isset($_smarty_tpl->tpl_vars['voucher']->value['code']) && $_smarty_tpl->tpl_vars['voucher']->value['code'] !== '') {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                      <?php }?>
                  </div>
                </li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_form'} */
class Block_11528098115fcb337e5280a8_77897597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="addDiscount" value="1">
                <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
                <button type="submit" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
              </form>
            <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher_notifications'} */
class Block_954755635fcb337e5293d5_54642165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="alert alert-danger js-error" role="alert">
                <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
              </div>
            <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher'} */
class Block_20940650565fcb337e5239e7_64918850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_20940650565fcb337e5239e7_64918850',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_17852326265fcb337e5242b1_84715576',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_11528098115fcb337e5280a8_77897597',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_954755635fcb337e5293d5_54642165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-promo">
      <div class="cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17852326265fcb337e5242b1_84715576', 'cart_voucher_list', $this->tplIndex);
?>

        <?php }?>

        <p class="promo-code-button display-promo<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> with-discounts<?php }?>">
          <a class="collapse-button" href="#promo-code">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

          </a>
        </p>

        <div id="promo-code" class="collapse<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> in<?php }?>">
          <div class="promo-code">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11528098115fcb337e5280a8_77897597', 'cart_voucher_form', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_954755635fcb337e5293d5_54642165', 'cart_voucher_notifications', $this->tplIndex);
?>


            <a class="collapse-button promo-code-button cancel-promo" role="button" data-toggle="collapse" data-target="#promo-code" aria-expanded="true" aria-controls="promo-code">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

            </a>
          </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </p>
          <ul class="js-discount card-block promo-discounts">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
?>
              <li class="cart-summary-line">
                <span class="label">
                  <span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php }?>
      </div>
    </div>
  <?php
}
}
/* {/block 'cart_voucher'} */
}
