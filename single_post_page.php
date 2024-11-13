<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php'?>
    <title>pakbook Album</title>
    <style>

        body{
            overflow-x: hidden !important;
        }

        .main-parent{
            width: 100%;
            height: 100vh;
        }
        
        .left{
            height: 100vh !important;
            background-color:black !important;
            
        }

        .right{
                height: 100vh !important;
                 background-color:white !important;
        }
        .dp-img{
        width: 50px;
        height: 50px;
        /* border-radius: 50px; */
        z-index: 333 !important;
        }

    .dp-img img{
    object-fit: cover;
    clip-path: circle();
    }

    .card-commet{
        height: 40vh;
        overflow-y: scroll !important;
        display: none ;
    }

    /* ::-webkit-scrollbar{
    width: 0;
    background: transparent;
    } */
/* 
    .re2{
        display:none;
        } */

        #image {
            transition: transform 0.3s ease; /* Smooth zoom effect */
        }
        .buttons-zoom{
            margin-top: 10px;
            background-color:transparent !important;
        }

    </style>
</head>
<body>
    

<div class="container-fluid main-parent">
    <div class="row">
        <div class="col-lg-9 col-md-7 left text-white">
            <div class="d-flex justify-content-between px-3 align-items-center">
        <div class="d-flex align-items-center fs-4">
            <a href="./home.php" class="text-decoration-none text-white">
        <i class="bi bi-x-lg closepage" style="cursor:pointer;"></i>
        </a>
        <img width="60px"  src="https://static.vecteezy.com/system/resources/previews/018/930/476/non_2x/facebook-logo-facebook-icon-transparent-free-png.png" alt="">
        </div>


         <div class="d-flex fs-4 gap-3">
            <div class="buttons-zoom">
        <button onclick="zoomIn()"><i class="zi bi bi-zoom-in"></i></button>
        <button onclick="zoomOut()"><i class="zo bi bi-zoom-out"></i></button>
    </div>
           
            <i class="bi bi-arrows-angle-expand"></i>
        </div>
        </div>
        
        
        <div class="post_image m-auto" style="width:70%;  height:90vh; overflow:hidden; ">
        <img width="100%" src="./post-images/<?php echo $_GET['post_image']?>" alt="post_img" id="image" style="height:90vh; object-fit:contain;">
        </div>

    
        </div>



        <div class="col-lg-3 col-md-5 right">

        <div class="d-flex align-items-center gap-1 my-3">
            <?php
                if(isset($_SESSION['img'])){ 
                    
                    if($_SESSION['img'] == NULL){
                        echo  "<img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";
                        
                    }
                    else{
                        echo " <div class='dp-img border-0'>
                        <img width='100%' height='100%' src='{$_SESSION['img']}' alt='dp1-img'>
                        </div>";
                    }
                }
                else{
                    echo "<div class='dp-img border-0'>
                    <img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>
                    </div>";

                }
            ?>
            
            <div class="post_name d-flex justify-content-between w-100 px-2">
                <h5 class="text-capitalize">
                    <?php
                    echo $_GET['username']
                    ?>  
                <i class="bi bi-globe-central-south-asia fs-6"></i>
                </h5>

                <div class="three-dots">
                <i class="bi bi-three-dots"></i>
                </div>
            </div>

        </div>
        

        <div class="caption text-capitalize my-2">
            <?php echo $_GET['caption']?>
        </div>



        <hr class="m-0">
        <div class="d-flex justify-content-between px-3 py-2">
            <i class="bi bi-hand-thumbs-up"></i>    
            <div class="d-flex justify-content-center gap-3 align-items-center">
                <?php
                    include './confige.php';
                $red = "SELECT COUNT(id) AS total FROM comments WHERE post_id = {$_GET['post_id']}";

                $go = mysqli_query($connection,$red);
                $comment_count = mysqli_fetch_assoc($go);
                echo $comment_count['total'];
                ?>
                <i class="bi bi-chat-fill"></i>
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -1218px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
            </div>
            
        </div>
        <hr class="m-0">

        <div class="d-flex justify-content-between align-items-center py-3 px-2">
            <div class="d-flex justify-content-center align-items-center"style="cursor:pointer;">
            <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -798px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                <p class="text-secondary px-1 m-0">Like</p>

            </div>
            <div class="d-flex justify-content-center align-items-center comment-btn"  style="cursor:pointer;">
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -588px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                <p class="text-secondary px-1 m-0">Comment</p>

            </div>
            <div class="d-flex justify-content-center align-items-center" style="cursor:pointer;">
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -441px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                <p class="text-secondary px-1 m-0">Send</p>

            </div>
            <div class="d-flex justify-content-center align-items-center" style="cursor:pointer;">
                     <div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w xeuugli x150jy0e x1e558r4 x10b6aqq x1yrsyyn"><i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -924px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></div>
                 <p class="text-secondary px-1 m-0">Share</p>

            </div>
            </div>
            <hr class="m-0">
        
        <div class="comments">

        <p class="down-arow text-secondary my-2 fw-semibold " style="cursor:pointer">
            All comments 
             <i class="re1 bi bi-chevron-down"></i>
             <i class="re2 bi bi-chevron-up d-none"></i>
        </p>

         <div class="card card-commet border-0 shadow p-2">
         <?php
        // include './confige.php';
        // $select = "SELECT user.id AS user_id,user.f_name,user.s_name,user.img,comments.id AS comment_id,
        // comments.comment FROM comments JOIN user ON comments.user_id = user.id JOIN posts ON comments.post_id = posts.id
        // WHERE comment.post_id = {$_GET['post_id']}";

        // $comment_out = mysqli_query($connection,$select);
        //  if(mysqli_num_rows($comment_out) > 0){
        // while ($comment_row = mysqli_fetch_assoc($comment_)) {
        
        //     print_r($comment_row);
        //     }

        // }
        // else{
        //   echo "<p class='text-secondary text-cebter'>
        //   no comments</p>";
        // }

        
    include './confige.php';

    // Sanitize post_id
    $post_id = intval($_GET['post_id']);

    // SQL query to fetch comments
    $select = "SELECT 
                    user.id AS user_id, 
                    user.f_name, 
                    user.s_name, 
                    user.img, 
                    comments.id AS comment_id, 
                    comments.comment 
               FROM comments 
               JOIN user ON comments.user_id = user.id 
               JOIN posts ON comments.post_id = posts.id 
               WHERE comments.post_id = $post_id 
               ORDER BY(comments.id) DESC ";

    // Execute the query
    $comment_out = mysqli_query($connection, $select);

    // Check if query execution was successful
    if (!$comment_out) {
        die("Query failed: " . mysqli_error($connection));
    }

    // Fetch and display comments if available
    if (mysqli_num_rows($comment_out) > 0) {
        while ($comment_row = mysqli_fetch_assoc($comment_out)) {

            ?>


            
       
         <div class="d-flex align-items-center my-3 gap-3 ">
            <?php
                if(isset($_SESSION['img'])){ 
                    
                    if($_SESSION['img'] == NULL){
                        echo  "<img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";
                        
                    }
                    else{
                        echo " <div class='dp-img border-0'>
                        <img width='100%' height='100%' src='{$_SESSION['img']}' alt='dp1-img'>
                        </div>";
                    }
                }
                else{
                    echo  "<img width='35px' class='rounded-circle' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>";

                }
            ?>
            
            <div class="bg-light my-2 px-3 py-1 rounded-3">
                <h5 class="text-capitalize m-0 ">
                    <?php
                    echo $comment_row['f_name'] . '' . $comment_row['s_name'];
                    ?>
                </h5>
                <p class="text-secondary m-0">
                    <?php
                    echo $comment_row['comment'];
                    ?>
                </p>
                </div>

               
                
                
                <?php
                if($_SESSION['id'] == $comment_row['user_id']){
                ?>
                <i class="bi bi-three-dots pop-dot fs-6" style="cursor:pointer;"></i>
                <div class="pop-up fs-5 position-relative px-3" style="margin-top:-40px;">
                    <div class="pop-over d-none bg-white position-absolute px-3 rounded-3 shadow" style="left:-180px;top:25px;z-index:33; width:150px;">
                        <ul class="list-unstyled">
                            <a class="text-decoration-none text-black" href="./Edit_comment.php/?id=<?php echo $comment_row['comment_id']?>">
                            <li style="cursor:pointer">
                                Edit
                            </li>
                            </a>
                            <a class="text-decoration-none text-black" href="./delete_comment.php/?id=<?php echo $comment_row['comment_id']?>">
                            <li style="cursor:pointer">
                                Delete
                            </li>
                            </a>
                           
                        </ul>
                    </div>
                    
                </div>

                <?php
                }
                ?>
            </div>


            
        <?php
        }
    } else {
        echo "<p class='text-secondary text-center m-0 p-0'>No comments</p>";
    }
?>

</div>
     <hr>
      <form action="./insert_comment_data.php" method="POST">
            <div class="d-flex justify-content-center align-items-center py-2 px-3 gap-2 w-100 comment-form">
                 <div class="d-flex align-items-center">
                <?php
                if(isset($_SESSION['img'])){ 
                    
                    if($_SESSION['img'] == NULL){
                        echo  "<img width='40px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";
                        
                    }
                    else{
                        echo " <div class='dp-img border-0'>
                        <img width='100%' height='100%' src='{$_SESSION['img']}' alt='dp1-img'>
                        </div>";
                    }
                }
                else{
                    echo  "<img width='35px' class='rounded-circle' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>";

                }
            ?>
            
        </div>
        
         <div class="d-flex justify-content-between align-items-center px-3 py-2 rounded-pill form-control">
            <input type="hidden" name="posts_id" value="<?php echo $_GET['post_id']?>">
            <input type="text" name="comment" placeholder="Comment as <?php echo $_SESSION['username']?>" class="border-0" style="outline-width:0;">
            <button class="border-0 bg-transparent">
            <i class="bi bi-send-fill"></i>

            </button>
         </div>
            
            


            
        </div>
            </form>
        
        
        </div>
    </div>
</div>




</div>
<?php include './boot_js.php'?>
<script>
    let down_arow=document.querySelector(".down-arow");
    let card_commet=document.querySelector(".card-commet");
    let re1=document.querySelector(".re1");
    let re2=document.querySelector(".re2");
    // let zi=document.querySelector(".zi");
    // let zo=document.querySelector(".zo");
    // let rimg=document.querySelector(".rimg");
    let pop_dot=document.querySelectorAll(".pop-dot");
    let pop_over=document.querySelectorAll(".pop-over");
    // let close_page=document.querySelector(".closepage");
    


    // down_arow.addEventListener("click",()=>{
    //     if(down_arow.value === ""){
    //     card_commet.style.display = "block";
    //     }
    //     else{
    //     card_commet.style.display = "none";

    //     }
    //     re.classList.remove('chevron-down');
    // })
    down_arow.addEventListener("click", () => {
    // Toggle display of card_comment
    if (card_commet.style.display === "none" || card_commet.style.display === "") {
        card_commet.style.display = "block";
        down_arow.classList.remove("chevron-down");
        re1.classList.add("d-none");
        re2.classList.remove("d-none");
    } else {
        card_commet.style.display = "none";
        down_arow.classList.add("chevron-up");
        re1.classList.remove("d-none");
        re2.classList.add("d-none");
    }
});


// zi.addEventListener("click",()=>{
//     if(zi.value)
// })

let scale = 1; // Initial zoom level
    const scaleFactor = 0.1; // Amount of zoom per click
    const image = document.getElementById('image');

    function zoomIn() {
        scale += scaleFactor;
        image.style.transform = `scale(${scale})`;
    }

    function zoomOut() {
        if (scale > scaleFactor) { // Prevents zooming out too far
            scale -= scaleFactor;
            image.style.transform = `scale(${scale})`;
        }
    }


    pop_dot.forEach((dot,index) => {
  dot.addEventListener("click",()=>{
    pop_over.forEach((pop) => {
        pop.classList.add('d-none')
    });
  pop_over[index].classList.toggle('d-none')
  })
});
//  close_page.addEventListener("click",()=>{
//     innerHTML =
//  })



</script>
</body>
</html>