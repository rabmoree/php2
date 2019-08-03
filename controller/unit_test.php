<?php
require("UserController.php");

$userCont = new UserController();

    insert();
    update();
    readAll();
    delete();
    insertFalse();
    updateFalse1();
    updateFalse2();
    deleteFalse();

    function insert(){
        global $userCont;
        $name = "daingnainday";
        $email = "dindin@g.com";
        $username = "dindin";
        $password = "12345000";
        $result = $userCont->addUser($name,$email,$username,$password);
        echo "Test Case #1 Inserting record: ";
        var_dump($result);
        echo "<br>";
    }

    function update(){
        global $userCont;
        $id = "7";
        $password2 = "okieies";
        $result = $userCont->updateUser($id, $password2);
        echo "Test Case #2 Updating record: ";
        var_dump($result);
        echo "<br>";
    }

    function readAll(){
        global $userCont;
        $result = $userCont->getAllUser();
        echo "Test Case #3 Read All record: ";
        var_dump($result);
        echo "<br>";
    }

    function delete(){
        global $userCont;
        $id = "15";
        $result = $userCont->deleteUser($id);
        echo "Test Case #4 Deleting record: ";
        var_dump($result);
        echo "<br>";
    }

    function insertFalse(){
        global $userCont;
        $name = "";
        $email = "dindin@g.com";
        $username = "dindin";
        $password = "12345000";
        $result = $userCont->addUser($name,$email,$username,$password);
        echo "Test Case #5 Inserting record: ";
        var_dump($result);
        echo "<br>";
    }

    function updateFalse1(){
        global $userCont;
        $id = "4";
        $password2 = "";
        $result = $userCont->updateUser($id, $password2);
        echo "Test Case #6 Updating record: ";
        var_dump($result);
        echo "<br>";
    }

    function updateFalse2(){
        global $userCont;
        $id = "66";
        $password2 = "whatsup";
        $result = $userCont->updateUser($id, $password2);
        echo "Test Case #7 Updating record: ";
        var_dump($result);
        echo "<br>";
    }

    function deleteFalse(){
        global $userCont;
        $id = "2";
        $result = $userCont->deleteUser($id);
        echo "Test Case #8 Deleting record:";
        var_dump($result);
        echo "<br>";
        // echo "hello?";
    }
    
?>