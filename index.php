<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php'; ?>
    <link rel="stylesheet" href="style.css">
    <title>Pakbook</title>
    
</head>
<body>
    <?php 
    session_start();

    include './confige.php';


   
     if(isset($_SESSION['username'])){
        header("Location: $base_url/home.php");
     }
    
    
   
    
    ?>
    
    <?php include './register_form.php'?>
<div class="container-fluid  " style="background:#F1F4F7; height:100vh;">
<div class="container">
    <div class="row align-items-center " style="height:70vh;">
        <div class="col-lg-6">
            <div class="img w-50">
            <img width="100%" src="https://logolook.net/wp-content/uploads/2021/06/Facebook-Logo-2019.png" alt="Pakbook-logo">
            </div>
            <h2 class="display-3">Recent logins</h2>
            <p class="text-secondary">Click your picture or add an account.</p>
        </div>
        <div class="col-lg-4 mx-auto">
            <form action="./insert_login_form_data.php" method="POST" class="shadow p-3 rounded-3" style="background:white;" >
                <input type="text" placeholder="Email address or Phone number" name="m_mail" required class="form-control p-2 my-2">

                <div class="d-flex align-items-center form-control p-2 my-2">
                    <input type="password" placeholder="Password" name="password" required class="w-100 pass border-0" style="outline-width:0;">
                    <i class="bi bi-eye-slash"></i>
                </div>

                <?php

                if(isset( $_SESSION['login_error'])){
                    ?>

                <p class="text-danger m-0 fs-3">
                <?php
                echo  $_SESSION['login_error'];
                        
                        ?>
                    </p>
                    
                    <?php

                    session_unset();
                }
                ?>

                <button class="btn btn-primary w-100 p-2 my-2 fw-semibold " style="curser:poin">Log in</button>

                <a href="3" class="text-center text-decoration-none d-block my-2">Forgotten password?</a>

                <hr class="my-3 ">

                <button type="button" class="btn btn-green text-white fw-semibold w-50 mx-auto d-block p-1 " style="background:#00BA3B; ">Create New account</button>
                
            </form>
                    <p class="my-2"><a href="#" class="text-decoration-none text-black fw-bold">Create a Page </a> for a celebrity, brand or business.</p>
                    
                    

        </div>
    </div>
</div>

</div>







    
<script src="./app.js"></script>


</body>
</html>