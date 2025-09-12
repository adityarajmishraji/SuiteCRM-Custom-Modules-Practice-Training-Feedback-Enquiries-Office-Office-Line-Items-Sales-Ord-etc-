<?php
$dictionary['UNF_Chalan']['fields']['line_items'] = array(
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'function' => array(
        'return' => 'html',
        'name' => 'customUNF_ChalanLineItems',
        'include' => 'custom/Unify/modules/UNF_Chalan/Line_Item.php',
    ),
    'studio' => 'visible',
    'inline_edit' => false,
);