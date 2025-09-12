<?php
// created: 2025-09-04 11:05:26
$dictionary["unf_chalan_unf_chalan_line_items"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'unf_chalan_unf_chalan_line_items' => 
    array (
      'lhs_module' => 'UNF_Chalan',
      'lhs_table' => 'unf_chalan',
      'lhs_key' => 'id',
      'rhs_module' => 'UNF_Chalan_Line_Items',
      'rhs_table' => 'unf_chalan_line_items',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'unf_chalan_unf_chalan_line_items_c',
      'join_key_lhs' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_ida',
      'join_key_rhs' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_line_items_idb',
    ),
  ),
  'table' => 'unf_chalan_unf_chalan_line_items_c',
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
      'name' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'unf_chalan_unf_chalan_line_itemsunf_chalan_line_items_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'unf_chalan_unf_chalan_line_itemsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'unf_chalan_unf_chalan_line_items_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'unf_chalan_unf_chalan_line_itemsunf_chalan_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'unf_chalan_unf_chalan_line_items_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'unf_chalan_unf_chalan_line_itemsunf_chalan_line_items_idb',
      ),
    ),
  ),
);