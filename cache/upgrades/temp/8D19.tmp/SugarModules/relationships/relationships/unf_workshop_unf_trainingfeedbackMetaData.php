<?php
// created: 2025-08-19 15:02:10
$dictionary["unf_workshop_unf_trainingfeedback"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'unf_workshop_unf_trainingfeedback' => 
    array (
      'lhs_module' => 'UNF_Workshop',
      'lhs_table' => 'unf_workshop',
      'lhs_key' => 'id',
      'rhs_module' => 'UNF_TrainingFeedback',
      'rhs_table' => 'unf_trainingfeedback',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'unf_workshop_unf_trainingfeedback_c',
      'join_key_lhs' => 'unf_workshop_unf_trainingfeedbackunf_workshop_ida',
      'join_key_rhs' => 'unf_workshop_unf_trainingfeedbackunf_trainingfeedback_idb',
    ),
  ),
  'table' => 'unf_workshop_unf_trainingfeedback_c',
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
      'name' => 'unf_workshop_unf_trainingfeedbackunf_workshop_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'unf_workshop_unf_trainingfeedbackunf_trainingfeedback_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'unf_workshop_unf_trainingfeedbackspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'unf_workshop_unf_trainingfeedback_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'unf_workshop_unf_trainingfeedbackunf_workshop_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'unf_workshop_unf_trainingfeedback_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'unf_workshop_unf_trainingfeedbackunf_trainingfeedback_idb',
      ),
    ),
  ),
);