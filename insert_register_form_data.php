<?php 
include './confige.php';
session_start();
// $current_page = $_SERVER['HTTP_REFERER'];

$f_name = $_POST['f_name'];
$s_name = $_POST['s_name'];
$date = $_POST['date'];
$month = $_POST['month'];
$year= $_POST['year'];
$gender= $_POST['gender'];
$m_mail= $_POST['m_mail'];
$pass= $_POST['password'];

$dob = $date . '/'. $month . '/' . $year ;

// $connection = mysqli_connect("localhost","root","","facebook");

$insert = "INSERT INTO user (f_name,s_name,dob,gender,m_mail,password) VALUES ('{$f_name}', '{$s_name}','{$dob}','{$gender}','{$m_mail}','{$pass}')" or die();


mysqli_query($connection,$insert);


$_SESSION['username'] = $f_name . $s_name;

$_SESSION['id'] = mysqli_insert_id($connection);

header("Location: $base_url/home.php");


?>