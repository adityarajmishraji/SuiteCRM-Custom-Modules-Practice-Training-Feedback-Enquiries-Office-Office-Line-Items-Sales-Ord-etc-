<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

// Get all contacts using SQL query
$sql = "SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM contacts WHERE deleted = 0";
$result = $GLOBALS['db']->query($sql);

echo "<h1>All Contact Names</h1>";
echo "<ol>";

while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
    echo "<li>" . htmlspecialchars($row['full_name']) . "</li>";
}

echo "</ul>";
