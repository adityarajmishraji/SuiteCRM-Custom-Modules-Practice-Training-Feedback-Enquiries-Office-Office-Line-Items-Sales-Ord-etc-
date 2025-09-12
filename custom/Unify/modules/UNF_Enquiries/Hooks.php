<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UNF_EnquiriesClass {

    
    function afterUIFrame($event, $arguments)
    {
        // Only show Convert button on DetailView
        if ($_REQUEST['action'] == 'DetailView' && !empty($_REQUEST['record'])) {
            echo '<script src="custom/Unify/modules/UNF_Enquiries/script.js"></script>';
        }
    }

    function beforeSaveMethod($bean, $event, $arguments){
        //Concatenate the First name and Last name
        $firstName = $bean->first_name;
        $lastName = $bean->last_name;
        $bean->name = $firstName . ' '. $lastName;
        
        $GLOBALS['log']->fatal("HOOK RUN: Combined Name for ID {$bean->id}");
    }
    
    function convertEnquiry($bean, $event, $arguments) {
        // Create Account from Enquiry data
        $accountBean = BeanFactory::newBean('Accounts');
        $accountBean->name = $bean->company_name ?: $bean->name;
        $accountBean->phone_office = $bean->mobile;
        $accountBean->email1 = $bean->email;
        $accountBean->billing_address_street = $bean->address;
        $accountBean->description = $bean->description;
        $accountBean->assigned_user_id = $bean->assigned_user_id;
        $accountId = $accountBean->save();
        
        // Create Contact from Enquiry data
        $contactBean = BeanFactory::newBean('Contacts');
        $contactBean->first_name = $bean->first_name;
        $contactBean->last_name = $bean->last_name;
        $contactBean->phone_mobile = $bean->mobile;
        $contactBean->email1 = $bean->email;
        $contactBean->primary_address_street = $bean->address;
        $contactBean->description = $bean->description;
        $contactBean->account_id = $accountId;
        $contactBean->assigned_user_id = $bean->assigned_user_id;
        $contactBean->save();
        
        // Update enquiry status to Converted
        
        // $bean->status = 'Converted';
        $bean->save();
        
        // $GLOBALS['log']->fatal("The current status is {$bean->status}");
        $GLOBALS['log']->fatal("The Enquiry {$bean->id} converted to Account {$accountId} and Contact");
    }

    // function afterSaveMethod($bean, $event, $arguments){
       
        
        
        
        // echo '<pre>';
        // print_r($bean);
        // echo '</pre>';
        // die();

    // }
}
