<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UNF_EnquiriesController extends SugarController
{
    public function action_convertEnquiry()
    {
        $recordId = $_REQUEST['record'];
        
        if (empty($recordId)) {
            SugarApplication::redirect('index.php?module=UNF_Enquiries');
            return;
        }
        
        // Load the enquiry record
        $enquiry = BeanFactory::getBean('UNF_Enquiries', $recordId);
        
        if (empty($enquiry->id)) {
            SugarApplication::redirect('index.php?module=UNF_Enquiries');
            return;
        }
        
        // Create Account
        $accountBean = BeanFactory::newBean('Accounts');
        $accountBean->name = $enquiry->company_name ?: $enquiry->name;
        $accountBean->phone_office = $enquiry->mobile;
        $accountBean->email1 = $enquiry->email;
        $accountBean->billing_address_street = $enquiry->address;
        $accountBean->description = $enquiry->description;
        $accountBean->assigned_user_id = $enquiry->assigned_user_id;
        $accountId = $accountBean->save();
        
        // Create Contact
        $contactBean = BeanFactory::newBean('Contacts');
        $contactBean->first_name = $enquiry->first_name;
        $contactBean->last_name = $enquiry->last_name;
        $contactBean->phone_mobile = $enquiry->mobile;
        $contactBean->email1 = $enquiry->email;
        $contactBean->primary_address_street = $enquiry->address;
        $contactBean->description = $enquiry->description;
        $contactBean->account_id = $accountId;
        $contactBean->assigned_user_id = $enquiry->assigned_user_id;
        $contactBean->save();
        
        // Update enquiry status
        $GLOBALS['log']->fatal("Before conversion - Status: {$enquiry->status}");
        $enquiry->status = 'Converted';
        $enquiry->save();
        $GLOBALS['log']->fatal("After conversion - Status: {$enquiry->status}");
        $GLOBALS['log']->fatal("Enquiry {$enquiry->id} converted to Account {$accountId} and Contact");
        
        // Redirect back to enquiry detail view with success message
        SugarApplication::redirect("index.php?module=UNF_Enquiries&action=DetailView&record={$recordId}&converted=1");
    }
}