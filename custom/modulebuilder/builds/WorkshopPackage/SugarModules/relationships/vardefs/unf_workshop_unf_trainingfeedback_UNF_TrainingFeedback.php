<?php
// created: 2025-08-19 15:02:10
$dictionary["UNF_TrainingFeedback"]["fields"]["unf_workshop_unf_trainingfeedback"] = array (
  'name' => 'unf_workshop_unf_trainingfeedback',
  'type' => 'link',
  'relationship' => 'unf_workshop_unf_trainingfeedback',
  'source' => 'non-db',
  'module' => 'UNF_Workshop',
  'bean_name' => 'UNF_Workshop',
  'vname' => 'LBL_UNF_WORKSHOP_UNF_TRAININGFEEDBACK_FROM_UNF_WORKSHOP_TITLE',
  'id_name' => 'unf_workshop_unf_trainingfeedbackunf_workshop_ida',
);
$dictionary["UNF_TrainingFeedback"]["fields"]["unf_workshop_unf_trainingfeedback_name"] = array (
  'name' => 'unf_workshop_unf_trainingfeedback_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UNF_WORKSHOP_UNF_TRAININGFEEDBACK_FROM_UNF_WORKSHOP_TITLE',
  'save' => true,
  'id_name' => 'unf_workshop_unf_trainingfeedbackunf_workshop_ida',
  'link' => 'unf_workshop_unf_trainingfeedback',
  'table' => 'unf_workshop',
  'module' => 'UNF_Workshop',
  'rname' => 'name',
);
$dictionary["UNF_TrainingFeedback"]["fields"]["unf_workshop_unf_trainingfeedbackunf_workshop_ida"] = array (
  'name' => 'unf_workshop_unf_trainingfeedbackunf_workshop_ida',
  'type' => 'link',
  'relationship' => 'unf_workshop_unf_trainingfeedback',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UNF_WORKSHOP_UNF_TRAININGFEEDBACK_FROM_UNF_TRAININGFEEDBACK_TITLE',
);
