<?php
$module_name = 'UNF_Credit_Notes_Line_Items';
$listViewDefs [$module_name] = 
array (
  'GROUP_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GROUP_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SR_NO' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SR_NO',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNTS',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'SALES_ORDER' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SALES_ORDER',
    'id' => 'UNF_SALES_ORDER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_FROM_UNF_CREDIT_NOTES_TITLE',
    'id' => 'UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMSUNF_CREDIT_NOTES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
