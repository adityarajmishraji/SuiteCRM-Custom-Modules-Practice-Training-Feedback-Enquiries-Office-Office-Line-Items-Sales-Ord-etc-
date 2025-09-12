<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadsClass
{

    function afterUIFrame($event, $arguments)
    {
        // Custom Logic
        echo '<script src="custom/Unify/modules/Leads/Edit.js"></script>';
        // echo 'hello';

    }

    function beforeSaveMethod($bean, $event, $arguments)
    {
        // $LeadBean = BeanFactory::newBean('Leads');
        // $LeadBean->name;
        // $GLOBALS['log']->fatal('LeadName Bean Fields Before Save: ' . print_r($LeadBean->toArray(), true));
    }

    function afterSaveMethod($bean, $event, $arguments)
    {
        // Check if the Lead is new (not being updated)
        // if ($bean->fetched_row == null) {
        //     // Create an Alert for the current user
        //     $alert = BeanFactory::newBean('Alerts');
        //     $alert->name = 'New Lead Created';
        //     $alert->description = 'A new Lead has been created with Name: ' . $bean->name;
        //     $alert->url_redirect = 'index.php?module=Leads&action=DetailView&record=' . $bean->id;
        //     $alert->assigned_user_id = $bean->assigned_user_id;  // Alert to the assigned user
        //     $alert->type = 'info';  // You can set the type to 'info', 'warning', 'error', etc.
        //     $alert->is_read = 0;  // New alert (unread)
        //     $alert->save();

        // }
        // // Debug full bean data
        // $GLOBALS['log']->code('Lead Bean Data:');

        // $accountBean = BeanFactory::newBean('Accounts');

        // $accountBean->name = $bean->name;
        // $accountBean->phone_office = $bean->phone_mobile;
        // $accountBean->website = $bean->website;
        // $accountBean->phone_fax = $bean->phone_fax;
        // $accountBean->email1 = $bean->email1;

        // $accountBean->billing_address_street = $bean->primary_address_street;
        // $accountBean->billing_address_city = $bean->primary_address_city;
        // $accountBean->billing_address_state = $bean->primary_address_state;
        // $accountBean->billing_address_postalcode = $bean->primary_address_postalcode;
        // $accountBean->billing_address_country = $bean->primary_address_country;

        // $accountBean->shipping_address_street = $bean->alt_address_street;
        // $accountBean->shipping_address_city = $bean->alt_address_city;
        // $accountBean->shipping_address_state = $bean->alt_address_state;
        // $accountBean->shipping_address_postalcode = $bean->alt_address_postalcode;
        // $accountBean->shipping_address_country = $bean->alt_address_country;

        // $accountBean->description = $bean->description;
        // $accountBean->assigned_user_id = $bean->assigned_user_id;

        // // to Save data , so we use it further 
        // $accountId = $accountBean->save();

        // $contactBean = BeanFactory::newBean('Contacts');

        // $contactBean->first_name = $bean->first_name;
        // $contactBean->last_name = $bean->last_name;
        // $contactBean->phone_work = $bean->phone_work;
        // $contactBean->phone_mobile = $accountBean->phone_mobile;
        // $contactBean->title = $bean->title;
        // $contactBean->department = $bean->department;
        // $contactBean->account_name = $accountBean->account_name;
        // $contactBean->phone_fax = $accountBean->phone_fax;
        // $contactBean->email1 = $accountBean->email1;

        // $contactBean->primary_address_street = $accountBean->billing_address_street;
        // $contactBean->primary_address_city = $accountBean->billing_address_city;
        // $contactBean->primary_address_state = $accountBean->billing_address_state;
        // $contactBean->primary_address_postalcode = $accountBean->billing_address_postalcode;
        // $contactBean->primary_address_country = $accountBean->billing_address_country;

        // $contactBean->other_address_street = $accountBean->shipping_address_street;
        // $contactBean->other_address_city = $accountBean->shipping_address_city;
        // $contactBean->other_address_state = $accountBean->shipping_address_state;
        // $contactBean->other_address_postalcode = $accountBean->shipping_address_postalcode;
        // $contactBean->other_address_country = $accountBean->shipping_address_country;

        // $contactBean->description = $accountBean->description;
        // $contactBean->account_id = $accountId;
        // $contactBean->assigned_user_id = $accountBean->assigned_user_id;

        // // Save and log which fields are set
        // $GLOBALS['log']->fatal('Contact Bean Fields Before Save: ' . print_r($contactBean->toArray(), true));

        // $contactBean->save();

        // $GLOBALS['log']->fatal('Contact Bean Saved with ID: ' . $contactBean->id);
    }
    function beforeDeleteMethod($bean, $event, $arguments)
    {

        // 1 Log start of deletion process
        // $GLOBALS['log']->fatal("Lead Deletion Triggered: Lead ID = {$bean->id}, Name = {$bean->name}");

        // // 2 Find related Account(s) by Lead name
        // $accountBean = BeanFactory::newBean('Accounts');
        // $queryAcc = "SELECT id FROM accounts WHERE name = '{$bean->name}' AND deleted = 0";
        // $resultAcc = $accountBean->db->query($queryAcc);

        // while ($rowAcc = $accountBean->db->fetchByAssoc($resultAcc)) {
        //     $acc = BeanFactory::getBean('Accounts', $rowAcc['id']);
        //     if ($acc && !empty($acc->id)) {

        //         // 3 Find related Contacts for this Account
        //         $contactBean = BeanFactory::newBean('Contacts');
        //         $queryCon = "SELECT id FROM contacts WHERE account_id = '{$acc->id}' AND deleted = 0";
        //         $resultCon = $contactBean->db->query($queryCon);

        //         while ($rowCon = $contactBean->db->fetchByAssoc($resultCon)) {
        //             $con = BeanFactory::getBean('Contacts', $rowCon['id']);
        //             if ($con && !empty($con->id)) {
        //                 $con->mark_deleted($con->id);
        //                 $GLOBALS['log']->fatal("Related Contact Deleted: ID = {$con->id}, Name = {$con->first_name} {$con->last_name}");
        //             }
        //         }

        // 4 Delete the Account itself
        //     $acc->mark_deleted($acc->id);
        //     $GLOBALS['log']->fatal("Related Account Deleted: ID = {$acc->id}, Name = {$acc->name}");
        // }
        // }

        // 5 Log completion
        // $GLOBALS['log']->fatal("Lead related Accounts & Contacts deletion completed for Lead ID: {$bean->id}");
        // $GLOBALS['log']->fatal("Lead Save and check the duplication in last_name and lead_source_type for Lead ID: {$bean->id}");
    }
    public function createLeadAlert($bean, $event, $arguments) {}
}
