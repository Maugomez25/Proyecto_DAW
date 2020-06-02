<?php
require_once dirname(__FILE__) . "/Utils.php";

function login($uname, $password){
    if($users = readJSON()){

        $userNameMatch = false;
        $userMatch = null;

        foreach($users as $user){
            if(strcmp($user["username"],$uname) == 0){
                $userNameMatch = true;
                $userMatch = $user;
                break;
            }
        }

        if($userNameMatch){
            if($userMatch["password"] === $password){

                session_start();
                $_SESSION["username"] = $userMatch["username"];
                $_SESSION["name"] = $userMatch["name"];
                $_SESSION["lastname"] = $userMatch["lastname"];
                $_SESSION["start_at"] = time();
            }
        }
    }
}

if( strtolower($_SERVER["REQUEST_METHOD"]) === "post" ){

    $uname = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["passw"]) ? $_POST["passw"] : "";

    if($users = readUsers()){

        $userNameMatch = false;
        $userMatch = null;

        foreach($users as $user){
            if(strcmp($user["username"],$uname) == 0){
                $userNameMatch = true;
                $userMatch = $user;
                break;
            }
        }

        if($userNameMatch){
            if($userMatch["password"] === $password){

                session_start();
                $_SESSION["username"] = $userMatch["username"];
                $_SESSION["name"] = $userMatch["name"];
                $_SESSION["lastname"] = $userMatch["lastname"];
                $_SESSION["start_at"] = time();
                header("Location: ../admin/agregar.php");
            }
            else{
                header("Location: ../admin/login.php?error=3");  
            }
        }
        else{
            header("Location: ../admin/login.php?error=2");
        }
    }
    else{
        header("Location: ../admin/login.php?error=1");
    }
}
?>