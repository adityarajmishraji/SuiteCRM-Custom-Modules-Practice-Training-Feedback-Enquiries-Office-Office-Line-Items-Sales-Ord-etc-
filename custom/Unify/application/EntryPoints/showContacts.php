<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

function getAllContacts($db) {
    $sql = "SELECT id, first_name, last_name, title, phone_home, date_modified
            FROM contacts 
            WHERE deleted = 0
            LIMIT 10";
    $result = $db->query($sql);
    $contacts = [];
    while ($row = $db->fetchByAssoc($result)) {
        $contacts[] = $row;
    }
    return $contacts;
}

echo "<h2>Last 10 Contacts</h2>";

$contacts = getAllContacts($db);

if (!empty($contacts)) {
    echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse; width:100%;'>";
    echo "<thead style='background-color:#f2f2f2;'>";
    echo "<tr>";
    foreach (array_keys($contacts[0]) as $colName) {
        echo "<th>" . htmlspecialchars($colName) . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($contacts as $contact) {
        echo "<tr>";
        foreach ($contact as $value) {
            echo "<td>" . htmlspecialchars($value ?? '') . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No contacts found.</p>";
}
// echo "<pre>";
// print_r($contacts);
// echo "</pre>";
// ?>