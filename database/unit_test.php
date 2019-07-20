<?php 
// require ("../database/Database.php");
require("../model/UserModel.php");
$db = new Database();

$res = $db->execute("INSERT INTO tableuser (name,email,username,password) VALUES ('rabz', 'rabz@g.com', '123zoo', '123')");
echo "Case 1 result: ".$res."<br>";

$res = $db->execute("UPDATE tableuser SET password = 'riorio' where id = 1");
echo "Case 2 result: ".$res."<br>";

$res = $db->execute("SELECT * FROM tableuser");
echo "Case 3 result: ".$res."<br>";

$res = $db->execute("DELETE from tableuser where id = 0");
echo "Case 4 result: ".$res."<br>";

$res = $db->execute("INSERT INTO tableusers (name,email,username,password) VALUES ('rabz', 'rabz@g.com', '123zoo', '123')");
echo "Case 5 result: ".$res."<br>";

$res = $db->execute("UPDATE tableusers SET password = 'riorio' where id = 1");
echo "Case 6 result: ".$res."<br>";

$res = $db->execute("SELECT * tableusers");
echo "Case 7 result: ".$res."<br>";

$res = $db->execute("DELETE from tableusers where id = 29");
echo "Case 8 result: ".$res."<br>";

// $data = new UserModel();

// $name = "";
// $email = "";
// $username = "";
// $password = "";


// $data->name="rabee";
// $data->email="rabee@g.com";
// $data->username="rabmoree";
// $data->password="123";
// echo "Unit Test Case #1: ";
// var_dump($data->insert());
// echo "Unit Test Case #1: ".$data->insert()."<br>";

// $data->password2="rio";
// $data->userID="1";
// echo "Unit Test Case #2: ".$data->updateData()."<br>";

// echo "Unit Test Case #3: ".$data->extractData()."<br>";

// $data->userID="26";
// echo "Unit Test Case #4: ".$data->deleteData()."<br>";

// $data->name;
// echo "Unit Test Case #1: ".$data->insert()."<br>";

?>  