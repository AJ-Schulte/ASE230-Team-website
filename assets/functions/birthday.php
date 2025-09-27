<?php 
function calculateAge($date) {
    $currentDate = new DateTime();
    $birthday = new DateTime($date);
    $diff = $currentDate->diff($birthday);
    return $diff -> y;
}

?>