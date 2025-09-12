<?php
$module_name='UNF_Credit_Notes_Line_Items';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'UNF_Credit_Notes_Line_Items',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'sr_no' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_SR_NO',
      'width' => '10%',
      'default' => true,
    ),
    'accounts' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ACCOUNTS',
      'id' => 'ACCOUNT_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Accounts',
      'target_record_key' => 'account_id_c',
    ),
    'sales_order' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_SALES_ORDER',
      'id' => 'UNF_SALES_ORDER_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'UNF_Sales_Order',
      'target_record_key' => 'unf_sales_order_id_c',
    ),
    'amount' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_AMOUNT',
      'width' => '10%',
      'default' => true,
    ),
    'description' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'assigned_user_name' => 
    array (
      'link' => true,
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'id' => 'ASSIGNED_USER_ID',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'assigned_user_id',
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'UNF_Credit_Notes_Line_Items',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'UNF_Credit_Notes_Line_Items',
      'width' => '5%',
      'default' => true,
    ),
  ),
);