<?php
/* Smarty version 4.5.3, created on 2025-09-05 10:21:49
  from 'C:\xampp\htdocs\Suitecrm\cache\themes\SuiteP\modules\Accounts\form_QuickCreate_Accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ba6c65085299_63447871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bbc2c1771bf82f9742e988dfcb6c59de87658be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\cache\\themes\\SuiteP\\modules\\Accounts\\form_QuickCreate_Accounts.tpl',
      1 => 1757047908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba6c65085299_63447871 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('form_QuickCreate_Accounts'); _form.action.value='Popup';return check_form('form_QuickCreate_Accounts')" type="submit" name="Accounts_popupcreate_save_button" id="Accounts_popupcreate_save_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"><?php }?> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="toggleDisplay('addform');return false;" name="Accounts_popup_cancel_button" type="submit"id="Accounts_popup_cancel_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
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
&module_name=Accounts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'Accounts'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Accounts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' size='30'
maxlength='150'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="website">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_WEBSITE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_WEBSITE','module'=>'Accounts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="url" field="website"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['website']['value'])) {?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' size='30' 
maxlength='255' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['value'];?>
' title='' tabindex='0'  >
<?php } else { ?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' size='30' 
maxlength='255'	   	   <?php if ($_smarty_tpl->tpl_vars['displayView']->value == 'advanced_search' || $_smarty_tpl->tpl_vars['displayView']->value == 'basic_search') {?>value=''<?php } else { ?>value='http://'<?php }?> 
title='' tabindex='0'  >
<?php }?>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_office">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_OFFICE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_OFFICE','module'=>'Accounts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_office"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_office']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_office']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_office']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_office']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_office']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMAIL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL','module'=>'Accounts'),$_smarty_tpl);
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


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_fax">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX','module'=>'Accounts'),$_smarty_tpl);
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
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="industry">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_INDUSTRY">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INDUSTRY','module'=>'Accounts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="industry"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['industry']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['industry']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['industry']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="account_type">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TYPE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TYPE','module'=>'Accounts'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="account_type"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_type']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_type']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['account_type']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['account_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['account_type']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['account_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['account_type']['default']),$_smarty_tpl);?>

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
echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Accounts'),$_smarty_tpl);
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
{"call_back_function":"set_return","form_name":"form_QuickCreate_Accounts","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}, 
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
" class="button primary" onclick="var _form = document.getElementById('form_QuickCreate_Accounts'); _form.action.value='Popup';return check_form('form_QuickCreate_Accounts')" type="submit" name="Accounts_popupcreate_save_button" id="Accounts_popupcreate_save_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"><?php }?> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="toggleDisplay('addform');return false;" name="Accounts_popup_cancel_button" type="submit"id="Accounts_popup_cancel_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
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
&module_name=Accounts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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
YAHOO.util.Event.onContentReady("form_QuickCreate_Accounts",
    function () { initEditView(document.forms.form_QuickCreate_Accounts) });
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
addForm('form_QuickCreate_Accounts');addToValidate('form_QuickCreate_Accounts', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_QuickCreate_Accounts', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_QuickCreate_Accounts', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'account_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TYPE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'industry', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INDUSTRY','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'annual_revenue', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANNUAL_REVENUE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'phone_fax', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAX','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET_2','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET_3','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_street_4', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET_4','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_CITY','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STATE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_POSTALCODE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'billing_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_COUNTRY','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'rating', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RATING','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'phone_office', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_OFFICE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'phone_alternate', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_ALT','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'website', 'url', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_WEBSITE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'ownership', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OWNERSHIP','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'employees', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEES','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'ticker_symbol', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TICKER_SYMBOL','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET_2','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET_3','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_street_4', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET_4','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_CITY','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STATE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_POSTALCODE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'shipping_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_COUNTRY','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'email1', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'email_addresses_non_primary', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_NON_PRIMARY','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'parent_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PARENT_ACCOUNT_ID','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'sic_code', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SIC_CODE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'parent_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MEMBER_OF','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'email_opt_out', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_OPT_OUT','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'invalid_email', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INVALID_EMAIL','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'email', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_EMAIL','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'campaign_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CAMPAIGN_ID','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'campaign_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CAMPAIGN','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_address_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_ADDRESS','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_geocode_status_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_GEOCODE_STATUS','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_lat_c', 'float', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_LAT','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'jjwg_maps_lng_c', 'float', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JJWG_MAPS_LNG','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_QuickCreate_Accounts', 'unique_code_c', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_UNIQUE_CODE','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('form_QuickCreate_Accounts', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Accounts','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_QuickCreate_Accounts_assigned_user_name']={"form":"form_QuickCreate_Accounts","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
>
<?php }
}
