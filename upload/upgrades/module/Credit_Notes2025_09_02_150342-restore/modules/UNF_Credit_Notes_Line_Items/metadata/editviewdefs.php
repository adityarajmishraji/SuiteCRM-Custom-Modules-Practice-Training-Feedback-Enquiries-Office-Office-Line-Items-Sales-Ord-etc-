<?php
$module_name = 'UNF_Credit_Notes_Line_Items';
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
          0 => 
          array (
            'name' => 'sr_no',
            'label' => 'LBL_SR_NO',
          ),
          1 => 
          array (
            'name' => 'group_id',
            'label' => 'LBL_GROUP_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sales_order',
            'studio' => 'visible',
            'label' => 'LBL_SALES_ORDER',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNTS',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'unf_credit_notes_unf_credit_notes_line_items_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
