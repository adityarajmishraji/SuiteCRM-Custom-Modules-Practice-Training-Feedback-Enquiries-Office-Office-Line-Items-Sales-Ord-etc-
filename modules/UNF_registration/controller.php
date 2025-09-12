<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class UNF_registrationController extends SugarController
{
    public function action_myCustomAction()
    {
        echo "Hello from myCustomAction in UNF_registrationController!";
        sugar_cleanup(true); // Clean exit
    }
}
