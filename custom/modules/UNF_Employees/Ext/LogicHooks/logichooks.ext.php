<?php 
 //WARNING: The contents of this file are auto-generated



$hook_version = 1;
$hook_array = array();

$hook_array['after_ui_frame'] = array();
$hook_array['after_ui_frame'][] = array(
    1,
    'after_ui_frame',
    'custom/Unify/modules/UNF_Employees/Hooks.php',
    'UNF_EmployeesClass',
    'afterUIFrame'
);

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    2,
    'before_save',
    'custom/Unify/modules/UNF_Employees/Hooks.php',
    'UNF_EmployeesClass',
    'beforeSaveMethod'
);
$hook_array['after_save'][] = array(
    3,
    'after_save',
    'custom/Unify/modules/UNF_Employees/Hooks.php',
    'UNF_EmployeesClass',
    'afterSaveMethod'
);

?>