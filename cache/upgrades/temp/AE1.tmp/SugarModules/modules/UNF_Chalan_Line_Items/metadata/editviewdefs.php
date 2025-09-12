<?php
$module_name = 'UNF_Chalan_Line_Items';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'product_name',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_NAME',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'qty',
            'label' => 'LBL_QTY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'rate',
            'label' => 'LBL_RATE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'unf_chalan_unf_chalan_line_items_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
