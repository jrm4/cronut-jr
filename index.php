<?php

require("./classes.php");

$currsub = new subject();

/* this is wrong */
// $currsub->firstname = "Joe";

$currsub->setFirstname("Bill");

$currsub->setLastname("Jones");

$currsub->setAge("35"); // hey, remember what happened when I put '100 tacos?' weird



echo "Well hello there, " . $currsub->getFirstname();
echo "<br>";
echo "Pardon me! I mean " . $currsub->drLastname();

echo "<br>";
echo "I'll record your fullname as " . $currsub->getFullname();
echo "<br>";
echo "thank you for participating";
echo "<p style=\"color:" . $currsub->agetocolor() . "\"> This is your color<p>"; 




?>
