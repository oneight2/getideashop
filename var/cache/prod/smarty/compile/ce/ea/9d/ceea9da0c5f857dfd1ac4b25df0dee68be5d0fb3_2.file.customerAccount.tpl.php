<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 14:17:20
  from 'C:\xampp\htdocs\getideashop\modules\psgdpr\views\templates\front\customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb34001c0d59_02841479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceea9da0c5f857dfd1ac4b25df0dee68be5d0fb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\getideashop\\modules\\psgdpr\\views\\templates\\front\\customerAccount.tpl',
      1 => 1607151707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb34001c0d59_02841479 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
