<?php
/* Smarty version 4.2.1, created on 2022-11-12 20:49:40
  from 'D:\Studia\V. sem\AS\htdocs\php_06_kg_ns_al\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636ff8d47913e2_19391099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4cf241a20fc11697b905ebb84e2e5b58ef0075f' => 
    array (
      0 => 'D:\\Studia\\V. sem\\AS\\htdocs\\php_06_kg_ns_al\\app\\views\\templates\\main.tpl',
      1 => 1668280472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636ff8d47913e2_19391099 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
								<p>Kolejne rozszerzenie dla aplikacji z jednym "punktem wejscia".<br />
								Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.</p>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1335485022636ff8d4790960_32627642', 'content');
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
class Block_1335485022636ff8d4790960_32627642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1335485022636ff8d4790960_32627642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
