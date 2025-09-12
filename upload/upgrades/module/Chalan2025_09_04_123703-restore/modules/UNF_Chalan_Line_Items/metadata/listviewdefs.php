<?php
$module_name = 'UNF_Chalan_Line_Items';
$listViewDefs [$module_name] = 
array (
  'SR_NO' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SR_NO',
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
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRODUCT_NAME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_NAME',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'UOM' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_UOM',
    'width' => '10%',
    'default' => true,
  ),
  'QTY' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_QTY',
    'width' => '10%',
    'default' => true,
  ),
  'RATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RATE',
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'GROUP_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GROUP_ID',
    'width' => '10%',
    'default' => false,
  ),
  'UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_FROM_UNF_CHALAN_TITLE',
    'id' => 'UNF_CHALAN_UNF_CHALAN_LINE_ITEMSUNF_CHALAN_IDA',
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
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
);
;
?>
