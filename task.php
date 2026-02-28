<?php
// $marks = 85;
// $attendance = 75;

// if ($marks >= 80 && $attendance >= 75) {
//     echo "Scholarship Approved";
// } else {
//     echo "No Scholarship";
// }

$nationality = "Pakistan";
$age = 17;
$learnerPermit = true;

if ($nationality == "Pakistani") {

    if ($age >= 18 && $learnerPermit == true) {
        echo "Driving License Approved";
    } else {
        echo "Not Eligible for License";
    }

} else {
    echo "Only Pakistani citizens can apply";
}
?>