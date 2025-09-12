<?php
 
$hook_version = 1;
$hook_array = array();

$hook_array['after_ui_frame'] = array();
$hook_array['after_ui_frame'][] = array(
    1,
    'after_ui_frame', 
    'custom/Unify/modules/Leads/Hooks.php',
    'LeadsClass',
    'afterUIFrame'
);

$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    2,
    'Auto set leads to UNF_Employees data using bean',
    'custom/Unify/modules/Leads/Hooks.php',
    'LeadsClass',
    'afterSaveMethod'
);

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'Create Alert for Lead Creation',
    'custom/Unify/modules/Leads/Hooks.php',
    'LeadsClass',
    'beforeSaveMethod'
);

// $hook_array['before_save'] = array();
// $hook_array['before_save'][] = array(
//     2,
//     'before_save',
//     'custom/Unify/modules/Leads/Hooks.php',
//     'LeadsClass',
//     'beforeSaveMethod'
// );
// $hook_array['after_save'][] = array();
// $hook_array['after_save'][] = array(
//     3,
//     'after_save',
//     'custom/Unify/modules/Leads/Hooks.php',
//     'LeadsClass',
//     'afterSaveMethod'
// );
// $hook_array['before_delete'][] = array();
// $hook_array['before_delete'][] = array(
//     4,
//     'Delete related Account and Contact when Lead is deleted',
//     'custom/Unify/modules/Leads/Hooks.php',
//     'LeadsClass',
//     'beforeDeleteMethod'
// );
// $hook_array['after_save'][] = array(
//     11, 
//     'After saving Lead, create another Lead', 
//     'custom/Unify/modules/Leads/hooks24.php', 
//     'LeadsClass', 
//     'afterSaveMethod'
// );
// $hook_array['before_save'][] = array(
//     5, 
//     'Set Lead Source to Online if blank', 
//     'custom/Unify/modules/Leads/hooks24.php', 
//     'LeadsClass', 
//     'beforeSaveMethod'
// );

// $hook_array['before_delete'][] = array(
//     11, 
//     'Before Delete Lead, create another Lead', 
//     'custom/Unify/modules/Leads/hooks24.php', 
//     'LeadsClass', 
//     'customDeleteLeads'
// );
// $hook_array['before_save'][] = array(
//     6,
//     'Auto set Joining Date',
//     'custom/Unify/modules/Leads/hook26.php',
//     'LeadsClass',
//     'beforeSaveMethod'
// );

// $hook_array['after_save'][] = array(
//     8,
//     'Trigger the Error',
//     'custom/Unify/modules/Leads/hook26.php',
//     'LeadsClass',
//     'triggerError'
// );


