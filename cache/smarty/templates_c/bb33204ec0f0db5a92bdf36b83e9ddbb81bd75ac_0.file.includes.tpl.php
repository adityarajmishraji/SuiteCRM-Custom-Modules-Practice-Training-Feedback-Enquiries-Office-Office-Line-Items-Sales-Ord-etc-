<?php
/* Smarty version 4.5.3, created on 2025-09-05 09:17:35
  from 'C:\xampp\htdocs\Suitecrm\themes\SuiteP\modules\ModuleBuilder\tpls\includes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ba5d570ab187_89787559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb33204ec0f0db5a92bdf36b83e9ddbb81bd75ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\themes\\SuiteP\\modules\\ModuleBuilder\\tpls\\includes.tpl',
      1 => 1754026647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba5d570ab187_89787559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/JSTransaction.js'),$_smarty_tpl);?>
" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var jstransaction = new JSTransaction();
	
	if (SUGAR.themes.tempHideLeftCol){
    	SUGAR.themes.tempHideLeftCol();
    }
    
<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>"include/ytree/TreeView/css/folders/tree.css"),$_smarty_tpl);?>
" />

<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2PanelDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2RowDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2FieldDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studiotabgroups.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2ListDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>

<!--end ModuleBuilder Assistant!-->
<?php echo '<script'; ?>
 type="text/javascript" language="Javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/ModuleBuilder.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="Javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/SimpleList.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/JSTransaction.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/tiny_mce/tiny_mce.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>"modules/ModuleBuilder/tpls/MB.css"),$_smarty_tpl);?>
" /><?php }
}
