<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Chalan {

   function afterUIFrame($event, $arguments)
    {
        // Only show Convert button on EditView

        if ($_REQUEST['action'] == 'EditView' && !empty($_REQUEST['record'])) {
            echo '<script src="custom/Unify/modules/UNF_Chalan/Edit.js"></script>';
        }
        
    }

    function beforeSaveMethod($bean, $event, $arguments){
        
        //  $bean->amount = $bean->qty + $bean->rate;

    }
}

