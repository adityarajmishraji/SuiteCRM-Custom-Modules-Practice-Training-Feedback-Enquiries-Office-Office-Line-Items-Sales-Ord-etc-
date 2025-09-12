<?php 
 //WARNING: The contents of this file are auto-generated


$hook_version = 1;
$hook_array = array();

// Hook 1: Auto-fill a field before saving
$hook_array['after_ui_frame'][] = array(
    1,
    'Auto-fill Department if empty',
    'custom/Unify/modules/UNF_Enquiries/Hooks.php',
    'UNF_EnquiriesClass',
    'afterUIFrame'
);
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'Auto-fill Department if empty',
    'custom/Unify/modules/UNF_Enquiries/Hooks.php',
    'UNF_EnquiriesClass',
    'beforeSaveMethod'
);
?>