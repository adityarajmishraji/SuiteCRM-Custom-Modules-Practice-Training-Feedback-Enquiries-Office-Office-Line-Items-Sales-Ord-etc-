<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

// Get date filter (default: today)
$filterDate = $_GET['date'] ?? date('Y-m-d');

// Count Enquiries using SuiteCRM's database
$enquiryQuery = "SELECT COUNT(*) as count FROM unf_enquiries WHERE DATE(date_entered) = '$filterDate' AND deleted = 0";
$enquiryResult = $GLOBALS['db']->query($enquiryQuery);
$enquiryRow = $GLOBALS['db']->fetchByAssoc($enquiryResult);
$enquiryCount = $enquiryRow['count'];

// Count Accounts using SuiteCRM's database
$accountQuery = "SELECT COUNT(*) as count FROM accounts WHERE DATE(date_entered) = '$filterDate' AND deleted = 0";
$accountResult = $GLOBALS['db']->query($accountQuery);
$accountRow = $GLOBALS['db']->fetchByAssoc($accountResult);
$accountCount = $accountRow['count'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .card { background: #f5f5f5; padding: 20px; margin: 10px; border-radius: 5px; display: inline-block; width: 200px; }
        .count { font-size: 30px; font-weight: bold; color: #007cba; }
        .filter { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    
    <div class="filter">
        <form method="get">
            <label>Date Filter:</label>
            <input type="date" name="date" value="<?php echo $filterDate; ?>">
            <input type="submit" value="Filter">
        </form>
    </div>
    
    <div class="card">
        <h3>Total Enquiries</h3>
        <div class="count"><?php echo $enquiryCount; ?></div>
        <small>Date: <?php echo $filterDate; ?></small>
    </div>
    
    <div class="card">
        <h3>Total Accounts</h3>
        <div class="count"><?php echo $accountCount; ?></div>
        <small>Date: <?php echo $filterDate; ?></small>
    </div>
    
</body>
</html>
