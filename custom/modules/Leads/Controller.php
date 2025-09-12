<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class LeadsController extends SugarController
{
    public function action_checkDuplicate()
    {
        $return = [];

        $leadName = $_REQUEST['record_id'];
        $lastName = $_REQUEST['last_name'];
        $sourceType = $_REQUEST['lead_source_type_c'];

        $query = "SELECT
    COUNT(L.id)
FROM
    leads AS L
LEFT JOIN leads_cstm AS LC
ON 
	L.id = LC.id_c
WHERE
    L.deleted = 0 AND REPLACE(L.last_name, ' ', '') = REPLACE('{$lastName}', ' ', '') AND  LC.lead_source_type_c = '$sourceType' AND L.id != '$leadName'";

        // SELECT COUNT(id) 
        //   FROM leads
        //   WHERE deleted = 0
        //   AND REPLACE(L.last_name, ' ', '') = REPLACE('{$lastName}', ' ', '') AND id != '$leadName'";

        $recordCount = $GLOBALS['db']->getOne($query);

        if ($recordCount > 0) {
            $return['Status'] = 1;
        } else {
            $return['Status'] = 0;
        }

        echo json_encode($return);
        die();
    }
}
