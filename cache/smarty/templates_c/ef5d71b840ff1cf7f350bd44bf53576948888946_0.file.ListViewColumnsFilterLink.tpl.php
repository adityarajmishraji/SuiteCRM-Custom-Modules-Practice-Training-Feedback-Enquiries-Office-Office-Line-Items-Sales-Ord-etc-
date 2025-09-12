<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:24
  from 'C:\xampp\htdocs\Suitecrm\include\ListView\ListViewColumnsFilterLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b983183c9815_71134981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5d71b840ff1cf7f350bd44bf53576948888946' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\ListView\\ListViewColumnsFilterLink.tpl',
      1 => 1754026637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b983183c9815_71134981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<ul class="clickMenu selectmenu SugarActionMenu columnsFilterLink listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
" onclick="columnsFilter.onOpen();">
    <li class="sugar_action_button">
        <a href="#" class="glyphicon glyphicon-th-list" data-toggle="modal" data-target=".modal-columns-filter" title='<?php echo smarty_function_sugar_translate(array('label'=>"LBL_COLUMN_CHOOSER"),$_smarty_tpl);?>
'></a>
    </li>
</ul>
<?php }
}
