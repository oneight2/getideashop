<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 14:15:14
  from 'module:midtranspayviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb3382005174_85543996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f59e06d43c51abd45d04b382603fc54841925a' => 
    array (
      0 => 'module:midtranspayviewstemplates',
      1 => 1607152045,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb3382005174_85543996 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MT_DISPLAY_DESCRIPTION']->value) {?>
<section>
  <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['MT_DISPLAY_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8');?>
</p>
</section>
<?php }
}
}
