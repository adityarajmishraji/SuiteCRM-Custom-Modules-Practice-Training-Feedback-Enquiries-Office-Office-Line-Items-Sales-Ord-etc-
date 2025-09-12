<?php
// created: 2025-09-02 16:09:24
$dictionary["unf_credit_notes_unf_credit_notes_line_items"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'unf_credit_notes_unf_credit_notes_line_items' => 
    array (
      'lhs_module' => 'UNF_Credit_Notes',
      'lhs_table' => 'unf_credit_notes',
      'lhs_key' => 'id',
      'rhs_module' => 'UNF_Credit_Notes_Line_Items',
      'rhs_table' => 'unf_credit_notes_line_items',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'unf_credit_notes_unf_credit_notes_line_items_c',
      'join_key_lhs' => 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida',
      'join_key_rhs' => 'unf_credit801de_items_idb',
    ),
  ),
  'table' => 'unf_credit_notes_unf_credit_notes_line_items_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'unf_credit801de_items_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'unf_credit_notes_unf_credit_notes_line_itemsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'unf_credit_notes_unf_credit_notes_line_items_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'unf_credit_notes_unf_credit_notes_line_items_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'unf_credit801de_items_idb',
      ),
    ),
  ),
);