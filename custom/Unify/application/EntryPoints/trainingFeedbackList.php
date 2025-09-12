<?php



if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

function getAllContacts($db)
{
    $query = "SELECT *
              FROM unf_trainingfeedback
              WHERE deleted = 0
              ORDER BY date_of_training DESC";

    $res = $db->query($query);
    // Start table
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<tr>
            <th>ID</th>
            <th>Participent Name</th>
            <th>Training Session Title</th>
            <th>Trainer Name</th>
            <th>Date of Training</th>
            <th>Rating</th>
            <th>Improvement Suggestions</th>
            <th>Assigned to </th>
            <th>Feedback</th>
            <th>Date Created</th>
          </tr>";

    while ($row = $db->fetchByAssoc($res)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['training_session_title']) . "</td>";
        echo "<td>" . htmlspecialchars($row['trainer_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_of_training']) . "</td>";
        echo "<td>" . htmlspecialchars($row['rating']) . "</td>";
        echo "<td>" . htmlspecialchars($row['improvement_suggestions']) . "</td>";
        echo "<td>" . htmlspecialchars($row['user_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['feedback_comments']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_entered']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    // Simple output
    // while ($row = $db->fetchByAssoc($res)) {
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }

    
}

getAllContacts($db);


// ListView Fields

// Participent Name    
// Training Session Title    
// Trainer Name    
// Date of Training    
// Rating    
// Improvement Suggestions    
// Assigned to    
// Feedback Comments    
// Date Created    
// JOIN users ON unf_trainingfeedback.assigned_user_id = users.user_name

$query = "SELECT unf_trainingfeedback.*, users.user_name 
  //           FROM unf_trainingfeedback
  //           JOIN users 
  //           ON unf_trainingfeedback.assigned_user_id = users.id
  //           WHERE unf_trainingfeedback.deleted = 0
  //           ORDER BY unf_trainingfeedback.date_of_training DESC";













// require_once ('custom/Extension/application/Ext/EntryPointRegistry/trainingFeedbackList.php');
// require_once('data/BeanFactory.php');

// global $current_user, $db;

// $results = array();
// $query = "SELECT id, name, training_session_title, trainer_name, date_of_training, rating 
//           FROM 	unf_trainingfeedback
//           WHERE deleted = 0
//           ORDER BY	date_of_training DESC";
// $res = $db->query($query);

// echo "<h2>Training Feedback List</h2>";
// echo "<table border='1' cellpadding='5' cellspacing='0'>";
// echo "<tr><th>Participant</th><th>Session</th><th>Trainer</th><th>Date</th><th>Rating</th></tr>";

// while ($row = $db->fetchByAssoc($res)) {
//     echo "<tr>
//             <td>{$row['name']}</td>
//             <td>{$row['training_session_title']}</td>
//             <td>{$row['trainer_name']}</td>
//             <td>{$row['date_of_training']}</td>
//             <td>{$row['rating']}</td>
//           </tr>";
// }
// echo "</table>";
