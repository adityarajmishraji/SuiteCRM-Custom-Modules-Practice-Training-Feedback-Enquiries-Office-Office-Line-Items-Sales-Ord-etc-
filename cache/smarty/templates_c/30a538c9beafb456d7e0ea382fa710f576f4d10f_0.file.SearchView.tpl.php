<?php
/* Smarty version 4.5.3, created on 2025-09-05 09:13:52
  from 'C:\xampp\htdocs\Suitecrm\include\SugarFields\Fields\Relate\SearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ba5c7816d094_14497795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a538c9beafb456d7e0ea382fa710f576f4d10f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\SugarFields\\Fields\\Relate\\SearchView.tpl',
      1 => 1754026635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba5c7816d094_14497795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

*}
<input type="text" name="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
"  class=<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['class'])) {?>"sqsEnabled"<?php } else { ?> "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['class'];?>
" <?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" size="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['size'];?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
" title='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
' autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['readOnly'];?>
 <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
<input type="hidden" <?php if ($_smarty_tpl->tpl_vars['displayParams']->value['useIdSearch']) {?>name="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'name'),$_smarty_tpl);?>
"<?php }?> id="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
">
<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['hideButtons'])) {?>
<span class="id-ff multiple">
<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['clearOnly'])) {?>
<button type="button" name="btn_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['selectOnly'])) {?> firstChild<?php }?>" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("<?php echo smarty_function_sugarvar(array('key'=>'module'),$_smarty_tpl);?>
", 600, 400, "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['initial_filter'];?>
", true, false, <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['popupData'];?>
, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><?php }
if (empty($_smarty_tpl->tpl_vars['displayParams']->value['selectOnly'])) {?><button type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['clearOnly'])) {?> lastChild<?php }?>" onclick="this.form.<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'name'),$_smarty_tpl);?>
.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
<?php }?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['allowNewValue'])) {?>
<input type="hidden" name="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
_allow_new_value" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
_allow_new_value" value="true">
<?php }
}
}
