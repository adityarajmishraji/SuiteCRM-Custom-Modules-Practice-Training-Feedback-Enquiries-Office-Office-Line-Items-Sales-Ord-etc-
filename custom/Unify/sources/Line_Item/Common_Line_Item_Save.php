<?php
$liModuleName = $this->lineItemModule;
$liGroupModuleName = $this->lineItemGroup;
$relACol = $this->relACol;

if (empty($this->id) || (isset($_POST['duplicateSave']) && $_POST['duplicateSave'] == 'true')) {
    if (isset($_POST['line_item_id'])) {
        unset($_POST['line_item_id']);
    }

    if (isset($_POST['group_id'])) {
        unset($_POST['group_id']);
    }
}

// Group Save
require_once 'modules/' . $liGroupModuleName . '/' . $liGroupModuleName . '.php';

$key = 'group_';

$groups = array();
$group_count = isset($_POST[$key . 'group_number']) ? count($_POST[$key . 'group_number']) : 0;
$j = 0;

for ($i = 0; $i < $group_count; ++$i) {
    $postData = null;
    if (isset($_POST[$key . 'deleted'][$i])) {
        $postData = $_POST[$key . 'deleted'][$i];
    } else {
        LoggerManager::getLogger()->warn('Line Item Group deleted field is not set in requested POST data at key: ' . $key . '[' . $i . ']');
    }

    if ($postData == 1) {
        $liGroup = BeanFactory::newBean($liGroupModuleName);
        $liGroup->mark_deleted($_POST[$key . 'id'][$i]);
    } else {
        $liGroup = BeanFactory::newBean($liGroupModuleName);

        foreach ($liGroup->field_defs as $field_def) {
            $field_name = $field_def['name'];
            if (isset($_POST[$key . $field_name][$i])) {
                $liGroup->$field_name = $_POST[$key . $field_name][$i];
            }
        }

        $liGroup->group_number = ++$j;
        $liGroup->assigned_user_id = $this->assigned_user_id;
        $liGroup->parent_id  = $return_id;
        $liGroup->parent_type  = $this->object_name;

        $liGroup->save();

        $_POST[$key . 'id'][$i] = $liGroup->id;

        if (isset($_POST[$key . 'group_number'][$i])) {
            $groups[$_POST[$key . 'group_number'][$i]] = $liGroup->id;
        }
    }
}

// Save Line Items
require_once 'modules/' . $liModuleName . '/' . $liModuleName . '.php';

$key = 'line_item_';

$line_count = isset($_POST[$key . 'name']) ? count($_POST[$key . 'name']) : 0;

$j = 0;
for ($i = 0; $i < $line_count; ++$i) {
    if (isset($_POST[$key . 'deleted'][$i]) && $_POST[$key . 'deleted'][$i] == 1) {
        $lineItem = BeanFactory::newBean($liModuleName);
        $lineItem->mark_deleted($_POST[$key . 'id'][$i]);
    } else {
        if (!isset($_POST[$key . 'id'][$i])) {
            LoggerManager::getLogger()->warn('Post data has no key id');
            $postDataKeyIdI = null;
        } else {
            $postDataKeyIdI = $_POST[$key . 'id'][$i];
        }

        $lineItem = BeanFactory::getBean($liModuleName, $postDataKeyIdI);

        if (!$lineItem) {
            $lineItem = BeanFactory::newBean($liModuleName);
        }

        foreach ($lineItem->field_defs as $field_def) {
            $field_name = $field_def['name'];
            if (isset($_POST[$key . $field_name][$i])) {
                $lineItem->$field_name = $_POST[$key . $field_name][$i];
            }
        }

        // Group
        if (isset($_POST[$key . 'group_number'][$i])) {
            if (!isset($_POST[$key . 'group_number'][$i])) {
                LoggerManager::getLogger()->warn('Line Item Group error: Group number at post data key index is undefined in groups. Key and index was: ' . $key . ', ' . $i);
                $groupIndex = null;
            } else {
                $groupIndex = $_POST[$key . 'group_number'][$i];
            }

            if (!isset($groups[$groupIndex])) {
                LoggerManager::getLogger()->warn('Line Item Group error: Group index was: ' . $groupIndex);
                $lineItem->group_id = null;
            } else {
                $lineItem->group_id = $groups[$_POST[$key . 'group_number'][$i]];
            }
        }

        if (trim($lineItem->name) != '') {
            $lineItem->assigned_user_id = $this->assigned_user_id;
            $lineItem->$relACol = $return_id;
            $lineItem->save();
            $_POST[$key . 'id'][$i] = $lineItem->id;
        }
    }
}


// public function save($check_notify = false)
// {
//     $return_id = parent::save($check_notify);

//     require_once 'custom/Unify/sources/Line_Item/Common_Line_Item_Save.php';

//     return $return_id;
// }

// public function mark_deleted($id)
// {
//     require_once 'custom/Unify/sources/Line_Item/Common_Line_Item_Delete.php';

//     parent::mark_deleted($id);
// }