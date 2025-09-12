<?php 
 //WARNING: The contents of this file are auto-generated


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

// created: 2025-09-02 16:09:25
$dictionary["UNF_Credit_Notes"]["fields"]["unf_credit_notes_unf_credit_notes_line_items"] = array (
  'name' => 'unf_credit_notes_unf_credit_notes_line_items',
  'type' => 'link',
  'relationship' => 'unf_credit_notes_unf_credit_notes_line_items',
  'source' => 'non-db',
  'module' => 'UNF_Credit_Notes_Line_Items',
  'bean_name' => 'UNF_Credit_Notes_Line_Items',
  'side' => 'right',
  'vname' => 'LBL_UNF_CREDIT_NOTES_UNF_CREDIT_NOTES_LINE_ITEMS_FROM_UNF_CREDIT_NOTES_LINE_ITEMS_TITLE',
);

?>