<?php
/* Smarty version 3.1.39, created on 2021-04-03 14:09:46
  from 'E:\xampp\htdocs\Projekt-7\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60685b0a520ef2_41699017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58ac23af3b67124528dc970b33777b59b22f2430' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekt-7\\app\\views\\LoginView.tpl',
      1 => 1617451727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60685b0a520ef2_41699017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148629064460685b0a5143a6_48014171', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_148629064460685b0a5143a6_48014171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148629064460685b0a5143a6_48014171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
login" method="post" class="pure-form pure-form-stacked">
            <fieldset>
                <label>Proszę podać login:</label>
                <input type="text" name="login" placeholder="login"></input>
                <label>Prosze podać hasło:</label>
                <input type="password" name="password"></input>
                <input type="submit" value="Zaloguj się!" class="pure-button pure-button-primary"></input>
            </fieldset>
        </form>
<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'mess');
$_smarty_tpl->tpl_vars['mess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mess']->value) {
$_smarty_tpl->tpl_vars['mess']->do_else = false;
?>
        <h3 style="color:red;"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h3>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php
}
}
/* {/block 'content'} */
}
