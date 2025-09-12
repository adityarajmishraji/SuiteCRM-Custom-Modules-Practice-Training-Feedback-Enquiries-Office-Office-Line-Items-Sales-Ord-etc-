<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class TrainingFeedback {

   function afterUIFrame($event, $arguments)
    {
        //Custom Logic
        echo '<script src="custom/Unify/modules/UNF_TrainingFeedback/Demo.js"></script>';
    }

    function beforeSaveMethod($bean, $event, $arguments){
        
        //$bean->rating = $bean->score_engagement + $bean->score_delivery + $bean->score_content;
         $bean->rating = $bean->score_engagement + $bean->score_delivery + $bean->score_content;

    }
}



















































// file: custom/modules/Training_Feedback/RatingCalc.php
// if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

// class RatingCalc
// {
//     public function calculateRating($bean, $event, $arguments)
//     {
//         // Check if rating_score is passed directly from form
//         if (isset($_REQUEST['rating_score']) && is_numeric($_REQUEST['rating_score'])) {
//             $bean->rating = floatval($_REQUEST['rating_score']);
//             $GLOBALS['log']->fatal("RatingCalc: rating taken from form = {$bean->rating}");
//             return;
//         }

//         // Otherwise, auto-calc from scores
//         $c = is_numeric($bean->score_content) ? floatval($bean->score_content) : null;
//         $d = is_numeric($bean->score_delivery) ? floatval($bean->score_delivery) : null;
//         $e = is_numeric($bean->score_engagement) ? floatval($bean->score_engagement) : null;

//         $values = [];
//         if ($c !== null) $values[] = $c;
//         if ($d !== null) $values[] = $d;
//         if ($e !== null) $values[] = $e;

//         if (count($values) === 0) {
//             $bean->rating = null;
//             return;
//         }

//         // Calculate average
//         $avg = array_sum($values) / count($values);
//         $avg_rounded = round($avg, 1);

//         // Save numeric average to DB
//         $bean->rating = $avg_rounded;

//         $GLOBALS['log']->fatal("RatingCalc: scores=".implode(',', $values)." avg=$avg_rounded saved to rating");
//     }
// }
