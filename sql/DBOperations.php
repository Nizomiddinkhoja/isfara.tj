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
        echo $sql;
        return mysqli_query($com->getDb(), $sql);
    }


    public function  get_news(){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img  FROM  news n JOIN texts t ON t.id_menu = n.id 
JOIN locale l ON l.id=t.locale 
JOIN content cn ON cn.id=t.id_content 
WHERE l.name='ru' AND n.status=1 AND cn.name='news'";
        return mysqli_query($com->getDb(), $sql);
    }


    public function  get_edit_news_tj($id){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, t.body  FROM  news n JOIN texts t ON t.id_menu = n.id 
JOIN locale l ON l.id=t.locale 
JOIN content cn ON cn.id=t.id_content 
WHERE l.name=\"ru\" AND n.status=1 AND cn.name=\"news\" and n.`id`='".$id."'";
        return mysqli_query($com->getDb(), $sql);
    }
    public function  get_edit_news_ru($id){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, t.body   FROM  news n JOIN texts t ON t.id_menu = n.id
JOIN locale l ON l.id=t.locale
JOIN content cn ON cn.id=t.id_content
WHERE l.name='ru' AND n.status=1 AND cn.name='news' and n.`id`='".$id."'";
        return mysqli_query($com->getDb(), $sql);
    }
    public function  get_edit_news_en($id){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, t.body   FROM  news n JOIN texts t ON t.id_menu = n.id
JOIN locale l ON l.id=t.locale
JOIN content cn ON cn.id=t.id_content
WHERE l.name='en' AND n.status=1 AND cn.name='news' and n.`id`='".$id."'";
        return mysqli_query($com->getDb(), $sql);
    }


}