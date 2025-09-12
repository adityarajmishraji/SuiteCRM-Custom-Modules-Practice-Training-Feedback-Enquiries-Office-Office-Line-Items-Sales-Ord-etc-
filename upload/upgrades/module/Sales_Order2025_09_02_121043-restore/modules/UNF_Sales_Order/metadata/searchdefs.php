<?php
$module_name = 'UNF_Sales_Order';
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
      's_o_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_S_O_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 's_o_date',
      ),
      'customer' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CUSTOMER',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'customer',
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
      's_o_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_S_O_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 's_o_date',
      ),
      'customer' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_CUSTOMER',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNT_ID_C',
        'name' => 'customer',
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
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
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
