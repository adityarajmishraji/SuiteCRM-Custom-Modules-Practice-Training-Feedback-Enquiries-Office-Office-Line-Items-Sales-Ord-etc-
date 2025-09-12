<?php
$dashletData['UNF_EmployeesDashlet']['searchFields'] = array (
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
);
$dashletData['UNF_EmployeesDashlet']['columns'] = array (
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'joining_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_JOINING_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'joining_date',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'job_title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JOB_TITLE',
    'width' => '10%',
    'default' => false,
    'name' => 'job_title',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'phone_number' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NUMBER',
    'width' => '10%',
    'default' => false,
    'name' => 'phone_number',
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
    'name' => 'last_name',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => false,
    'name' => 'email',
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
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => false,
    'name' => 'status',
  ),
  'department' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => false,
    'name' => 'department',
  ),
  'salary' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_SALARY',
    'width' => '10%',
    'default' => false,
    'name' => 'salary',
  ),
  'middle_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MIDDLE_NAME',
    'width' => '10%',
    'default' => false,
    'name' => 'middle_name',
  ),
  'first_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
    'name' => 'first_name',
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
