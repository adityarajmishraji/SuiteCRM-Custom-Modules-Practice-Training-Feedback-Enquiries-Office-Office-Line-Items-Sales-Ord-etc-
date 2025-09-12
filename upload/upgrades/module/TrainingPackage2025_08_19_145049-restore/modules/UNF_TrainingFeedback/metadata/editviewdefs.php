<?php
$module_name = 'UNF_TrainingFeedback';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'training_session_title',
            'label' => 'LBL_TRAINING_SESSION_TITLE',
          ),
          1 => 
          array (
            'name' => 'trainer_name',
            'label' => 'LBL_TRAINER_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_of_training',
            'label' => 'LBL_DATE_OF_TRAINING',
          ),
          1 => 
          array (
            'name' => 'score_content',
            'label' => 'LBL_SCORE_CONTENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'score_delivery',
            'label' => 'LBL_SCORE_DELIVERY',
          ),
          1 => 
          array (
            'name' => 'score_engagement',
            'label' => 'LBL_SCORE_ENGAGEMENT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'feedback_comments',
            'label' => 'LBL_FEEDBACK_COMMENTS',
          ),
          1 => 
          array (
            'name' => 'improvement_suggestions',
            'label' => 'LBL_IMPROVEMENT_SUGGESTIONS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        6 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
