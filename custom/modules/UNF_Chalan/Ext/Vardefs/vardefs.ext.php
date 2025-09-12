<?php 
 //WARNING: The contents of this file are auto-generated


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

// created: 2025-09-04 12:37:02
$dictionary["UNF_Chalan"]["fields"]["unf_chalan_unf_chalan_line_items"] = array (
  'name' => 'unf_chalan_unf_chalan_line_items',
  'type' => 'link',
  'relationship' => 'unf_chalan_unf_chalan_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Chalan_Line_Items',
  'bean_name' => 'UNF_Chalan_Line_Items',
  'side' => 'right',
  'vname' => 'LBL_UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_FROM_UNF_CHALAN_LINE_ITEMS_TITLE',
);

?>