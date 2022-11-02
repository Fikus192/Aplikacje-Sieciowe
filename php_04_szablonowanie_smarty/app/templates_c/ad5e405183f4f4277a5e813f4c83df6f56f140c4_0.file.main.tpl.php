<?php
/* Smarty version 4.2.1, created on 2022-11-02 17:44:40
  from 'D:\Studia\V. sem\AS\htdocs\php_04_szablonowanie_smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63629e78dd8de2_70463790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad5e405183f4f4277a5e813f4c83df6f56f140c4' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_04_szablonowanie_smarty\\templates\\main.tpl',
      1 => 1667407468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63629e78dd8de2_70463790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kalkulator Kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/IMG-8162.jpg" alt="" /></span>
							<h1 id="title">Mateusz Ratajczak</h1>
							<p>Informatyk</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Strona tytułowa</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Formularz Kredytowy</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><strong>Kalkulator Kredytowy</strong><br />
                                </h2>
								<p>Proste szablonowanie oparte o<br />
								biliotekę SMARTY.</p>
							</header>

							<footer>
								<a href="#contact" class="button scrolly">Przejdź do kalkulatora</a>
							</footer>

						</div>
					</section>

				

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Kalkulator Kredytowy</h2>
							</header>

							<p>Wprowadź kwotę kredytu, długość zobowiązania kredytowego w latach oraz procent odsetek do spłacenia dodatkowo</p>

						</div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133368000663629e78dd8619_84872312', 'content');
?>


					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><br />
                        <a href="http://html5up.net/license">Free</a> responsive site template.
					</ul>

			</div> 
        

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_133368000663629e78dd8619_84872312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_133368000663629e78dd8619_84872312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
