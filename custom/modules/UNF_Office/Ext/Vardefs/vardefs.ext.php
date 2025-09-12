<?php 
 //WARNING: The contents of this file are auto-generated


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

// created: 2025-08-26 16:39:53
$dictionary["UNF_Office"]["fields"]["unf_office_unf_office_line_items"] = array (
  'name' => 'unf_office_unf_office_line_items',
  'type' => 'link',
  'relationship' => 'unf_office_unf_office_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Office_Line_Items',
  'bean_name' => 'UNF_Office_Line_Items',
  'side' => 'right',
  'vname' => 'LBL_UNF_OFFICE_UNF_OFFICE_LINE_ITEMS_FROM_UNF_OFFICE_LINE_ITEMS_TITLE',
);

?>