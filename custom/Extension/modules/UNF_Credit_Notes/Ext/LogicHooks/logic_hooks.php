<?php

$hook_version = 1;
$hook_array = array();

$hook_array['after_ui_frame'] = array();
$hook_array['after_ui_frame'][] = array(
    1,
    'after_ui_frame',
    'custom/Unify/modules/UNF_Credit_Notes/Hooks.php',
    'CreditNotes',
    'afterUIFrame'
);

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    2,
    'before_save',
    'custom/Unify/modules/UNF_Credit_Notes/Hooks.php',
    'CreditNotes',
    'beforeSaveMethod'
);
$hook_array['after_save'][] = array(
    3,
    'after_save',
    'custom/Unify/modules/UNF_Credit_Notes/Hooks.php',
    'CreditNotes',
    'afterSaveMethod'
);
