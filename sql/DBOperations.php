<?php
include  __DIR__."/DB.php";

class DBOperations
{

    public function  login($login, $password){
        $com = new DbConnect();
        $sql = "select * from users where login='$login' and password='".md5($password)."'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getCategories(){
        $com = new DbConnect();
        $sql = "SELECT c.`id`, t.`title`, t.`description` FROM  category c JOIN texts t ON t.`id_menu` = c.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='ru' AND c.`status`=1 AND cn.`name`='category'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editCategory($id, $title, $description, $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title', description = '$description' WHERE id_menu = $id AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='category')";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getCategoryByID($id, $locale){
        $com = new DbConnect();
        $sql = "
SELECT t.`title`, t.`description` FROM  category c JOIN texts t ON t.`id_menu` = c.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='$locale' AND c.`status`=1 AND cn.`name`='category' AND c.id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteCategory($id){
        $com = new DbConnect();
        $sql = "UPDATE category SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function addCategory(){
        $com = new DbConnect();
        $sql = "INSERT INTO category(id, `status`) VALUE(DEFAULT, 1)";
        return mysqli_query($com->getDb(), $sql);
    }

    public function addCategoryText($title, $description, $locale){
        $com = new DbConnect();
        $sql = "INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='category'),
										(SELECT MAX(id) FROM category),
										'$title',
										'$description',
										'',
										(SELECT id FROM locale WHERE `name`='$locale'))";
        return mysqli_query($com->getDb(), $sql);
    }
}