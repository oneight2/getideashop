<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-05 14:18:49
  from 'C:\xampp\htdocs\getideashop\admin1\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcb3459df3e48_24899429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8793a0fd0f9e552afa7d77e8dcf6bd86607796b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\getideashop\\admin1\\themes\\default\\template\\content.tpl',
      1 => 1607151447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcb3459df3e48_24899429 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
