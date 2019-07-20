<?php
require ("UserController.php");

$data = new UserController();

echo $data->addUser();
// if($res) {
//     return true;
// }
// else {
//     return "error";
// }


?>