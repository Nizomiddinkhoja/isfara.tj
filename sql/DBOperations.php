<?php
include  __DIR__."/DB.php";

class DBOperations
{

    public function  getUserByEmail($email){
        $com = new DbConnect();
        $sql = "select * from users where email='$email'";
        return mysqli_query($com->getDb(), $sql);
    }
}