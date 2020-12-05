<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 14:19:01
  from 'C:\xampp\htdocs\getideashop\modules\midtranspay\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb3465801426_23538819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '640360e2ae59b6de8fb2aa303342b9c0ce1b9956' => 
    array (
      0 => 'C:\\xampp\\htdocs\\getideashop\\modules\\midtranspay\\views\\templates\\hook\\infos.tpl',
      1 => 1607152045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb3465801426_23538819 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-info">
<img src="../modules/midtranspay/Midtrans.png" style="float:left; margin-right:15px;">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by Midtrans.",'mod'=>'midtranspay'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Please consult your Midtrans Merchant Administration Portal for settings.",'mod'=>'midtranspay'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
