
<?php
include './confige.php';

$id = $_GET['id'];

$edit = "UPDATE comments SET id =$id";

mysqli_query($connection,$edit);


?>