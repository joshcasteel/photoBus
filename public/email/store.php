<?php


echo 'Store email';


$data['email'] = $_POST["email"];
$data['state'] = $_POST["state"];
$data['city'] = $_POST["city"];

var_dump($data);




// verify data is good

// connect to database

// store

// return back to main email with success

header("Location: /email");
exit();



