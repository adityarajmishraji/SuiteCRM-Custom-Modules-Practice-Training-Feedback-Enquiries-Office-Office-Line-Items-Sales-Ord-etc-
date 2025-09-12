<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:24
  from 'C:\xampp\htdocs\Suitecrm\include\SugarFields\Fields\Currency\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b983188771c6_00213413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a6397bf913826d4661a6336ac6948fa2886cac0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\SugarFields\\Fields\\Currency\\ListView.tpl',
      1 => 1754026635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b983188771c6_00213413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_currency_format.php','function'=>'smarty_function_sugar_currency_format',),));
?>

<?php echo smarty_function_sugar_currency_format(array('var'=>$_smarty_tpl->tpl_vars['amount']->value,'currency_id'=>$_smarty_tpl->tpl_vars['currency_id']->value,'currency_symbol'=>$_smarty_tpl->tpl_vars['currency_symbol']->value),$_smarty_tpl);
}
}
