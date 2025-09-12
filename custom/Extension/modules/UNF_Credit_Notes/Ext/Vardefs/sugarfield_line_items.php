<?php
$dictionary['UNF_Credit_Notes']['fields']['line_items'] = array(
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'function' => array(
        'return' => 'html',
        'name' => 'customUNF_Credit_NotesLineItems',
        'include' => 'custom/Unify/modules/UNF_Credit_Notes/Line_Item.php',
    ),
    'studio' => 'visible',
    'inline_edit' => false,
);