<?php
// created: 2025-09-02 11:41:39
$subpanel_layout['list_fields'] = array (
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
  'date_modified' => 
  array (
    'type' => 'datetime',
    'width' => '45%',
    'vname' => 'LBL_DATE_MODIFIED',
    'default' => true,
  ),
  'unf_sales_order_unf_so_line_items_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_UNF_SALES_ORDER_UNF_SO_LINE_ITEMS_FROM_UNF_SALES_ORDER_TITLE',
    'id' => 'UNF_SALES_ORDER_UNF_SO_LINE_ITEMSUNF_SALES_ORDER_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'UNF_Sales_Order',
    'target_record_key' => 'unf_sales_order_unf_so_line_itemsunf_sales_order_ida',
  ),
);