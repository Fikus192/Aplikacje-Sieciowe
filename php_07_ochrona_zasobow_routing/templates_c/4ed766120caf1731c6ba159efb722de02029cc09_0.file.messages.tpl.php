<?php
/* Smarty version 4.2.1, created on 2022-11-17 16:37:19
  from 'D:\Studia\V. sem\AS\htdocs\php_07_ochrona_zasobow_routing\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376552f18f6c5_28799179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed766120caf1731c6ba159efb722de02029cc09' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_07_ochrona_zasobow_routing\\app\\views\\templates\\messages.tpl',
      1 => 1668699420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376552f18f6c5_28799179 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="err">
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="inf">
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
</div>
<?php }?>

</div><?php }
}
