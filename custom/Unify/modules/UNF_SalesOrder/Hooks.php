<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class SalesOrder {

   function afterUIFrame($event, $arguments)
    {
       
        // echo '<script src="custom/Unify/modules/UNF_SalesOrder/Edit.js"></script>';
        
    }

    function afterUIFrame2($event, $arguments)
    {
        // echo '<script>alert("2 echho statement")</script>';
        echo '<script src="custom/Unify/modules/UNF_SalesOrder/Edit.js"></script>';

    }


    function beforeSaveMethod($bean, $event, $arguments){
        
        //  $bean->amount = $bean->qty + $bean->rate;

    }
}

