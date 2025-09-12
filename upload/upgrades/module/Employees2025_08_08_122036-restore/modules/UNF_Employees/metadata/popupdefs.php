<?php
$popupMeta = array (
    'moduleMain' => 'UNF_Employees',
    'varName' => 'UNF_Employees',
    'orderBy' => 'unf_employees.name',
    'whereClauses' => array (
  'name' => 'unf_employees.name',
  'status' => 'unf_employees.status',
  'department' => 'unf_employees.department',
  'date_entered' => 'unf_employees.date_entered',
  'assigned_user_id' => 'unf_employees.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'department',
  5 => 'date_entered',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
  'department' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'name' => 'department',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
