<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:16
  from 'C:\xampp\htdocs\Suitecrm\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b98310ba99e9_73720426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ad64078bebf37f8758a947d67ddc956ec573b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1754026651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b98310ba99e9_73720426 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
