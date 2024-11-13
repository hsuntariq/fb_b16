 
<?php
session_start();
include './confige.php';

$comment = $_POST['comment'];
$user_id = $_SESSION['id'];
$post_id = $_POST['posts_id'];

$add = "INSERT INTO comments (comment,user_id,post_id) VALUES ('{$comment}',$user_id,$post_id)";
// print_r ($add);

$result = mysqli_query($connection,$add);

header("Location: {$_SERVER['HTTP_REFERER']}")





?>