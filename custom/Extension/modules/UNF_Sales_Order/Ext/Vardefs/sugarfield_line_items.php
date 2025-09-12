<?php
$dictionary['UNF_Sales_Order']['fields']['line_items'] = array(
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'function' => array(
        'return' => 'html',
        'name' => 'customUNF_Sales_OrderLineItems',
        'include' => 'custom/Unify/modules/UNF_SalesOrder/Line_Item.php',
    ),
    'studio' => 'visible',
    'inline_edit' => false,
);