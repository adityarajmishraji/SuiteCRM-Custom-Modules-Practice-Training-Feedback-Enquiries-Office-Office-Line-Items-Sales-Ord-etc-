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
echo "<pre>";
print_r($contacts);
echo "</pre>";
?>

<!--     

//Some imp table fields of contacts
//id,date_modified,created_by,description,deleted,assigned_user_id,first_name,last_name,title,department,phone_home,phone_work,phone_mobile,
//primary_address_street,primary_address_city,primary_address_state,primary_address_postalcode,primary_address_country,lead_source,portal_user_type
//this is a field whatever we want to modify, we can take a refrence from it.
// [id] => 10e4f997-a58c-dfa8-9507-688c55e16da7
            // [date_entered] => 2025-08-01 05:48:01
            // [date_modified] => 2025-08-01 05:48:01
            // [modified_user_id] => 1
            // [created_by] => 1
            // [description] => 
            // [deleted] => 0
            // [assigned_user_id] => seed_sarah_id
            // [salutation] => 
            // [first_name] => Leonard
            // [last_name] => Cogdill
            // [title] => Mgr Operations
            // [photo] => 
            // [department] => 
            // [do_not_call] => 0
            // [phone_home] => (894) 400-1486
            // [phone_mobile] => (236) 656-4132
            // [phone_work] => (831) 555-1107
            // [phone_other] => 
            // [phone_fax] => 
            // [lawful_basis] => 
            // [date_reviewed] => 
            // [lawful_basis_source] => 
            // [primary_address_street] => 111 Silicon Valley Road
            // [primary_address_city] => San Francisco
            // [primary_address_state] => CA
            // [primary_address_postalcode] => 13093
            // [primary_address_country] => USA
            // [alt_address_street] => 
            // [alt_address_city] => 
            // [alt_address_state] => 
            // [alt_address_postalcode] => 
            // [alt_address_country] => 
            // [assistant] => 
            // [assistant_phone] => 
            // [lead_source] => Partner
            // [reports_to_id] => 
            // [birthdate] => 
            // [campaign_id] => 
            // [joomla_account_id] => 
            // [portal_account_disabled] => 
            // [portal_user_type] => Single -->