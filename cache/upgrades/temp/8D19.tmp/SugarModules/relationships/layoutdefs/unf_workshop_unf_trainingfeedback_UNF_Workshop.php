<?php
 // created: 2025-08-19 15:02:10
$layout_defs["UNF_Workshop"]["subpanel_setup"]['unf_workshop_unf_trainingfeedback'] = array (
  'order' => 100,
  'module' => 'UNF_TrainingFeedback',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UNF_WORKSHOP_UNF_TRAININGFEEDBACK_FROM_UNF_TRAININGFEEDBACK_TITLE',
  'get_subpanel_data' => 'unf_workshop_unf_trainingfeedback',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
