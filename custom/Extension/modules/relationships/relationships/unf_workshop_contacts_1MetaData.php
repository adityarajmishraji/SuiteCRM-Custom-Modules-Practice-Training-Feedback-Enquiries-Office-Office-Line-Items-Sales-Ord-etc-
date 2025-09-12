<?php
// created: 2025-08-07 15:51:39
$dictionary["unf_workshop_contacts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'unf_workshop_contacts_1' => 
    array (
      'lhs_module' => 'UNF_Workshop',
      'lhs_table' => 'unf_workshop',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'unf_workshop_contacts_1_c',
      'join_key_lhs' => 'unf_workshop_contacts_1unf_workshop_ida',
      'join_key_rhs' => 'unf_workshop_contacts_1contacts_idb',
    ),
  ),
  'table' => 'unf_workshop_contacts_1_c',
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
      'name' => 'unf_workshop_contacts_1unf_workshop_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'unf_workshop_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'unf_workshop_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'unf_workshop_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'unf_workshop_contacts_1unf_workshop_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'unf_workshop_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'unf_workshop_contacts_1contacts_idb',
      ),
    ),
  ),
);