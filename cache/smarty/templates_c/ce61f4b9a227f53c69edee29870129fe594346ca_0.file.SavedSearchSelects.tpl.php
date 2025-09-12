<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:10
  from 'C:\xampp\htdocs\Suitecrm\modules\SavedSearch\SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b9830abc1543_87383757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce61f4b9a227f53c69edee29870129fe594346ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\modules\\SavedSearch\\SavedSearchSelects.tpl',
      1 => 1754026537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b9830abc1543_87383757 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
