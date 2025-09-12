<?php
$liModuleName = $this->lineItemModule;
$liGroupModuleName = $this->lineItemGroup;
$relationshipName = $this->relationshipName;

require_once 'modules/Relationships/Relationship.php';

$lineItems = $this->get_linked_beans($relationshipName, $liModuleName);

foreach ($lineItems as $lineItem) {
    $lineItem->mark_deleted($lineItem->id);
}

require_once 'modules/' . $liGroupModuleName . '/' . $liGroupModuleName . '.php';

$query = "SELECT id FROM ".strtolower($liGroupModuleName)." WHERE parent_id='".$this->id."'";
$result = $GLOBALS['db']->query($query);
while ($rows = $GLOBALS['db']->fetchByAssoc($result)) {
    $lineItem = BeanFactory::newBean($liGroupModuleName);
    $lineItem->mark_deleted($rows['id']);
}
