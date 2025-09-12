<?php
$module_name = 'UNF_Sales_Order';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 's_o_date',
            'label' => 'LBL_S_O_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'customer',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'studio' => 'visible',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_quantity',
            'label' => 'LBL_TOTAL_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'total_amount',
            'label' => 'LBL_TOTAL_AMOUNT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
