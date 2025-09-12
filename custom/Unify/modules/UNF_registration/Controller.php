<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class UNF_registrationController extends SugarController
{
    // Override the save action
    public function action_save()
    {
        // Add a message before saving
        // This will show in the UI on next page load
        $_SESSION['custom_save_message'] = 'Your record is being saved. Please wait...';

        // Call the parent save method (this actually saves the record)
        parent::action_save();

        // Change the redirect URL after save
        // Example: redirect to the list view instead of detail view
        if (!empty($this->bean->id)) {
            $redirectUrl = "index.php?module=UNF_registration&action=DetailView&record=" . $this->bean->id;
        } else {
            $redirectUrl = "index.php?module=UNF_registration&action=index";
        }

        // Send the redirect
        SugarApplication::redirect($redirectUrl);
    }
}
