<?php
function customUNF_Credit_NotesLineItems($focus, $field, $value, $view)
{
    global $sugar_config, $locale, $app_list_strings, $mod_strings;

    $tableName = 'unf_credit_notes';
    $moduleName = 'UNF_Credit_Notes';

    $liTableName = 'unf_credit_notes_line_items';
    $liModuleName = 'UNF_Credit_Notes_Line_Items';

    $relTable = 'unf_credit_notes_unf_credit_notes_line_items_c';
    $relACol = 'unf_credit_notes_unf_credit_notes_line_itemsunf_credit_notes_ida';
    $relBCol = 'unf_credit801de_items_idb';

    $liGroupTableName = 'unf_line_items_groups';
    $liGroupModuleName = 'UNF_Line_Items_Groups';

    $html = '';

    if($view == 'EditView')
    {
        $enableGroups = 0;

        $html .= '<link rel="stylesheet" href="custom/Unify/sources/Line_Item/Common_Line_Item.css">';
        $html .= '<link rel="stylesheet" href="custom/Unify/modules/' . $moduleName . '/Line_Item.css">';
        $html .= '<script src="custom/Unify/sources/Line_Item/Common_Line_Item.js"></script>';
        $html .= '<script src="custom/Unify/modules/'.$moduleName.'/Line_Item.js?v8"></script>';

        $html .= '<table cellspacing="4" id="lineItems" class="ui-sortable"></table>'; 
        if ($enableGroups) {
            $html .= '<input type="button" id="btn_new_group" value="Add New Group" onclick="addGroup(0);" style="background: #007bff">';
            $html .= '<input type="button" id="btn_copy_group" value="Copy Last Group" onclick="copyGroup();" style="background: #4caf50;display:none;">';
        }
        $html .= '<script language="javascript">
            var sig_digits = '.$locale->getPrecision().';
       </script>';

        $html .= "<script>
            var enableGroups = ".$enableGroups.";
        </script>";

        $html .= '<script>
            if(typeof sqs_objects == "undefined"){var sqs_objects = new Array;}
        </script>';

        if ($focus->id != '')
        {
            $html .= "<script>console.time('Line Items');</script>";

            require_once 'modules/' . $liModuleName . '/' . $liModuleName . '.php';
            require_once 'modules/' . $liGroupModuleName . '/' . $liGroupModuleName . '.php';
            
            $query = "SELECT LI.id, LI.group_id FROM " . $tableName . " A LEFT JOIN  " . $relTable . " R ON  A.id = R." . $relACol . " LEFT JOIN " . $liTableName . " LI ON R." . $relBCol . " = LI.id LEFT JOIN " . $liGroupTableName . " G ON LI.group_id = G.id WHERE A.deleted=0 AND R.deleted=0 AND LI.deleted=0 AND G.deleted=0 AND A.id='" . $focus->id . "' ORDER BY LI.sr_no";
            
            $GLOBALS['log']->code($query);
            
            $result = $GLOBALS['db']->query($query);
            while($rows = $GLOBALS['db']->fetchByAssoc($result))
            {
                
                $lineItem = BeanFactory::newBean($liModuleName);
                $lineItem->retrieve($rows['id'], false);
                $lineItem = json_encode($lineItem->toArray());

                $groupItem = 'null';
                if ($rows['group_id'] != null) {
                    $groupItem = BeanFactory::newBean($liGroupModuleName);
                    $groupItem->retrieve($rows['group_id'], false);
                    $groupItem = json_encode($groupItem->toArray());
                }

                $html .= "<script>
                    insertGroupLineItem(" . $lineItem . "," . $groupItem . ");
                </script>";
            }

            $html .= "<script>console.timeEnd('Line Items');</script>";
        }

        if (!$enableGroups) {
            $html .= '<script>addGroup();</script>';
        }
    }
    return  $html;
}

?>