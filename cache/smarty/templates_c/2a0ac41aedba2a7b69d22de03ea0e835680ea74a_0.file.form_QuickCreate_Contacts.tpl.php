<?php
/* Smarty version 4.5.3, created on 2025-09-05 11:17:26
  from 'C:\xampp\htdocs\Suitecrm\cache\themes\SuiteP\modules\Contacts\form_QuickCreate_Contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ba796eb4cec7_85210199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0ac41aedba2a7b69d22de03ea0e835680ea74a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\cache\\themes\\SuiteP\\modules\\Contacts\\form_QuickCreate_Contacts.tpl',
      1 => 1757051246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba796eb4cec7_85210199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),3=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),4=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),5=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id'];?>
">   
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id'];?>
">   
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id'];?>
">   
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id'];?>
">   
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id'];?>
">   
<?php if (!empty($_REQUEST['contact_id'])) {?><input type="hidden" name="reports_to_id" value="<?php echo $_REQUEST['contact_id'];?>
"><?php }?>   
<?php if (!empty($_REQUEST['contact_name'])) {?><input type="hidden" name="report_to_name" value="<?php echo $_REQUEST['contact_name'];?>
"><?php }?>   
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('form_QuickCreate_Contacts'); _form.action.value='Popup';return check_form('form_QuickCreate_Contacts')" type="submit" name="Contacts_popupcreate_save_button" id="Contacts_popupcreate_save_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"><?php }?> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="toggleDisplay('addform');return false;" name="Contacts_popup_cancel_button" type="submit"id="Contacts_popup_cancel_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
"> 
<?php if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Contacts'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="first_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FIRST_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="first_name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<?php echo smarty_function_html_options(array('name'=>"salutation",'id'=>"salutation",'options'=>$_smarty_tpl->tpl_vars['fields']->value['salutation']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['salutation']['value']),$_smarty_tpl);?>
&nbsp;<input tabindex="0"  name="first_name" id="first_name" size="25" maxlength="25" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['value'];?>
">
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="account_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNT_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_NAME','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="account_name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_id']['value'];?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"form_QuickCreate_Contacts","field_to_name_array":{"id":"account_id","name":"account_name"}}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"),$_smarty_tpl);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="last_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LAST_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="last_name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['last_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
' size='30'
maxlength='100'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_work">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OFFICE_PHONE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_OFFICE_PHONE','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_work"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_work']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_work']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_work']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="title">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TITLE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="title"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['title']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
' size='30'
maxlength='100'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_mobile">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MOBILE_PHONE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_mobile"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_fax">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX_PHONE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_fax"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="do_not_call">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DO_NOT_CALL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DO_NOT_CALL','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="do_not_call"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['do_not_call']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['do_not_call']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['do_not_call']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['do_not_call']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['do_not_call']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['do_not_call']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL_ADDRESS">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='email1_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email1']['value'];?>

</span>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="lead_source">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LEAD_SOURCE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LEAD_SOURCE','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="lead_source"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['lead_source']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['lead_source']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['lead_source']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['lead_source']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['lead_source']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['lead_source']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['lead_source']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Contacts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_id']['value'];?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"form_QuickCreate_Contacts","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_LABEL"),$_smarty_tpl);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('form_QuickCreate_Contacts'); _form.action.value='Popup';return check_form('form_QuickCreate_Contacts')" type="submit" name="Contacts_popupcreate_save_button" id="Contacts_popupcreate_save_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"><?php }?> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="toggleDisplay('addform');return false;" name="Contacts_popup_cancel_button" type="submit"id="Contacts_popup_cancel_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
"> 
<?php if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("form_QuickCreate_Contacts",
    function () { initEditView(document.forms.form_QuickCreate_Contacts) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('form_QuickCreate_Contacts');addToValidate('form_QuickCreate_Contacts', 'name', 'name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_QuickCreate_Contacts', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_QuickCreate_Contacts', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'salutation', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SALUTATION','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'first_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'last_name', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'full_name', 'fullname', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'title', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'photo', 'image', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHOTO','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'department', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'do_not_call', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DO_NOT_CALL','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'phone_home', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'email', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_EMAIL','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'phone_mobile', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'phone_work', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OFFICE_PHONE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'phone_other', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'phone_fax', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'email1', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'email2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_EMAIL_ADDRESS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'invalid_email', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVALID_EMAIL','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'email_opt_out', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_OPT_OUT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'lawful_basis', 'multienum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAWFUL_BASIS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'date_reviewed', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_REVIEWED','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'lawful_basis_source', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAWFUL_BASIS_SOURCE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STREET','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STREET_2','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STREET_3','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_CITY','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_STATE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_POSTALCODE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'primary_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS_COUNTRY','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STREET','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STREET_2','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STREET_3','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_CITY','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_STATE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_POSTALCODE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'alt_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADDRESS_COUNTRY','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'assistant', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSISTANT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'assistant_phone', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSISTANT_PHONE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'email_addresses_non_primary', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_NON_PRIMARY','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'email_and_name1', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'lead_source', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LEAD_SOURCE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'account_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'account_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_ID','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'opportunity_role_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'opportunity_role_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OPPORTUNITY_ROLE_ID','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'opportunity_role', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OPPORTUNITY_ROLE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'reports_to_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_ID','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'report_to_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'birthdate', 'date', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BIRTHDATE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'campaign_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CAMPAIGN_ID','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'campaign_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CAMPAIGN','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'c_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'm_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'accept_status_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'accept_status_name', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'sync_contact', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYNC_CONTACT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'e_invite_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONT_INVITE_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'event_status_name', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_INVITE_STATUS_EVENT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'event_invite_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_INVITE_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'e_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONT_ACCEPT_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'event_accept_status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS_EVENT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'event_status_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'joomla_account_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOOMLA_ACCOUNT_ID','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'portal_account_disabled', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PORTAL_ACCOUNT_DISABLED','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'joomla_account_access', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOOMLA_ACCOUNT_ACCESS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'portal_user_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PORTAL_USER_TYPE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'unf_workshop_contacts_1_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UNF_WORKSHOP_CONTACTS_1_FROM_UNF_WORKSHOP_TITLE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'contact_reference_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_REFERENCE','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'jjwg_maps_address_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_ADDRESS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'jjwg_maps_geocode_status_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_GEOCODE_STATUS','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'jjwg_maps_lat_c', 'float', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_LAT','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Contacts', 'jjwg_maps_lng_c', 'float', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_LNG','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('form_QuickCreate_Contacts', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('form_QuickCreate_Contacts', 'account_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_NAME','module'=>'Contacts','for_js'=>true),$_smarty_tpl);?>
', 'account_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_QuickCreate_Contacts_account_name']={"form":"form_QuickCreate_Contacts","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["form_QuickCreate_Contacts_account_name","account_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_QuickCreate_Contacts_assigned_user_name']={"form":"form_QuickCreate_Contacts","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
>
<?php }
}
