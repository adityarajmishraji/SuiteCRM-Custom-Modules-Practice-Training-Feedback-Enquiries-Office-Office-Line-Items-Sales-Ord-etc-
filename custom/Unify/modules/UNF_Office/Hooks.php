<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OfficeClass
{
    // After UI Frame Hook Method
    function afterUIFrame($event, $arguments)
    {
        echo 'hello';
    }

    // Before Save Hook Method
    function beforeSaveMethod($bean, $event, $arguments)
    {
        
    }
}
