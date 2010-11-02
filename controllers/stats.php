<?php
function showStats($userID)
{
    include 'models/stats.php';
    $userStats = new stats();
    $userStats->showData($userID); 
}
?>
