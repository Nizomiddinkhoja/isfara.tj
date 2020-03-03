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

    public function getWhoIs($locale, $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT w.`id`, t.`title`, t.`description`, w.img FROM  who_is w JOIN texts t ON t.`id_menu` = w.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='$locale' AND w.`status`=1 AND cn.`name`='who_is' Limit $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getWhoISCount(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(*) From who_is";
        return mysqli_fetch_array(mysqli_query($com->getDb(), $sql))[0];
    }


    public function addWhoIs($img){
        $com = new DbConnect();
        $sql = "INSERT INTO who_is(id, img, `status`) VALUE(DEFAULT, '$img', 1)";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editWhoIs($id, $img){
        $com = new DbConnect();
        $sql = "UPDATE who_is SET img='$img' WHERE id=$id";
        mysqli_query($com->getDb(), $sql);
    }

    public function editWhoIsText($id, $title, $description, $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title', description = '$description' WHERE id_menu = $id AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='who_is')";
        mysqli_query($com->getDb(), $sql);
    }

    public function addWhoIsText($title, $description, $locale){
        $com = new DbConnect();
        $sql = "INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='who_is'),
										(SELECT MAX(id) FROM who_is),
										'$title',
										'$description',
										'',
										(SELECT id FROM locale WHERE `name`='$locale'))";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getWhoIsByID($id, $locale){
        $com = new DbConnect();
        $sql = "
SELECT  t.`title`, t.`description`, w.img FROM  who_is w JOIN texts t ON t.`id_menu` = w.`id` 
JOIN locale l ON l.`id`=t.`locale` 
JOIN content cn ON cn.`id`=t.`id_content` 
WHERE l.`name`='$locale' AND w.`status`=1 AND cn.`name`='who_is' AND w.id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteWhoIsImg($id){
        $com = new DbConnect();
        $sql = "UPDATE who_is SET img='' Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteWhoIs($id){
        $com = new DbConnect();
        $sql = "UPDATE who_is SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getNewsByCategoryById($id, $locale, $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, n.category_id, n.date FROM  news n JOIN texts t ON t.id_menu = n.id 
JOIN category c ON t.id_menu = c.id 
JOIN locale l ON l.id=t.locale 
JOIN content cn ON cn.id=t.id_content 
WHERE l.name='$locale' AND n.status=1 AND cn.name='news' AND n.category_id=$id Limit $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }

    public function  get_news($locale = "ru", $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT n.id, t.title, t.description, n.img, n.category_id, n.date  FROM  news n JOIN texts t ON t.id_menu = n.id 

JOIN locale l ON l.id=t.locale 
JOIN content cn ON cn.id=t.id_content 
WHERE l.name='$locale' AND n.status=1 AND cn.name=\"news\" ORDER BY n.id DESC Limit $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getNewsCount(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(*) From news where status=1";
        return mysqli_fetch_array(mysqli_query($com->getDb(), $sql))[0];
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
    public function deleteNews($id){
        $com = new DbConnect();
        $sql = "UPDATE news SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editNews($id, $category ,$date){
        $com = new DbConnect();
        $sql = "UPDATE `news` SET `category_id`='$category',`date`='$date' WHERE id='$id'";
        return mysqli_query($com->getDb(), $sql);

    }

    public function editNewsImg($id, $img){
        $com = new DbConnect();
        $sql = "UPDATE `news` SET `img`='$img' WHERE id='$id'";
        return mysqli_query($com->getDb(), $sql);

    }
    public function editNewsText($id, $title,$description, $body, $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET `title`='$title',`description`='$description',`body`='$body' WHERE id_menu = '$id' AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='news')";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteNewsImg($id){
        $com = new DbConnect();
        $sql = "UPDATE news SET img=''Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }




    public function getSliderCount(){

        $com = new DbConnect();
        $sql = "SELECT COUNT(*) From slider where status=1";
        return mysqli_fetch_array(mysqli_query($com->getDb(), $sql))[0];
    }

    public function getSlider($locale, $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT s.`id`, t.`title`, s.img FROM  slider s JOIN texts t ON t.`id_menu` = s.`id` 
    JOIN locale l ON l.`id`=t.`locale` 
    JOIN content cn ON cn.`id`=t.`id_content` 
    WHERE l.`name`='$locale' AND s.`status`=1 AND cn.`name`='slider' Limit  $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }


    public function addSlider($img){
        $com = new DbConnect();
        $sql = "INSERT INTO `slider`(`id`, `img`, `status`) VALUES (DEFAULT, '$img', 1)";
        return mysqli_query($com->getDb(), $sql);
    }




    public function addSliderText($title, $locale)
    {
        $com = new DbConnect();
        $sql = "    INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='slider'),
    										(SELECT MAX(id) FROM slider),
    										'$title',
    										'',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale'))";

        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteSlider($id){
        $com = new DbConnect();
        $sql = "UPDATE slider SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteSliderImg($id){
        $com = new DbConnect();
        $sql = "UPDATE slider SET img='' Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }



    public function editSliderImg($id,  $img){
        $com = new DbConnect();
        $sql = "UPDATE slider SET slider.img = '$img' WHERE id='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editSlider($id,  $category){
        $com = new DbConnect();
        $sql = "UPDATE slider SET slider.category_id = '$img' WHERE id='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editSliderText($id, $title,  $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title' WHERE id_menu = '$id' AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='slider')";
        return mysqli_query($com->getDb(), $sql);
        var_dump($sql);
    }


    public function getSliderByID($id, $locale){
        $com = new DbConnect();
        $sql = "
SELECT t.`title`, s.`img` FROM  slider s JOIN texts t ON t.`id_menu` = s.`id`
JOIN locale l ON l.`id`=t.`locale`
JOIN content cn ON cn.`id`=t.`id_content`
WHERE l.`name`='$locale' AND s.`status`=1 AND cn.`name`='slider' AND s.id=$id";
        return mysqli_query($com->getDb(), $sql);
    }




    public function getGallery($locale, $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT g.`id`, t.`title`, g.img, g.date FROM  gallery g JOIN texts t ON t.`id_menu` = g.`id`
JOIN locale l ON l.`id`=t.locale
JOIN content cn ON cn.`id`=t.`id_content`
WHERE l.`name`='$locale' AND g.`status`=1 AND cn.`name` = 'gallery' ORDER by id DESC Limit  $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getGalleryCount(){
    $com = new DbConnect();
    $sql = "SELECT COUNT(*) From gallery where status =1";
    return mysqli_fetch_array(mysqli_query($com->getDb(), $sql))[0];
}


    public function getGalleryForPage($locale, $start,$limit){
        $com = new DbConnect();
        $sql = "SELECT g.`id`, t.`title`, g.img, g.date FROM  gallery g JOIN texts t ON t.`id_menu` = g.`id`
JOIN locale l ON l.`id`=t.locale
JOIN content cn ON cn.`id`=t.`id_content`
WHERE l.`name`='$locale' AND g.`status`=1 AND cn.`name` = 'gallery' ORDER by id DESC LIMIT $start, $limit";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getCountGallery(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(*) FROM `gallery` WHERE `status`=1";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteGallery($id){
        $com = new DbConnect();
        $sql = "UPDATE gallery SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }


    public function addGallery($img, $date){
        $com = new DbConnect();
        $sql = "INSERT INTO `gallery`(`id`, `img`, `date`, `status`) VALUES (DEFAULT, '$img', '$date', 1 )";
        return mysqli_query($com->getDb(), $sql);
    }

    public function addGalleryText($title, $locale)
    {
        $com = new DbConnect();
        $sql = "    INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='gallery'),
    										(SELECT MAX(id) FROM gallery),
    										'$title',
    										'',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale'))";

        return mysqli_query($com->getDb(), $sql);
    }

    public function editGallery($id,  $date){
        $com = new DbConnect();
        $sql = "UPDATE `gallery` SET `date`='$date' WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editGalleryImg($id,  $img){
        $com = new DbConnect();
        $sql = "UPDATE `gallery` SET `img`='$img' WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editGalleryText($id, $title,  $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title'  WHERE id_menu = $id AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='gallery')";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getGalleryByID($id, $locale){
        $com = new DbConnect();
        $sql = "SELECT t.`title`, g.`date`, g.img FROM  gallery g JOIN texts t ON t.`id_menu` = g.`id` 
        JOIN locale l ON l.`id`=t.`locale` 
        JOIN content cn ON cn.`id`=t.`id_content` 
        WHERE l.`name`='$locale' AND g.`status`=1 AND cn.`name`='gallery' AND g.id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteGalleryImg($id){
        $com = new DbConnect();
        $sql = "UPDATE `gallery` SET `img`='' WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getVideo($locale, $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT v.`id`, t.`title`, v.source, v.is_youtube FROM  video v JOIN texts t ON t.`id_menu` = v.`id`
JOIN locale l ON l.`id`=t.locale
JOIN content cn ON cn.`id`=t.`id_content`
WHERE l.`name`='$locale' AND v.`status`=1 AND cn.`name` = 'video' Limit $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getVideoCount(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(*) FROM video";
        return mysqli_fetch_array(mysqli_query($com->getDb(), $sql))[0];
    }

    public function deleteVideo($id){
        $com = new DbConnect();
        $sql = "UPDATE video SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }


    public function deleteVideo2($id){
        $com = new DbConnect();
        $sql = "UPDATE video SET source='' Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }



    public function addVideo($src, $is_youtube){
        $com = new DbConnect();
        $sql = "INSERT INTO `video`(`id`, `source`, `is_youtube`, `status`) VALUES (DEFAULT, '$src', '$is_youtube', 1 )";
        return mysqli_query($com->getDb(), $sql);
    }

    public function addVideoText($title, $locale)
    {
        $com = new DbConnect();
        $sql = "    INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='video'),
    										(SELECT MAX(id) FROM video),
    										'$title',
    										'',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale'))";

        return mysqli_query($com->getDb(), $sql);
    }

    public function editVideo($id, $src,  $is_youtube){
        $com = new DbConnect();
        $sql = "UPDATE `video` SET `source`='$src',`is_youtube`='$is_youtube',`status`=1 WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editVideoText($id, $title,  $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title'  WHERE id_menu = $id AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='video')";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getVideoByID($id, $locale){
        $com = new DbConnect();
        $sql = "SELECT t.`title`, g.`source`, g.`is_youtube` FROM  video g JOIN texts t ON t.`id_menu` = g.`id` 
JOIN locale l ON l.`id`=t.`locale`
JOIN content cn ON cn.`id`=t.`id_content` 
        WHERE l.`name`='$locale' AND g.`status`=1 AND cn.`name`='video' AND g.id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getQuestions($locale, $offset=0, $no_of_records_per_page=1000){
        $com = new DbConnect();
        $sql = "SELECT q.`id`, t.`title` FROM  questions q JOIN texts t ON t.`id_menu` = q.`id`
JOIN locale l ON l.`id`=t.locale
JOIN content cn ON cn.`id`=t.`id_content`
WHERE l.`name`='$locale' AND q.`status`=1 AND cn.`name` = 'question' Limit $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getQuestionsCount(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(*) From questions";
        return mysqli_fetch_array(mysqli_query($com->getDb(), $sql))[0];
    }

    public function addQuestion(){
        $com = new DbConnect();
        $sql = "INSERT INTO questions(`count`, `status`) VALUES (0, 1)";
        mysqli_query($com->getDb(), $sql);
    }

    public  function addAnswer(){
        $com = new DbConnect();
        $sql = "INSERT INTO answer(`id_questions`,`count`, `status`) VALUES ((SELECT MAX(id) FROM questions), 0, 1)";
        mysqli_query($com->getDb(), $sql);
    }

    public function addQuestionText($question, $answer1, $answer2, $answer3, $answer4, $locale){
        $com = new DbConnect();
        $sql = "    INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='question'),
    										(SELECT MAX(id) FROM questions),
    										'$question',
    										'',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale'))";
        mysqli_query($com->getDb(), $sql);
        $sql = "    INSERT INTO texts(id_content, id_menu, title, description, body, locale) VALUES((SELECT id FROM content WHERE `name`='answer'),
    										(SELECT MAX(id) FROM answer),
    										'$answer1',
    										'1',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale')),
    										((SELECT id FROM content WHERE `name`='answer'),
    										(SELECT MAX(id) FROM answer),
    										'$answer2',
    										'2',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale')),
    										((SELECT id FROM content WHERE `name`='answer'),
    										(SELECT MAX(id) FROM answer),
    										'$answer3',
    										'3',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale')),
    										((SELECT id FROM content WHERE `name`='answer'),
    										(SELECT MAX(id) FROM answer),
    										'$answer4',
    										'4',
    										'',
    										(SELECT id FROM locale WHERE `name`='$locale'))";
        mysqli_query($com->getDb(), $sql);
    }

    public function getAnswer($id_questions,  $locale){
        $com = new DbConnect();
        $sql = "SELECT a.`id`, t.`title` FROM  answer a JOIN texts t ON t.`id_menu` = a.`id`
JOIN questions q ON q.id = a.id_questions
JOIN locale l ON l.`id`=t.locale
JOIN content cn ON cn.`id`=t.`id_content`
WHERE l.`name`='$locale' AND a.`status`=1 AND cn.`name`='answer' and q.id = '$id_questions'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editQuestionText($id, $title,  $locale){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title'  WHERE id_menu = $id AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='question')";
        return mysqli_query($com->getDb(), $sql);
    }

    public function editAnswerText($id, $title,  $locale, $number){
        $com = new DbConnect();
        $sql = "UPDATE texts SET title = '$title'  WHERE id_menu = (SELECT id FROM answer WHERE id_questions= $id) AND locale=(SELECT id FROM locale WHERE `name`='$locale') AND id_content=(SELECT id FROM content WHERE `name`='answer') AND description='$number'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getQuestionByID($id, $locale){
        $com = new DbConnect();
        $sql = "SELECT t.`title` FROM  questions q JOIN texts t ON t.`id_menu` = q.`id` 
        JOIN locale l ON l.`id`=t.`locale` 
        JOIN content cn ON cn.`id`=t.`id_content` 
        WHERE l.`name`='$locale' AND q.`status`=1 AND cn.`name`='question' AND q.id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getAnswerById($id, $locale){
        $com = new DbConnect();
        $sql = "SELECT t.`title` FROM  answer a JOIN texts t ON t.`id_menu` = a.`id` 
        JOIN locale l ON l.`id`=t.`locale` 
        JOIN content cn ON cn.`id`=t.`id_content` 
        WHERE l.`name`='$locale' AND a.`status`=1 AND cn.`name`='answer' AND  id_menu = (SELECT id FROM answer WHERE id_questions= $id)";
        return mysqli_query($com->getDb(), $sql);
    }

    public function deleteQuestion($id){
        $com = new DbConnect();
        $sql = "UPDATE questions SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }

    public function addRequest($firstName, $lastName, $email, $phone, $title, $text){
        $com = new DbConnect();
        $sql = "INSERT INTO request(last_name, first_name, email, phone	,title, `text`, `date`, is_view, `status`) VALUES (
'$firstName', '$lastName', '$email', '$phone', '$title', '$text',now(),0,1
)";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getRequest($offset=0, $no_of_records_per_page=1000)
    {
        $com = new DbConnect();
        $sql = "SELECT `id`, `last_name`, `first_name`, `email`, `phone`, `title`, `text`, `date`, `is_view` FROM `request` 
WHERE  `status`=1  ORDER BY `id` DESC Limit $offset, $no_of_records_per_page";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getRequestCount()
    {
        $com = new DbConnect();
        $sql = "SELECT COUNT(*) FROM request where status = 1";
        return mysqli_query($com->getDb(), $sql);
    }
    public function deleteRequest($id){
        $com = new DbConnect();
        $sql = "UPDATE request SET status=0 Where id=$id";
        return mysqli_query($com->getDb(), $sql);
    }//

    public function editViewRequest($id)
    {
        $com = new DbConnect();
        $sql = "UPDATE `request` SET  `is_view`=1 WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getSliderByLang($locale){
        $com = new DbConnect();
        $sql = "SELECT c.`id`, t.`title`, c.`img` FROM  slider c JOIN texts t ON t.`id_menu` = c.`id` 
    JOIN locale l ON l.`id`=t.`locale` 
    JOIN content cn ON cn.`id`=t.`id_content` 
    WHERE l.`name`='$locale' AND c.`status`=1 AND cn.`name`='slider' LIMIT 6";
        return mysqli_query($com->getDb(), $sql);
    }


    public function pollAnswer($id)
    {
        $com = new DbConnect();
        $sql = "UPDATE `answer` SET `count`=`count`+1 WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public function pollQuestions($id)
    {
        $com = new DbConnect();
        $sql = "UPDATE `questions` SET `count`=`count`+1  WHERE `id`='$id'";
        return mysqli_query($com->getDb(), $sql);
    }

    public  function addVisitor($userhash, $ip, $uri, $ref, $browser, $date){
        $com = new DbConnect();
        $sql = "INSERT INTO `visitors` (`userhash`, `ip`, `uri`, `ref`, `date`, `browser`) VALUES ('$userhash', '$ip', '$uri', '$ref', '$date', '$browser')";
        mysqli_query($com->getDb(), $sql);
    }

    public function getStatistic($limit = 0){
        $com = new DbConnect();
        if($limit == 0)
            $sql = "SELECT ip, DATE(`date`), browser, uri FROM visitors ORDER BY id DESC";
        else
            $sql = "SELECT ip, DATE(`date`), browser, uri FROM visitors ORDER BY id DESC Limit $limit";
        return mysqli_query($com->getDb(), $sql);
    }

    public function getTodayStatistic(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(DISTINCT userhash) FROM visitors WHERE DATE(`date`) = DATE(NOW()) ";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getWEEKStatistic(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(DISTINCT userhash) FROM visitors WHERE WEEK(`date`) = WEEK(NOW());
";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getMONTHStatistic(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(DISTINCT userhash) FROM visitors WHERE MONTH(`date`) = MONTH(NOW());";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getYearStatistic(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(DISTINCT userhash) FROM visitors WHERE YEAR(`date`) = YEAR(NOW());";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getAllStatistic(){
        $com = new DbConnect();
        $sql = "SELECT COUNT(DISTINCT userhash) FROM visitors ";
        return mysqli_query($com->getDb(), $sql);
    }
    public function search($text){
        $com = new DbConnect();
        $sql = "SELECT c.name, t.id_menu, t.title, t.description, l.name FROM texts t JOIN content c ON c.`id`=t.`id_content` JOIN locale l ON t.`locale`=l.`id` WHERE t.`title` LIKE '%$text%'";
        return mysqli_query($com->getDb(), $sql);
    }
    public function getCategoryID($newsID){
        $com = new DbConnect();
        $sql = "SELECT category_id, n.date,n.img FROM news n WHERE id=$newsID";
        return mysqli_query($com->getDb(), $sql);
    }

}