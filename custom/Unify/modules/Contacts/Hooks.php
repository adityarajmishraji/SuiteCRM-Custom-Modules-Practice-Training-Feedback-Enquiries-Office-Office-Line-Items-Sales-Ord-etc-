<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class StoreLastContact
{
    function after_save($bean, $event, $arguments)
    {
        // // Prevent infinite loops
        // if (isset($GLOBALS['creating_contacts'])) {
        //     return;
        // }
        // $GLOBALS['creating_contacts'] = true;
        
    //     global $current_user;

    //     // List of contacts to insert
    //     $contactsData = [
    //         ['Amit', 'Sharma', 'amit@gmail.com'],
    //         ['Priya', 'Singh', 'priya@gmail.com'],
    //         ['Rahul', 'Kumar', 'rahul@gmail.com']
    //     ];

    //     foreach ($contactsData as $data) {
    //         $contact = BeanFactory::newBean('Contacts');
    //         $contact->first_name       = $data[0];
    //         $contact->last_name        = $data[1];
    //         $contact->assigned_user_id = $current_user->id;
    //         $contact->save();

    //         // Handle email correctly
    //         $contact->load_relationship('email_addresses');
    //         $contact->emailAddress->addAddress($data[2], true); // true = primary
    //         $contact->emailAddress->save($contact->id, $contact->module_dir);
    //     }

    //     unset($GLOBALS['creating_contacts']);
    //     $GLOBALS['log']->fatal("3 Contact records inserted successfully via BeanFactory");
    }
}