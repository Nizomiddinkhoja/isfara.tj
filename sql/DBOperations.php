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


    public function  get_news(){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, n.category_id, n.date  FROM  news n JOIN texts t ON t.id_menu = n.id 
JOIN category c ON t.id_menu = c.id 
JOIN locale l ON l.id=t.locale 
JOIN content cn ON cn.id=t.id_content 
WHERE l.name=\"ru\" AND n.status=1 AND cn.name=\"news\" ";
        return mysqli_query($com->getDb(), $sql);
    }


    public function  get_edit_news_tj($id){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, t.body, n.date  FROM  news n JOIN texts t ON t.id_menu = n.id 
JOIN locale l ON l.id=t.locale 
JOIN content cn ON cn.id=t.id_content 
WHERE l.name=\"tj\" AND n.status=1 AND cn.name=\"news\" and n.`id`='".$id."'";
        return mysqli_query($com->getDb(), $sql);
    }
    public function  get_edit_news_ru($id){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, t.body, n.date   FROM  news n JOIN texts t ON t.id_menu = n.id
JOIN locale l ON l.id=t.locale
JOIN content cn ON cn.id=t.id_content
WHERE l.name='ru' AND n.status=1 AND cn.name='news' and n.`id`='".$id."'";
        return mysqli_query($com->getDb(), $sql);
    }
    public function  get_edit_news_en($id){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, t.body, n.date   FROM  news n JOIN texts t ON t.id_menu = n.id
JOIN locale l ON l.id=t.locale
JOIN content cn ON cn.id=t.id_content
WHERE l.name='en' AND n.status=1 AND cn.name='news' and n.`id`='".$id."'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function get_Categories_tj(){
        $com = new DbConnect();
        $sql = "SELECT c.`id`, t.`title` FROM  category c JOIN texts t ON t.`id_menu` = c.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='tj' AND c.`status`=1 AND cn.`name`='category'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function get_Categories_ru(){
        $com = new DbConnect();
        $sql = "SELECT c.`id`, t.`title`FROM  category c JOIN texts t ON t.`id_menu` = c.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='ru' AND c.`status`=1 AND cn.`name`='category'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function get_Categories_en(){
        $com = new DbConnect();
        $sql = "SELECT c.`id`, t.`title` FROM  category c JOIN texts t ON t.`id_menu` = c.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='en' AND c.`status`=1 AND cn.`name`='category'";
        return mysqli_query($com->getDb(), $sql);
    }


    public function addNews($category_id,$date, $img){
        $com = new DbConnect();

        $sql = "INSERT INTO `news`(`id`, `category_id`, `date`, `author_id`, `img`, `visitor_id`, `status`) VALUES (DEFAULT, $category_id,'$date', DEFAULT, '$img', DEFAULT, 1 )";
        echo $sql;
        return mysqli_query($com->getDb(), $sql);
    }


    public function addNewsText($title, $description, $body, $locale)
    {
        $com = new DbConnect();
        $sql = "INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='news'),
										(SELECT MAX(id) FROM news),
										'$title',
										'$description',
										'$body',
										(SELECT id FROM locale WHERE `name`='$locale'))";

        return mysqli_query($com->getDb(), $sql);
    }

}