<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:24
  from 'C:\xampp\htdocs\Suitecrm\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b9831860b847_26867677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '920b47c0c55ffc1835fd233c8f2bc88da68d4c28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1754026635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b9831860b847_26867677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
