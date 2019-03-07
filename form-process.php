<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$city = $_POST["city"];

$EmailTo = "jatin@rkspl.in,durgesh@webanaya.com,info@hnhtwenty.com";
$EmailFrom = "info@hnhtwenty.com";
$Subject = "Hotelware - You have received New Enquiry";

// prepare email body text
$Body = "\n";
$Body .= "Name: ";
$Body .= "\n";
$Body .= $name;

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";

$Body .= "City: ";
$Body .= $city;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$EmailFrom);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>
