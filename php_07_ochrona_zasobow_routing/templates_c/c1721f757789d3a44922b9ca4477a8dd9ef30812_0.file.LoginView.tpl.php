<?php
/* Smarty version 4.2.1, created on 2022-11-17 16:29:22
  from 'D:\Studia\V. sem\AS\htdocs\php_07_ochrona_zasobow_routing\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376535201dd92_77544596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1721f757789d3a44922b9ca4477a8dd9ef30812' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_07_ochrona_zasobow_routing\\app\\views\\LoginView.tpl',
      1 => 1668695487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6376535201dd92_77544596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157031547663765352017de0_07850330', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_157031547663765352017de0_07850330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157031547663765352017de0_07850330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Logowanie do systemu</h2>	

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<fieldset>
	<div class="row">
        <div class="col-12 col-12-mobile">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="col-12 col-12-mobile">
			<label for="id_pass">Password: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="col-12">
			<input type="submit" value="Zaloguj" />
		</div>
	</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
