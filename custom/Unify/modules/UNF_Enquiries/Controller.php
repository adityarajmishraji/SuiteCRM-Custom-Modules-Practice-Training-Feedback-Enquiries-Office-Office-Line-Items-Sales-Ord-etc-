<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class UNF_EnquiriesController extends SugarController
{
    // public function action_echo()
    // {
    //     $GLOBALS['log']->debug("Echo called with request: " . print_r($_REQUEST, 1));
    //     SugarApplication::redirect('index.php');
    // }
    
    // We creates the Convert button on Detail View. On click create button. Create One Account and one Contact with enquiry data.
    // Here this controller just Handle the request
    
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
    

}