<?php
$module_name = 'UNF_Employees';
$listViewDefs [$module_name] = 
array (
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_NUMBER' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'DEPARTMENT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => true,
  ),
  'JOB_TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'GENDER' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GENDER',
    'width' => '10%',
    'default' => true,
  ),
  'JOINING_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_JOINING_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'SALARY' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_SALARY',
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
  'ADDRESS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'MIDDLE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MIDDLE_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
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
