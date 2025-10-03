<?php
function cardInfo($member)
{
    echo "Email: ", $member['email'], "<br>",
    "Phone: ", $member['phoneNumber'], "<br>",
    "LinkedIn: ", $member['linkedIn'], "<br>",
    "GitHub: ", $member['github'];
}
?>