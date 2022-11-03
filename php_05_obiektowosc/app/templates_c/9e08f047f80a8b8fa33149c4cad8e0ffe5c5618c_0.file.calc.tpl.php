<?php
/* Smarty version 4.2.1, created on 2022-11-02 23:45:13
  from 'D:\Studia\V. sem\AS\htdocs\php_04_szablonowanie_smarty\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362f2f9756d36_24400740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e08f047f80a8b8fa33149c4cad8e0ffe5c5618c' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_04_szablonowanie_smarty\\app\\calc.tpl',
      1 => 1667429103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362f2f9756d36_24400740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5691988816362f2f9747d12_69788175', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_5691988816362f2f9747d12_69788175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5691988816362f2f9747d12_69788175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center"></h2>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">
		<div class="row">
			<div class="col-12 col-12-mobile">
				<label for="id_amount">Kwota zobowiązania: </label>
				<input id="id_amount" type="text" placeholder="Kwota" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
" /><br />
			</div>
			<div class="col-12 col-12-mobile">
				<label for="id_years">Długość zobowiązania w latach: </label>
				<input id="id_years" type="text" placeholder="Rok" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
" /><br />
			</div>
			<div class="col-12 col-12-mobile">	
				<label for="id_rate">Oprocentowanie: </label>
				<input id="id_rate" type="text" placeholder="Procent" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['rate'];?>
" /><br />
			</div>
			<div class="col-12">
				<input type="submit" value="Oblicz" />
			</div>
		</div>		
	</form>
	

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Rata miesięczna:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
