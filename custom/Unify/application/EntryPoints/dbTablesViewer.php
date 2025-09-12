<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

$tableName = isset($_GET['table']) ? $db->quote($_GET['table']) : '';

function getAllTables($db) {
    $result = $db->query("SHOW TABLES");
    $tables = [];
    while ($row = $db->fetchByAssoc($result)) {
        $tables[] = array_values($row)[0];
    }
    return $tables;
}

function getTableStructure($db, $table) {
    $result = $db->query("DESCRIBE `$table`");
    $structure = [];
    while ($row = $db->fetchByAssoc($result)) {
        $structure[] = $row;
    }
    return $structure;
}
//get all database table and get table structure 
echo "<h2>Database Tables</h2>";
if ($tableName) {
    echo "<h3>Structure of table: {$tableName}</h3>";
    $structure = getTableStructure($db, $tableName);
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";
    foreach ($structure as $col) {
        echo "<tr>";
        foreach ($col as $val) {
            echo "<td>{$val}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<p><a href='index.php?entryPoint=dbTablesViewer'>Back to all tables</a></p>";
} else {
    $tables = getAllTables($db);
    echo "<ul>";
    foreach ($tables as $t) {
        echo "<li><a href='index.php?entryPoint=dbTablesViewer&table={$t}'>{$t}</a></li>";
    }
    echo "</ul>";
}
