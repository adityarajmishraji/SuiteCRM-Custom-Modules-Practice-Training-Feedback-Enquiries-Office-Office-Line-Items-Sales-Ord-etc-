<?php
// created: 2025-09-02 15:43:58
$dictionary["UNF_Credit_Notes_Line_Items"]["fields"]["unf_credit_notes_unf_credit_notes_line_items"] = array (
  'name' => 'unf_credit_notes_unf_credit_notes_line_items',
  'type' => 'link',
  'relationship' => 'unf_credit_notes_unf_credit_notes_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Credit_Notes',
  'bean_name' => 'UNF_Credit_Notes',
  'vname' => 'LBL_UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_FROM_UNF_CREDIT_NOTES_TITLE',
  'id_name' => 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida',
);
$dictionary["UNF_Credit_Notes_Line_Items"]["fields"]["unf_credit_notes_unf_credit_notes_line_items_name"] = array (
  'name' => 'unf_credit_notes_unf_credit_notes_line_items_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_FROM_UNF_CREDIT_NOTES_TITLE',
  'save' => true,
  'id_name' => 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida',
  'link' => 'unf_credit_notes_unf_credit_notes_line_items',
  'table' => 'unf_credit_notes',
  'module' => 'UNF_Credit_Notes',
  'rname' => 'name',
);
$dictionary["UNF_Credit_Notes_Line_Items"]["fields"]["unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida"] = array (
  'name' => 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida',
  'type' => 'link',
  'relationship' => 'unf_credit_notes_unf_credit_notes_line_items',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_FROM_UNF_CREDIT_NOTES_LINE_ITEMS_TITLE',
);
