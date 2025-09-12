<?php
$module_name = 'UNF_Chalan';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'chalan_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CHALAN_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'chalan_date',
      ),
      'party' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PARTY',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'party',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'chalan_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CHALAN_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'chalan_date',
      ),
      'party' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PARTY',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'party',
      ),
      'total_quantity' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_TOTAL_QUANTITY',
        'width' => '10%',
        'default' => true,
        'name' => 'total_quantity',
      ),
      'total_amount' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_TOTAL_AMOUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'total_amount',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
