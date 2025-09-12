<?php
require_once('data/BeanFactory.php');

global $current_user;

// Create a new record in Training Feedback
$leads = BeanFactory::newBean('Leads'); 

$leads->name = "Ravi Kumar";  // Participant Name
$leads->training_session_title = "Advanced PHP Workshop";
$leads->trainer_name = "Abhimanyu";
$leads->date_of_training = "2025-08-22";
$leads->score_content = 4;
$leads->score_delivery = 5;
$leads->score_engagement = 4;
$leads->leads_comments = "Great session, very interactive!";
$leads->improvement_suggestions = "More real-world examples would help.";
$leads->assigned_user_id = $current_user->id; // Assign current user

$feedback->save();

echo "Feedback record created with ID: " . $feedback->name;