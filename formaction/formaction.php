<?php

include "../database.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$contact_method = $_POST['contact-method'];
$project_type = $_POST['project-type'];
$style = $_POST['style'];
$budget = $_POST['budget'];

$sql = "INSERT INTO `booking`( `name`, `email`, `phone`, `address`,
                   `contactmethod`, `projectType`, `designStyle`, `budget`)
                    VALUES ('$name','$email','$phone','$address',
                    '$contact_method','$project_type','$style','$budget')";
       
$query =  mysqli_query($connection, $sql);

if($query)
{
    echo "We heard you , you'll get the verification email in a while";
}
       