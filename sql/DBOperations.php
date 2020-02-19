<?php
include  __DIR__."/DB.php";

class DBOperations
{

    public function  login($login, $password){
        $com = new DbConnect();
        $sql = "select * from users where login='$login' and password='".md5($password)."'";
        return mysqli_query($com->getDb(), $sql);
    }
}