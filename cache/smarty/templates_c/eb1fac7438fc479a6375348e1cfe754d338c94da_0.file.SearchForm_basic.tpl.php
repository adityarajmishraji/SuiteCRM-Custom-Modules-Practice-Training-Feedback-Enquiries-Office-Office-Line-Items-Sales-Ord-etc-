<?php
/* Smarty version 4.5.3, created on 2025-09-05 09:53:35
  from 'C:\xampp\htdocs\Suitecrm\cache\themes\SuiteP\modules\UNF_Enquiries\SearchForm_basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ba65c7704730_19570469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb1fac7438fc479a6375348e1cfe754d338c94da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Suitecrm\\cache\\themes\\SuiteP\\modules\\UNF_Enquiries\\SearchForm_basic.tpl',
      1 => 1757046215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ba65c7704730_19570469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),4=>array('file'=>'C:\\xampp\\htdocs\\Suitecrm\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (!(isset($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']))) {?>
	<?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']);
}
echo '<script'; ?>
>

	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});

<?php echo '</script'; ?>
>
<div class="row">
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='name_basic'> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'UNF_Enquiries'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
' size='30'
    maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='-1'      accesskey='9'  >

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='status_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'UNF_Enquiries'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php echo smarty_function_html_options(array('id'=>'status_basic','name'=>'status_basic[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['status_basic']['options'],'size'=>"6",'class'=>"templateGroupChooser",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status_basic']['value']),$_smarty_tpl);?>


		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='enquiry_for_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_ENQUIRY_FOR','module'=>'UNF_Enquiries'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php echo smarty_function_html_options(array('id'=>'enquiry_for_basic','name'=>'enquiry_for_basic[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['enquiry_for_basic']['options'],'size'=>"6",'class'=>"templateGroupChooser",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['enquiry_for_basic']['value']),$_smarty_tpl);?>


		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='date_entered_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'UNF_Enquiries'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['fields']->value['date_entered_basic']['name']);?>

<?php if ((isset($_REQUEST['date_entered_basic_range_choice']))) {
$_smarty_tpl->_assignInScope('starting_choice', $_REQUEST['date_entered_basic_range_choice']);
} else {
$_smarty_tpl->_assignInScope('starting_choice', "=");
}?>

<div class="clear hidden dateTimeRangeChoiceClear"></div>
<div class="dateTimeRangeChoice" style="white-space:nowrap !important;">
<select id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" onchange="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['date_entered_basic']['options'],'selected'=>$_smarty_tpl->tpl_vars['starting_choice']->value),$_smarty_tpl);?>

</select>
</div>

<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div" style="<?php if (preg_match('/^\[/',$_REQUEST['range_date_entered_basic']) || $_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:none<?php } else { ?>display:''<?php }?>;">
<input autocomplete="off" type="text" name="range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value='<?php if (empty($_REQUEST['range_date_entered_basic']) && !empty($_REQUEST['date_entered_basic'])) {
echo $_REQUEST['date_entered_basic'];
} else {
echo $_REQUEST['range_date_entered_basic'];
}?>' title=''   tabindex='-1'  size="11" class="dateRangeInput">
    <button id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger" type="button" onclick="return false;" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
    
</div>

<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div" style="<?php if ($_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:'';<?php } else { ?>display:none;<?php }?>">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['date_entered_basic']['value']);?>
<input autocomplete="off" type="text" name="start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value='<?php echo $_REQUEST['start_range_date_entered_basic'];?>
' title=''  tabindex='-1' size="11" class="dateRangeInput">
    <button id="start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
step : 1,
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
 
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_AND'];?>

<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['date_entered_basic']['value']);?>
<input autocomplete="off" type="text" name="end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value='<?php echo $_REQUEST['end_range_date_entered_basic'];?>
' title=''  tabindex='-1' size="11" class="dateRangeInput" maxlength="10">
    <button id="end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger" type="button" onclick="return false" class="btn btn-danger">
        <span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span>
    </button>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
step : 1,
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
 
</div>


<?php echo '<script'; ?>
 type='text/javascript'>

function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(val) 
{
  if(val == 'between') {
     document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';  
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = 'none';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = ''; 
  } else if (val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than') {
     if((/^\[.*\]$/).test(document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value))
     {
     	document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     }
     document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = '';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = 'none';
  } else {
     document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '[' + val + ']';    
     document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = ''; 
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = 'none';
     document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = 'none';         
  }
}

var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset = function()
{
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
}

});

YAHOO.util.Event.onDOMReady(function() {
 	if(document.getElementById('search_form_clear_advanced'))
 	 {
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
 	 }

});

YAHOO.util.Event.onDOMReady(function() {
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {
         YAHOO.util.Event.addListener('search_form_submit', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
     }
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
    }

});

// this function is specific to range date searches and will check that both start and end date ranges have been
// filled prior to submitting search form.  It is called from the listener added above.
function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate(e){
    if (
            (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
          ||(document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
       )
    {
        e.preventDefault();
        alert('<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHOOSE_START_AND_END_DATES'];?>
');
        if (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0) {
            document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
        else {
            document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
    }

}

<?php echo '</script'; ?>
>

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='current_user_only_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENT_USER_FILTER','module'=>'UNF_Enquiries'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" 
value="1" title='' tabindex="-1" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
			<?php if ($_smarty_tpl->tpl_vars['HAS_ADVANCED_SEARCH']->value && !$_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_ADVANCED_FILTER'];?>
</a>
			<?php }?>
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
'></div>
	</div>
</div>
<?php echo '<script'; ?>
>
	
	$(document).ready(function () {
		$( '#advanced_search_link' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search');
		});
	});
	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php }
}
