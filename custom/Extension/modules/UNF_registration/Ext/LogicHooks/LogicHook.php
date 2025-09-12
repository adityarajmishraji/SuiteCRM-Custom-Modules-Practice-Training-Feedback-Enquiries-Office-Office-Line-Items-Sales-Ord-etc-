<?php
$hook_version = 1;
$hook_array = array();

// Hook 1: Auto-fill a field before saving
$hook_array['before_save'][] = array(
    1,
    'Auto-fill Department if empty',
    'custom/modules/UNF_registration/hooks.php',
    'RegistrationHooks',
    'autoFillDepartment'
);

// Hook 2: Add current date/time on record save
$hook_array['before_save'][] = array(
    2,
    'Set Hire Date if empty',
    'custom/modules/UNF_registration/hooks.php',
    'RegistrationHooks',
    'setJoiningDate'
);

// Hook 3: Combine first_name + last_name before save
$hook_array['before_save'][] = array(
    3,
    'Combine First and Last Name',
    'custom/modules/UNF_registration/hooks.php',
    'RegistrationHooks',
    'beforeSaveMethod'
);
