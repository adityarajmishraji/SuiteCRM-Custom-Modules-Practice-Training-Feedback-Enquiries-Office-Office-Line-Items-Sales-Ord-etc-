<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UNF_EmployeesClass {

    //Conatinate the First name , Middle name and Last name
    function afterUIFrame($event, $arguments)
    {
        
        //Custom Logic
        echo '<script src="custom/Unify/modules/UNF_Employees/Demo.js"></script>';
    }

    function beforeSaveMethod($bean, $event, $arguments){

        // 2. Use a Logic Hook to auto-set a field, such as the current date.means bydefault joining_date ka value "today" krna hai agr field empty ho toh.
        // if (empty($bean->joining_date)) {
        //     $bean->joining_date = date('Y-m-d H:i:s');
        // }

        $firstName = $bean->first_name;
        $middleName = $bean->middle_name;
        $lastName = $bean->last_name;
        $bean->name = $firstName . ' ' . $middleName . ' '. $lastName;
       
        // Auto-fill Department field

        if (empty($bean->department)) {
            $bean->department = 'General';
        }
        // Set Joining Date if empty

         if (empty($bean->joining_date)) {
            $bean->joining_date = date('Y-m-d H:i:s');
        }
    }

    function afterSaveMethod($bean, $event, $arguments){
       
        
        
        
        // echo '<pre>';
        // print_r($bean);
        // echo '</pre>';
        // die();

    }
}
