<?php
$module_name='UNF_Office_Line_Items';
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
      'popup_module' => 'UNF_Office_Line_Items',
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
    'employee_name' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_EMPLOYEE_NAME',
      'id' => 'UNF_EMPLOYEES_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'UNF_Employees',
      'target_record_key' => 'unf_employees_id_c',
    ),
    'gender' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_GENDER',
      'width' => '10%',
      'default' => true,
    ),
    'phone_number' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PHONE_NUMBER',
      'width' => '10%',
      'default' => true,
    ),
    'address' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS',
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
    'description' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
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
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
  ),
);