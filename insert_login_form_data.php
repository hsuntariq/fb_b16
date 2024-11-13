
<?php 
include './confige.php';
session_start();

$m_mail = $_POST['m_mail'];
$password = $_POST['password'];

$read = "SELECT * FROM user WHERE m_mail = '{$m_mail}' AND password ='{$password}'" ;

$result = mysqli_query($connection,$read);

if(mysqli_num_rows($result) > 0){
    $row= mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r ($row);
    // echo "</pre>";
    $_SESSION['username'] = $row['f_name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['img'] = $row['img'];
    $_SESSION['success_login'] = 'Welcome' . $row['f_name'];
    header("Location: $base_url/home.php");
}
else{
    $_SESSION['login_error'] = 'Invalid credentials';
    header("Location: $base_url");

}


?>