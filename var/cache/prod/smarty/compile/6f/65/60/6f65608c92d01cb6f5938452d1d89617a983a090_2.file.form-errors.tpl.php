<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 14:15:13
  from 'C:\xampp\htdocs\getideashop\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb3381eaa075_89446471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f65608c92d01cb6f5938452d1d89617a983a090' => 
    array (
      0 => 'C:\\xampp\\htdocs\\getideashop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1607151450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb3381eaa075_89446471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11595330025fcb3381ea87d0_07558324', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_11595330025fcb3381ea87d0_07558324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_11595330025fcb3381ea87d0_07558324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
