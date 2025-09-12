<?php
$module_name='UNF_Chalan_Line_Items';
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
      'popup_module' => 'UNF_Chalan_Line_Items',
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
    'product_name' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_PRODUCT_NAME',
      'id' => 'AOS_PRODUCTS_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'AOS_Products',
      'target_record_key' => 'aos_products_id_c',
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'uom' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_UOM',
      'width' => '10%',
      'default' => true,
    ),
    'qty' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_QTY',
      'width' => '10%',
      'default' => true,
    ),
    'rate' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_RATE',
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
    'amount' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_AMOUNT',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'UNF_Chalan_Line_Items',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'UNF_Chalan_Line_Items',
      'width' => '5%',
      'default' => true,
    ),
  ),
);