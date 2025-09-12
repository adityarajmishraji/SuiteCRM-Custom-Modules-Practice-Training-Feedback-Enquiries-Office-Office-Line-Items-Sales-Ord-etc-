<?php
/* Smarty version 4.5.3, created on 2025-09-04 17:46:11
  from 'C:\xampp\htdocs\Suitecrm\include\SugarFields\Fields\Int\RangeSearchForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b9830b8647c1_24502398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce95d65f28c616b940d0a6e011b1443b8f3d381e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\include\\SugarFields\\Fields\\Int\\RangeSearchForm.tpl',
      1 => 1754026636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b9830b8647c1_24502398 (Smarty_Internal_Template $_smarty_tpl) {
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
{if strlen(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}

<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
{assign var="id" value=<?php echo smarty_function_sugarvar(array('key'=>'name','string'=>true),$_smarty_tpl);?>
 }
<?php } else { ?>
{assign var="id" value=<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];?>
 }
<?php }?>

{if isset($smarty.request.<?php echo $_smarty_tpl->tpl_vars['id_range_choice']->value;?>
)}
{assign var="starting_choice" value=$smarty.request.<?php echo $_smarty_tpl->tpl_vars['id_range_choice']->value;?>
}
{else}
{assign var="starting_choice" value="="}
{/if}

<?php echo '<script'; ?>
 type='text/javascript'>
function {$id}_range_change(val) 
{ldelim}
  calculate_between = (val == 'between');

  //Clear the values depending on the operation
  if(calculate_between) {ldelim}
     document.getElementById("range_{$id}").value = '';   
  {rdelim} else {ldelim}
     document.getElementById("start_range_{$id}").value = '';
     document.getElementById("end_range_{$id}").value = '';
  {rdelim}
 
  document.getElementById("{$id}_range_div").style.display = calculate_between ? 'none' : '';
  document.getElementById("{$id}_between_range_div").style.display = calculate_between ? '' : 'none';
{rdelim}

var {$id}_range_reset = function()
{ldelim}
{$id}_range_change('=');
{rdelim}

YAHOO.util.Event.onDOMReady(function() {ldelim}
if(document.getElementById('search_form_clear'))
{ldelim}
YAHOO.util.Event.addListener('search_form_clear', 'click', {$id}_range_reset);
{rdelim}

{rdelim});

YAHOO.util.Event.onDOMReady(function() {ldelim}
 	 if(document.getElementById('search_form_clear_advanced'))
 	 {ldelim}
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', {$id}_range_reset);
 	 {rdelim}
{rdelim});

YAHOO.util.Event.onDOMReady(function() {ldelim}
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {ldelim}
         YAHOO.util.Event.addListener('search_form_submit', 'click',{$id}_range_validate);
     {rdelim}
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {ldelim}
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',{$id}_range_validate);
    {rdelim}

{rdelim});

// this function is specific to range searches and will check that both start and end range fields have been
// filled prior to submitting search form.  It is called from the listener added above.
function {$id}_range_validate(e){ldelim}
    if (
            (document.getElementById("start_range_{$id}").value.length >0 && document.getElementById("end_range_{$id}").value.length == 0)
          ||(document.getElementById("end_range_{$id}").value.length >0 && document.getElementById("start_range_{$id}").value.length == 0)
       )
    {ldelim}
        e.preventDefault();
        alert('{$APP.LBL_CHOOSE_START_AND_END_ENTRIES}');
        if (document.getElementById("start_range_{$id}").value.length == 0) {ldelim}
            document.getElementById("start_range_{$id}").focus();
        {rdelim}
        else {ldelim}
            document.getElementById("end_range_{$id}").focus();
        {rdelim}
    {rdelim}

{rdelim}
<?php echo '</script'; ?>
>

<span style="white-space:nowrap !important;">
<select id="{$id}_range_choice" name="{$id}_range_choice" style="width:190px !important;" onchange="{$id}_range_change(this.value);">
{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=$starting_choice}
</select>
<div id="{$id}_range_div" style="{if $starting_choice=='between'}display:none;{else}display:'';{/if}">
<input type='text' name='range_{$id}' id='range_{$id}' style='width:75px !important;' size='<?php echo (($tmp = $_smarty_tpl->tpl_vars['displayParams']->value['size'] ?? null)===null||$tmp==='' ? 20 ?? null : $tmp);?>
' 
    <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['maxlength']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['maxlength'];?>
'<?php }?> 
    value='{if empty($smarty.request.<?php echo $_smarty_tpl->tpl_vars['id_range']->value;?>
) && !empty($smarty.request.<?php echo $_smarty_tpl->tpl_vars['original_id']->value;?>
)}{$smarty.request.<?php echo $_smarty_tpl->tpl_vars['original_id']->value;?>
}{else}{$smarty.request.<?php echo $_smarty_tpl->tpl_vars['id_range']->value;?>
}{/if}' tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
</div>
<div id="{$id}_between_range_div" style="{if $starting_choice=='between'}display:'';{else}display:none;{/if}">
<input type='text' name='start_range_{$id}' 
    id='start_range_{$id}' style='width:75px !important;' size='<?php echo (($tmp = $_smarty_tpl->tpl_vars['displayParams']->value['size'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp);?>
' 
    <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['maxlength']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['maxlength'];?>
'<?php }?> 
    value='{$smarty.request.<?php echo $_smarty_tpl->tpl_vars['id_range_start']->value;?>
 }' tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
'>
{$APP.LBL_AND}
<input type='text' name='end_range_{$id}' 
    id='end_range_{$id}' style='width:75px !important;' size='<?php echo (($tmp = $_smarty_tpl->tpl_vars['displayParams']->value['size'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp);?>
' 
    <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['maxlength']))) {?>maxlength='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['maxlength'];?>
'<?php }?> 
    value='{$smarty.request.<?php echo $_smarty_tpl->tpl_vars['id_range_end']->value;?>
 }' tabindex='<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
'>    
</div> 
</span><?php }
}
