<?php
$module_name = 'UNF_Office_Line_Items';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'sr_no',
            'label' => 'LBL_SR_NO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'group_id',
            'label' => 'LBL_GROUP_ID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'gender',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
          1 => 
          array (
            'name' => 'phone_number',
            'label' => 'LBL_PHONE_NUMBER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'unf_office_unf_office_line_items_name',
            'label' => 'LBL_UNF_OFFICE_UNF_OFFICE_LINE_ITEMS_FROM_UNF_OFFICE_TITLE',
          ),
          1 => 
          array (
            'name' => 'employee_name',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYEE_NAME',
          ),
        ),
        6 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
