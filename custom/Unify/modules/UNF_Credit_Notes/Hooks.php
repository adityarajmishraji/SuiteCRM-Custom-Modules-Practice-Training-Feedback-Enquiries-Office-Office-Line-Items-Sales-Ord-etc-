<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CreditNotes {

   function afterUIFrame($event, $arguments)
    {
        echo "Cedit Notes line Items";
        // echo '<script src="custom/Unify/modules/UNF_SalesOrder/Edit.js"></script>';
        
    }

    function beforeSaveMethod($bean, $event, $arguments){
        
        //  $bean->amount = $bean->qty + $bean->rate;

    }

    function afterSaveMethod($bean, $event, $arguments){
        
       
    }
}

