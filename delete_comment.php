
<?php

include './confige.php';

$id = $_GET['id'];

$delete = "DELETE FROM comments WHERE id = $id";

mysqli_query($connection,$delete);

header("Location: {$_SERVER['HTTP_REFERER']}");

?>