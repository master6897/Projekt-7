<?php
/* Smarty version 3.1.39, created on 2021-03-29 20:59:52
  from 'E:\xampp\htdocs\Projekt-6\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606223a8ee9557_11903719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '662a0c1b1bf150046dc80286c9c81fe128a2e717' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekt-6\\app\\views\\templates\\main.tpl',
      1 => 1616197634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606223a8ee9557_11903719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
					<header id="header" class="alt">
						<span class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/images/calculator-technology-svgrepo-com.png" alt="" /></span>
                                                <h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
					</header>
     <div id="main"> 
         <section id="first">
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1235006134606223a8ee88d5_02626448', 'content');
?>

</section>
</div>
<footer id="footer">
						<section>
							<h2>Aliquam sed mauris</h2>
							<p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
							<ul class="actions">
								<li><a href="#" class="button">Dowiedz się więcej</a></li>
							</ul>
						</section>
						<section>
							<h2>Dane kontaktowe</h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['page_localization']->value;?>
</dd>
								<dt>Phone</dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['page_phone']->value;?>
</dd>
								<dt>Email</dt>
								<dd><a href="#"><?php echo $_smarty_tpl->tpl_vars['page_email']->value;?>
</a></dd>
							</dl>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy; <?php echo $_smarty_tpl->tpl_vars['page_person']->value;?>
</p>
					</footer>
<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
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
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_1235006134606223a8ee88d5_02626448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1235006134606223a8ee88d5_02626448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
