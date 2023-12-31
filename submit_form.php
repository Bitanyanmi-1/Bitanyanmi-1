<?php
include("./database_functions.php");

$full_name = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$learningPython = isset($_POST['learningPython']);
$learningExcel = isset($_POST['learningExcel']);
$learningPowerBI = isset($_POST['learningPowerBI']);
$learningR = isset($_POST['learningR']);

echo '<br/>'.$full_name;
if ($learningExcel)
{
    echo '<br/>learning excel';
}
if ($learningPowerBI)
{
    echo '<br/>learning PBI';
}

// create a DB and configure file database_functions.php with its credentials, then uncomment next line
//insertLead($full_name, $email, $phone, $learningPython, $learningExcel, $learningPowerBI, $learningR)

?>