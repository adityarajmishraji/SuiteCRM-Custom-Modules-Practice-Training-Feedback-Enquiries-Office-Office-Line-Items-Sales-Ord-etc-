<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class LeadsController extends SugarController
{
    public function action_echo()
    {
        $GLOBALS['log']->debug("Echo called with request: " . print_r($_REQUEST, 1));
        SugarApplication::redirect('index.php');
    }
    
    // Handle duplicate check AJAX request
    public function action_checkDuplicate()
    {
        $leadName = $_GET['record'] ?? '';

        $lastName = $_GET['last_name'] ?? '';

        // echo '<pre>';
        // print_r($lastName);
        // echo '</pre>';
        
        // $GLOBALS['log']->fatal('LeadName Bean Fields : ' .($lastName, true));

        $sql = "SELECT COUNT(*) as count FROM leads WHERE last_name = '" . $GLOBALS['db']->quote($lastName) . "' AND deleted = 0";
        $result = $GLOBALS['db']->query($sql);
        $row = $GLOBALS['db']->fetchByAssoc($result);
        
        $response = array(
            'Status' => ($row['count'] > 0) ? 1 : 0,
            'lastName' => $lastName,  // Debug: lastName value
            'count' => $row['count']  // Debug: duplicate count
        );
        
        echo json_encode($response);
        exit;
    }
}