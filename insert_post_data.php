<?php
session_start();
include './confige.php';

$text = $_POST['caption'];
$file_name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
$user_id = $_SESSION['id'];

move_uploaded_file($tmp_name,"./post-images/$file_name");




$insert = "INSERT INTO posts (caption,image,user_id) VALUES('{$text}','{$file_name}',$user_id)";



try {
    mysqli_query($connection,$insert);
    $_SESSION['post_success'] = 'post successfully uploaded!';
    header("Location: $base_url/home.php");
} catch (\Throwable $th) {
    echo "erorr";
}





?>