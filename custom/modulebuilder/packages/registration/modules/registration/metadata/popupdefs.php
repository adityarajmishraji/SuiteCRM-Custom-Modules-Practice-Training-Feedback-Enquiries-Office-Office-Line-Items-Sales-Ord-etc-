<?php
$popupMeta = array (
    'moduleMain' => 'UNF_registration',
    'varName' => 'UNF_registration',
    'orderBy' => 'unf_registration.name',
    'whereClauses' => array (
  'name' => 'unf_registration.name',
  'email' => 'unf_registration.email',
  'gender' => 'unf_registration.gender',
  'city' => 'unf_registration.city',
  'assigned_user_id' => 'unf_registration.assigned_user_id',
  'assigned_user_name' => 'unf_registration.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  7 => 'email',
  8 => 'gender',
  10 => 'city',
  15 => 'assigned_user_id',
  16 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'name' => 'email',
  ),
  'gender' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GENDER',
    'width' => '10%',
    'name' => 'gender',
  ),
  'city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'name' => 'city',
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
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'email',
  ),
  'GENDER' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GENDER',
    'width' => '10%',
    'default' => true,
    'name' => 'gender',
  ),
  'PHONE_NUMBER' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_number',
  ),
  'CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'default' => true,
    'name' => 'city',
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
),
);
