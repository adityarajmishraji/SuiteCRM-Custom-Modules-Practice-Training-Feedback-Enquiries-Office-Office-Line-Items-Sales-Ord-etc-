<?php
$dictionary['UNF_Office']['fields']['line_items'] = array(
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'function' => array(
        'return' => 'html',
        'name' => 'customUNF_OfficeLineItems',
        'include' => 'custom/Unify/modules/UNF_Office/Line_Item.php',
    ),
    'studio' => 'visible',
    'inline_edit' => false,
);