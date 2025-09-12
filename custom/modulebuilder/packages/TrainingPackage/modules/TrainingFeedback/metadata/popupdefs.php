<?php
$popupMeta = array (
    'moduleMain' => 'UNF_TrainingFeedback',
    'varName' => 'UNF_TrainingFeedback',
    'orderBy' => 'unf_trainingfeedback.name',
    'whereClauses' => array (
  'name' => 'unf_trainingfeedback.name',
  'trainer_name' => 'unf_trainingfeedback.trainer_name',
  'assigned_user_name' => 'unf_trainingfeedback.assigned_user_name',
  'training_session_title' => 'unf_trainingfeedback.training_session_title',
  'rating' => 'unf_trainingfeedback.rating',
  'assigned_user_id' => 'unf_trainingfeedback.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'trainer_name',
  5 => 'assigned_user_name',
  6 => 'training_session_title',
  7 => 'rating',
  8 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'trainer_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRAINER_NAME',
    'width' => '10%',
    'name' => 'trainer_name',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
  'training_session_title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRAINING_SESSION_TITLE',
    'width' => '10%',
    'name' => 'training_session_title',
  ),
  'rating' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RATING',
    'width' => '10%',
    'name' => 'rating',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'TRAINING_SESSION_TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRAINING_SESSION_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'training_session_title',
  ),
  'TRAINER_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRAINER_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'trainer_name',
  ),
  'DATE_OF_TRAINING' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_OF_TRAINING',
    'width' => '10%',
    'default' => true,
    'name' => 'date_of_training',
  ),
  'RATING' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RATING',
    'width' => '10%',
    'default' => true,
    'name' => 'rating',
  ),
  'IMPROVEMENT_SUGGESTIONS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IMPROVEMENT_SUGGESTIONS',
    'width' => '10%',
    'default' => true,
    'name' => 'improvement_suggestions',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'FEEDBACK_COMMENTS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FEEDBACK_COMMENTS',
    'width' => '10%',
    'default' => true,
    'name' => 'feedback_comments',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
),
);
