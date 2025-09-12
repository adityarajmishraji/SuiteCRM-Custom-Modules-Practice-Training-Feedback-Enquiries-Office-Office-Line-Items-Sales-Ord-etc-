<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadsClass {

    function beforeSaveMethod($bean, $event, $arguments){
        // If lead_source is empty, set it to "Online"
        // if (empty($bean->lead_source_type_c)) {
        //     $bean->lead_source_type_c = 'Online';
        // }
    }

    function afterSaveMethod($bean, $event, $arguments) {

    //    echo '<pre>';
    //     print_r($bean);
    //     echo '</pre>';
    //     die();

    //  $bean->first_name = "Adi"; 
    //     $bean->last_name = "Raj";    
        // $bean->email1 = "aditya@gmail.com";

    // if ($bean->last_name == 'MISHRA') {
    //     $bean->mark_deleted($bean->id);
    // }
    // $sql = "UPDATE leads SET deleted = 1 WHERE last_name = 'MISHRA'";
        // $GLOBALS['db']->query($sql);
    
    // $GLOBALS['log']->fatal("HOOK RUN: Combined Name for ID {$bean->id} - Name: {$bean->name}");
    }

    function beforedeleteMethod($bean, $event, $arguments) {
    //     $sql = "UPDATE leads SET deleted = 1 WHERE last_name = 'MISHRA'";
    //     $GLOBALS['db']->query($sql);
    }


}
