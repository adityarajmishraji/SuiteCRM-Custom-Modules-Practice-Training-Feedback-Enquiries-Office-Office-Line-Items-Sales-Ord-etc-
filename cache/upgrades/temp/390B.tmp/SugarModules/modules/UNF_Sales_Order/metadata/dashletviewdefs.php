<?php
$dashletData['UNF_Sales_OrderDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  's_o_date' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'total_quantity' => 
  array (
    'default' => '',
  ),
  'total_amount' => 
  array (
    'default' => '',
  ),
  'customer' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['UNF_Sales_OrderDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  's_o_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_S_O_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 's_o_date',
  ),
  'total_quantity' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_QUANTITY',
    'width' => '10%',
    'default' => true,
    'name' => 'total_quantity',
  ),
  'total_amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_AMOUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'total_amount',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'line_items' => 
  array (
    'type' => 'html',
    'studio' => 'visible',
    'label' => 'LBL_LINE_ITEMS',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'searchfields' => 
  array (
    'date_entered' => 
    array (
      'default' => '',
    ),
    'date_modified' => 
    array (
      'default' => '',
    ),
    'assigned_user_id' => 
    array (
      'type' => 'assigned_user_name',
      'default' => 'Administrator',
    ),
    'width' => '10%',
    'default' => false,
    'name' => 'searchfields',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'customer' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'customer',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
