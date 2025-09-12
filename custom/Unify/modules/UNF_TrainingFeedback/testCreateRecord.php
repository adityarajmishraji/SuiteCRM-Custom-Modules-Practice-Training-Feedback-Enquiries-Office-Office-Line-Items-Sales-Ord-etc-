<?php

require_once('data/BeanFactory.php');

global $current_user;

// Create a new record in Training Feedback
$feedback = BeanFactory::newBean('UNF_Training_Feedback'); 

$feedback->name = "Ravi Kumar";  // Participant Name
$feedback->training_session_title = "Advanced PHP Workshop";
$feedback->trainer_name = "Abhimanyu";
$feedback->date_of_training = "2025-08-18";
$feedback->score_content = 4;
$feedback->score_delivery = 5;
$feedback->score_engagement = 4;
$feedback->feedback_comments = "Great session, very interactive!";
$feedback->improvement_suggestions = "More real-world examples would help.";
$feedback->assigned_user_id = $current_user->id; // Assign current user

$feedback->save();

echo "Feedback record created with ID: " . $feedback->id;
