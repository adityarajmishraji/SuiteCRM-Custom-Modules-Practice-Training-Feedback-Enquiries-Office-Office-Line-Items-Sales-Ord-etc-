<?php
// Always include entry point for SuiteCRM environment
if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once('include/entryPoint.php');

// Load the bean
$feedback = BeanFactory::newBean('Training_Feedback');

// Assign values to custom fields
$feedback->improvement_suggestions_c = "More interactive sessions with real-world examples.";
$feedback->feedback_comments_c = "The trainer explained concepts very clearly.";
$feedback->trainer_name_c = "John Doe";
$feedback->training_session_title_c = "Advanced PHP Workshop";
$feedback->score_content_c = "5";
$feedback->score_delivery_c = "4";
$feedback->score_engagement_c = "3";
$feedback->rating_c = "Good";
$feedback->date_of_training_c = "2025-08-15"; // YYYY-MM-DD

// Default fields
$feedback->name = "Feedback for Advanced PHP Workshop"; // Always useful to set name field
$feedback->assigned_user_id = $current_user->id; // Assign to current user

// Save the record
$feedback->save();

echo "Training Feedback record created successfully with ID: " . $feedback->id;
?>
