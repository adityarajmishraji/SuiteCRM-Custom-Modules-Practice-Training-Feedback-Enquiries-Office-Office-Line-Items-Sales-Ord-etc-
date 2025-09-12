<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadsClass {

    // Method triggered before saving a lead
    function beforeSaveMethod($bean, $event, $arguments){
        // Debug full bean data
        // $GLOBALS['log']->fatal('Lead Bean Data: ' . print_r($bean->toArray(), true));
    }

    // Method triggered after saving a lead
    function afterSaveMethod($bean, $event, $arguments)
    {
        // Debug full bean data
        //  $GLOBALS['log']->fatal('Lead Bean Data: ' . print_r($bean->toArray(), true));

        // $employeeBean = BeanFactory::newBean('UNF_Employees');

        // $employeeBean->name = $bean->name;
        // $employeeBean->phone_office = $bean->phone_mobile;
        // $employeeBean->website = $bean->website;
        // $employeeBean->phone_fax = $bean->phone_fax;
        // $employeeBean->email1 = $bean->email1;

        // $employeeBean->billing_address_street = $bean->primary_address_street;
        // $employeeBean->billing_address_city = $bean->primary_address_city;
        // $employeeBean->billing_address_state = $bean->primary_address_state;
        // $employeeBean->billing_address_postalcode = $bean->primary_address_postalcode;
        // $employeeBean->billing_address_country = $bean->primary_address_country;

        // $employeeBean->shipping_address_street = $bean->alt_address_street;
        // $employeeBean->shipping_address_city = $bean->alt_address_city;
        // $employeeBean->shipping_address_state = $bean->alt_address_state;
        // $employeeBean->shipping_address_postalcode = $bean->alt_address_postalcode;
        // $employeeBean->shipping_address_country = $bean->alt_address_country;

        // $employeeBean->description = $bean->description;
        // $employeeBean->assigned_user_id = $bean->assigned_user_id;
 
        // $accountId = $employeeBean->save();

        // // Save and log which fields are set
        // $GLOBALS['log']->fatal('Contact Bean Fields Before Save: ' . print_r($employeeBean->toArray(), true));
        $GLOBALS['log']->debug('Trigger error method called for Lead ID: ' . $bean->id);

    }

    // Method to trigger an error intentionally
    public function triggerError($bean, $event, $arguments) {
        // Log error message instead of calling undefined method
        // $GLOBALS['log']->debug('Trigger error method called for Lead ID: ' . $bean->id);
    }
}
