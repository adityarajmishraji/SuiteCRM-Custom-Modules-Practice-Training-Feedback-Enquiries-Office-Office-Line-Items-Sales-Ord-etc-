<?php
$popupMeta = array (
    'moduleMain' => 'UNF_SalesOrder',
    'varName' => 'UNF_SalesOrder',
    'orderBy' => 'unf_salesorder.name',
    'whereClauses' => array (
  'name' => 'unf_salesorder.name',
  's_o_date' => 'unf_sales_order.s_o_date',
  'customer' => 'unf_sales_order.customer',
  'description' => 'unf_sales_order.description',
  'total_quantity' => 'unf_sales_order.total_quantity',
  'total_amount' => 'unf_sales_order.total_amount',
  'assigned_user_name' => 'unf_sales_order.assigned_user_name',
  'date_entered' => 'unf_sales_order.date_entered',
  'date_modified' => 'unf_sales_order.date_modified',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 's_o_date',
  5 => 'customer',
  6 => 'description',
  7 => 'total_quantity',
  8 => 'total_amount',
  9 => 'assigned_user_name',
  10 => 'date_entered',
  11 => 'date_modified',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  's_o_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_S_O_DATE',
    'width' => '10%',
    'name' => 's_o_date',
  ),
  'customer' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER',
    'link' => true,
    'width' => '10%',
    'id' => 'ACCOUNT_ID_C',
    'name' => 'customer',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'total_quantity' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_QUANTITY',
    'width' => '10%',
    'name' => 'total_quantity',
  ),
  'total_amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_AMOUNT',
    'width' => '10%',
    'name' => 'total_amount',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'name' => 'date_modified',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'S_O_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_S_O_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 's_o_date',
  ),
  'CUSTOMER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'customer',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'TOTAL_QUANTITY' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_QUANTITY',
    'width' => '10%',
    'default' => true,
    'name' => 'total_quantity',
  ),
  'TOTAL_AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_AMOUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'total_amount',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
),
);
