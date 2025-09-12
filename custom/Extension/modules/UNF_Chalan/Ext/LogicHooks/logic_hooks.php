<?php
 
$hook_version = 1;
$hook_array = array();

$hook_array['after_ui_frame'] = array();
$hook_array['after_ui_frame'][] = array(
    1,
    'after_ui_frame', 
    'custom/Unify/modules/UNF_Chalan/Hooks.php',
    'Chalan',
    'afterUIFrame'
);
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    2,
    'before_save',
    'custom/Unify/modules/UNF_Chalan/Hooks.php',
    'Chalan',
    'beforeSaveMethod'
);

// custom/Unify/modules/UNF_Chalan/Hooks.php
