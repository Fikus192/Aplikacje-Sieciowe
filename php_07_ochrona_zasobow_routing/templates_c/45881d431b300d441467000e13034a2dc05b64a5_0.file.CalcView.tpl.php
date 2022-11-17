<?php
/* Smarty version 4.2.1, created on 2022-11-17 16:37:19
  from 'D:\Studia\V. sem\AS\htdocs\php_07_ochrona_zasobow_routing\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376552f104e21_12337328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45881d431b300d441467000e13034a2dc05b64a5' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_07_ochrona_zasobow_routing\\app\\views\\CalcView.tpl',
      1 => 1668699433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6376552f104e21_12337328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10303068936376552f0f9d90_75685217', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10303068936376552f0f9d90_75685217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10303068936376552f0f9d90_75685217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<span style="float:bottom;">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
		<div class="row">
			<div class="col-12 col-12-mobile">
				<label for="id_amount">Kwota zobowiązania: </label>
				<input id="id_amount" type="text" placeholder="Kwota" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" /><br />
			</div>
			<div class="col-12 col-12-mobile">
				<label for="id_years">Długość zobowiązania w latach: </label>
				<input id="id_years" type="text" placeholder="Rok" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" /><br />
			</div>
			<div class="col-12 col-12-mobile">	
				<label for="id_rate">Oprocentowanie: </label>
				<input id="id_rate" type="text" placeholder="Procent" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rate;?>
" /><br />
			</div>
			<div class="col-12">
				<input type="submit" value="Oblicz" />
			</div>
		</div>		
	</form>
	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
<div class="res">
	Rata miesieczna: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>
	
<?php
}
}
/* {/block 'content'} */
}
