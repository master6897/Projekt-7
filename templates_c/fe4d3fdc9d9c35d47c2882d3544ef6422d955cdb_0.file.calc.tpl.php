<?php
/* Smarty version 3.1.39, created on 2021-03-29 21:12:37
  from 'E:\xampp\htdocs\Projekt-6\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606226a571f3c9_45802445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4d3fdc9d9c35d47c2882d3544ef6422d955cdb' => 
    array (
      0 => 'E:\\xampp\\htdocs\\Projekt-6\\app\\views\\calc.tpl',
      1 => 1617045154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606226a571f3c9_45802445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1131366118606226a5716cd2_93448081', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1131366118606226a5716cd2_93448081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1131366118606226a5716cd2_93448081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
calcCompute" method="post" class="pure-form pure-form-stacked">
            <fieldset>
                <label>Proszę podać kwotę kredytu:</label>
                <input type="text" name="credits" value=<?php echo $_smarty_tpl->tpl_vars['credits']->value;?>
></input>
                <label>Prosze podać na ile lat:</label>
                <input type="text" name="years" value=<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
></input>
                <label>Proszę podać oprocentowanie kredytu (z '.' w przypadku oprocentowania po przecinku, np. (8.5)):</label>
                <input type="text" name="percent" value=<?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
></input>
                <input type="submit" value="Oblicz!" class="pure-button pure-button-primary"></input>
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
}
if ((isset($_smarty_tpl->tpl_vars['rata']->value))) {?>
    <h3>Twoja miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>
</h3>
    <h3>Całkowity koszt kredytu wynosi: <?php echo $_smarty_tpl->tpl_vars['cost']->value;?>
</h3>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
