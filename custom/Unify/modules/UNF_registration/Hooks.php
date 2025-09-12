<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class RegistrationHooks
{
    
    //   Hook 1: Auto-fill department if empty
    public function autoFillDepartment($bean, $event, $arguments)
    {
        // if (empty($bean->department)) {
        //     $bean->department = 'Default Department';
        //     $GLOBALS['log']->fatal("Department auto-filled for record ID {$bean->id}");
        // }
    }

    //   Hook 2: Set hire date if empty
     
    public function setJoiningDate($bean, $event, $arguments)
    {
        if (empty($bean->hire_date)) {
            $bean->hire_date = date('Y-m-d H:i:s');
            $GLOBALS['log']->fatal("Hire date set for record ID {$bean->id}");
        }
    }

    public function beforeSaveMethod($bean, $event, $arguments)
    {
        $first = isset($bean->first_name) ? trim($bean->first_name) : '';
        $last  = isset($bean->last_name) ? trim($bean->last_name) : '';

        $bean->first_name = $first;
        $bean->last_name  = $last;
        $bean->name= trim($first . ' ' . $last);

        $GLOBALS['log']->fatal("HOOK RUN: Combined Name for ID {$bean->id} - Name: {$bean->name}");
    }
}
