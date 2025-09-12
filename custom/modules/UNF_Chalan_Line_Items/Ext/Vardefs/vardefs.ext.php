<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-09-04 12:37:02
$dictionary["UNF_Chalan_Line_Items"]["fields"]["unf_chalan_unf_chalan_line_items"] = array (
  'name' => 'unf_chalan_unf_chalan_line_items',
  'type' => 'link',
  'relationship' => 'unf_chalan_unf_chalan_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Chalan',
  'bean_name' => 'UNF_Chalan',
  'vname' => 'LBL_UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_FROM_UNF_CHALAN_TITLE',
  'id_name' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_ida',
);
$dictionary["UNF_Chalan_Line_Items"]["fields"]["unf_chalan_unf_chalan_line_items_name"] = array (
  'name' => 'unf_chalan_unf_chalan_line_items_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_FROM_UNF_CHALAN_TITLE',
  'save' => true,
  'id_name' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_ida',
  'link' => 'unf_chalan_unf_chalan_line_items',
  'table' => 'unf_chalan',
  'module' => 'UNF_Chalan',
  'rname' => 'name',
);
$dictionary["UNF_Chalan_Line_Items"]["fields"]["unf_chalan_unf_chalan_line_itemsunf_chalan_ida"] = array (
  'name' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_ida',
  'type' => 'link',
  'relationship' => 'unf_chalan_unf_chalan_line_items',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UNF_CHALAN_UNF_CHALAN_LINE_ITEMS_FROM_UNF_CHALAN_LINE_ITEMS_TITLE',
);

?>