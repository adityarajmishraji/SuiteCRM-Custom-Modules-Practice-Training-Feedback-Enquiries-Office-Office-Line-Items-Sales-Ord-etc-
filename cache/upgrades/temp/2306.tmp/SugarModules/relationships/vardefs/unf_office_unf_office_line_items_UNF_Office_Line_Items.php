<?php
// created: 2025-08-26 11:11:39
$dictionary["UNF_Office_Line_Items"]["fields"]["unf_office_unf_office_line_items"] = array (
  'name' => 'unf_office_unf_office_line_items',
  'type' => 'link',
  'relationship' => 'unf_office_unf_office_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Office',
  'bean_name' => 'UNF_Office',
  'vname' => 'LBL_UNF_OFFICE_UNF_OFFICE_LINE_ITEMS_FROM_UNF_OFFICE_TITLE',
  'id_name' => 'unf_office_unf_office_line_itemsunf_office_ida',
);
$dictionary["UNF_Office_Line_Items"]["fields"]["unf_office_unf_office_line_items_name"] = array (
  'name' => 'unf_office_unf_office_line_items_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNF_OFFICE_UNF_OFFICE_LINE_ITEMS_FROM_UNF_OFFICE_TITLE',
  'save' => true,
  'id_name' => 'unf_office_unf_office_line_itemsunf_office_ida',
  'link' => 'unf_office_unf_office_line_items',
  'table' => 'unf_office',
  'module' => 'UNF_Office',
  'rname' => 'name',
);
$dictionary["UNF_Office_Line_Items"]["fields"]["unf_office_unf_office_line_itemsunf_office_ida"] = array (
  'name' => 'unf_office_unf_office_line_itemsunf_office_ida',
  'type' => 'link',
  'relationship' => 'unf_office_unf_office_line_items',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UNF_OFFICE_UNF_OFFICE_LINE_ITEMS_FROM_UNF_OFFICE_LINE_ITEMS_TITLE',
);
