<?php
/* Smarty version 4.2.1, created on 2022-11-03 01:00:36
  from 'D:\Studia\V. sem\AS\htdocs\php_05_obiektowosc\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636304a461f4f9_87088223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b0ed86bdbe16f5008c1d4cc507ddca4f69d544' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_05_obiektowosc\\app\\CalcView.tpl',
      1 => 1667433633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636304a461f4f9_87088223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_668885828636304a460ffa4_66435536', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_668885828636304a460ffa4_66435536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_668885828636304a460ffa4_66435536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center"></h2>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">
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
	

<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
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
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
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
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Rata miesięczna: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
