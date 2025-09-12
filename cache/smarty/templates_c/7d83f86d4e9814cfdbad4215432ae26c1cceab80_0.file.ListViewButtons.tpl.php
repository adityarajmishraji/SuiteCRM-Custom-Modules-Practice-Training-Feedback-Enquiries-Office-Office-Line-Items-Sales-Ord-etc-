<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:23
  from 'C:\xampp\htdocs\Suitecrm\include\ListView\ListViewButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b98317233c25_94536377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d83f86d4e9814cfdbad4215432ae26c1cceab80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\ListView\\ListViewButtons.tpl',
      1 => 1754026637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b98317233c25_94536377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
if ((isset($_smarty_tpl->tpl_vars['form']->value['buttons']))) {?>
<ul class="list-view-action-buttons">

    <?php echo smarty_function_counter(array('assign'=>"num_action_buttons",'start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php if (count($_smarty_tpl->tpl_vars['form']->value['buttons']) > $_smarty_tpl->tpl_vars['num_action_buttons']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['button']->value) && $_smarty_tpl->tpl_vars['button']->value['customCode']) {?><li><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['button']->value['customCode'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?> </li><?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</ul>
<?php }
}
}
