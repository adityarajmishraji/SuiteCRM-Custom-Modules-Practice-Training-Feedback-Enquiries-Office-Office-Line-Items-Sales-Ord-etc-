<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

if (empty($_SESSION['last_contact_id'])) {
    echo "No recently created contact found.";
    exit;
}

$id = $db->quote($_SESSION['last_contact_id']);
$result = $db->query("SELECT id, first_name, last_name, phone_work, email1 
                      FROM contacts WHERE id = '$id' AND deleted = 0");
$data = $db->fetchByAssoc($result);

if ($data) {
    echo "<h2>Recently Created Contact</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    foreach ($data as $field => $value) {
        echo "<tr><th>{$field}</th><td>{$value}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Contact not found.";
}
