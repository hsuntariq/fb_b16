<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php'?>
    <link rel="stylesheet" href="./home.css">
    <link rel="shortcut icon" href="https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A" type="image/x-icon">
    <title>
      <?php
      echo $_SESSION['username'];
      ?>
    </title>
    <?php include './boot_css.php';
    ?>
    
</head>
<body>
    <?php 
    

    include './confige.php';

    if(isset($_SESSION['username'])){
        // header("Location: $base_url/home.php");
    }
    else{
        header("Location: $base_url");
    }
   
    ?>

    <?php
    if(isset($_SESSION['post_success'])){
      ?>

      <div class="flash-message position-fixed top-0  fw-semibold px-4 py-2 bg-info">

      <?php 
      echo $_SESSION['post_success']
      ?>

      </div>
      
      
      <?php
    }
    unset($_SESSION['post_success'])
    ?>

    



    

<?php
include './upload_post.php'
?>

<?php
// include './single_comment_page.php'
?>
    
<?php include './nav.php'?>


<?php
include './notification_bar.php'
?>

<?php
include './main.php'
?>



    

<?php include './boot_js.php'?>
<script>
let path = document.querySelector(".menu-path");
let main = document.querySelector(".main-menu");
let card_parent = document.querySelector(".card-parent");
let dn_ar = document.querySelector(".dp-img");
let under = document.querySelector(".underlay");
let card = document.querySelector(".reg-card");
let cross = document.querySelector(".cross");
let btn_a =document.querySelector(".up");
let btn_a1 =document.querySelector(".up1");
let btn_a2 =document.querySelector(".up2");
let file_input =document.querySelector(".file-input");
let post_preview =document.querySelector(".post-preview");
let msg = document.querySelector(".flash-message");
let comment_form =document.querySelectorAll(".comment-form");
let comment_btn = document.querySelectorAll(".comment-btn");
let under_comment = document.querySelector(".underlay-comment");
let card_comment = document.querySelector(".comment-card");
let comment_btn_under = document.querySelectorAll(".comment-btn");
let cross_c = document.querySelector(".cross-c");








// path.addEventListener("click", () => {
//     main.style.display = "block";
//       if (path.value === "") {
//   } else {
//     // main.style.display = "none";
//   }
// });

window.addEventListener("click" ,(e)=>{
    if (
        e.target.classList.contains("menu-path") ||
        e.target.classList.contains("main-menu") ||
        e.target.classList.contains("menu") ||
        e.target.classList.contains("menu-left") ||
        e.target.classList.contains("menu-right") ||
        e.target.classList.contains("n-hide")
        
    ) {
        // console.log(e.target);
      main.style.display = "block";
    } else {
      main.style.display = "none";
    }
})

window.addEventListener("click" ,(e)=>{
    if (
        e.target.classList.contains("dp-img") ||
        e.target.classList.contains("dn-ar") ||
        e.target.classList.contains("d-n") 
    
        
    ) {
        // console.log(e.target);
      card_parent.style.display = "block";
    } else {
      card_parent.style.display = "none";
    }
})


 


btn_a.addEventListener("click" , ()=>{
  under.style.transform = "translateY(0)";
  setTimeout(() => {
    card.style.opacity = "1"
  }, 300);
})

btn_a1.addEventListener("click" , ()=>{

  under.style.transform = "translateY(0)";
  setTimeout(() => {
    card.style.opacity = "1"
  }, 300);
})

btn_a2.addEventListener("click" , ()=>{
  under.style.transform = "translateY(0)";
  setTimeout(() => {
    card.style.opacity = "1"
  }, 300);
})





cross.addEventListener("click" , () => {
  card.style.opacity = "0";
  setTimeout(() => {
    under.style.transform = "translateY(-110%)";
  }, 700);
});

setTimeout(() => {
  card.style.opacity = "1";
}, 800);



file_input.addEventListener("change",(e)=>{
    const file = e.target.files[0]
    const imagURL =URL.createObjectURL(file)
    post_preview.style.display = "block"
    post_preview.src = imagURL
})

setTimeout(() => {
  msg.style.display = "none"
}, 3000);




  comment_btn.forEach((btn,index) => {
  btn.addEventListener("click", () => {
    comment_form.forEach((form,index) => {
      form.classList.add('d-none')
      
    });
    comment_form[index].classList.add('d-flex')
    comment_form[index].classList.remove('d-none')
  })
});


// comment_btn_under.forEach((btnc,index) => {
  
//     btnc.addEventListener("click" , ()=>{
//     under_comment.style.transform = "translateY(0)";
//     setTimeout(() => {
//       card_comment.style.opacity = "1"
//     }, 300);
//   })
  
//   cross_c.addEventListener("click" , () => {
//     card_comment.style.opacity = "0";
//     setTimeout(() => {
//       under_comment.style.transform = "translateY(-110%)";
//     }, 700);
//   });
//   console.log(btnc);
  
// });



</script>
</body>
</html> 