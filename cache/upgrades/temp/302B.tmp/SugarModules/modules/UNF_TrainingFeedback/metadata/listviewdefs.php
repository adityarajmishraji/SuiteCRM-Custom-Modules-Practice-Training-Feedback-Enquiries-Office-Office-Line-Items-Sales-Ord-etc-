<?php
$module_name = 'UNF_TrainingFeedback';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TRAINING_SESSION_TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRAINING_SESSION_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'TRAINER_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRAINER_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_OF_TRAINING' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_OF_TRAINING',
    'width' => '10%',
    'default' => true,
  ),
  'RATING' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RATING',
    'width' => '10%',
    'default' => true,
  ),
  'IMPROVEMENT_SUGGESTIONS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IMPROVEMENT_SUGGESTIONS',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'FEEDBACK_COMMENTS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FEEDBACK_COMMENTS',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'SCORE_ENGAGEMENT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SCORE_ENGAGEMENT',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'SCORE_DELIVERY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SCORE_DELIVERY',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'SCORE_CONTENT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SCORE_CONTENT',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
