<?php 
require("../model/UserModel.php");


$data = new UserModel();

$name = "";
$email = "";
$username = "";
$password = "";
$userID = "";


$data->name="rabee";
$data->email="rabee@g.com";
$data->username="rabmoree";
$data->password="123";
echo "Unit Test Case #1: ";
var_dump($data->insert());


echo "Unit Test Case #2: ";
$data->password2="manga";
$data->userID="1";
var_dump($data->updateData());

echo "Unit Test Case #3: ";
var_dump($data->extractData());


echo "Unit Test Case #4: ";
$data->userID="40"; 
var_dump($data->deleteData());

// echo "Unit Test Case #5: ";
// var_dump($data->insert());

echo "Unit Test Case #6: ";
$data->password2="sarap";
$data->userID="qwe";
var_dump($data->updateData());

echo "Unit Test Case #7: ";
$data->userID="eqw";
var_dump($data->deleteData());



?>  