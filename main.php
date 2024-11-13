

<div class="main-parent">
    <div class="row mainrow">




            <!-- This is a left section -->
    
        <div class="c1 col-lg-3 px-3">
        <div class="fb-icons">
                
            <div class="d-flex align-items-center  gap-3 my-3">
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
                    echo  "<img width='40px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>";

                }
            ?>
            
                <h5 class="text-capitalize">
                    <?php
                    echo $_SESSION['username']
                    ?>
                </h5>
            
        </div>

                

                <ul class="ul-icons ">
                    <li class="">
                        <div class="social-icons">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/i0pziEs5Wj6.png?_nc_eui2=AeE66mt4Ry1YqZx-YEvnVhc-OicAEHSeNj06JwAQdJ42PT8fWfIoTekNIGBsutjj1a_eRpbMn67I6y-5307rbsh8" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events">
                            <h6 class="">Friends(90 online)</h6>
                        </div>
                    </li>
                    <li class="">
                        <div class="social-icons">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/MhkwI3R0SHP.png?_nc_eui2=AeH7rXBY-h55hYOAneeqy35Vql7VDb0FYbuqXtUNvQVhuxxphgSzpDMjuuziizbciqfJ5qEVgEXOQT_GRKR3emrX" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events ">
                            <h6 class="">Groups</h6>
                        </div>
                        </li>
                        <li class="">
                            <div class="social-icons ">
                                <i data-visualcompletion="css-img" class="" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/cJdNYgqUyfE.png?_nc_eui2=AeEhsA87O4Bix8khVqdxSoFDgbMBj1O9nReBswGPU72dF4aGl8pbeJY1L8p0l1xwPDOaCW-WuCcJ2ZnzTQVIDwm8&quot;); background-position: 0px -481px; background-size: 37px 592px; width: 36px; height: 36px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <div class="social-events">
                                <h6 class="">Memories</h6>
                            </div>
                        </li>
                        <li class="">
                            <div class="social-icons ">
                                <i data-visualcompletion="css-img" class="" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/cJdNYgqUyfE.png?_nc_eui2=AeEhsA87O4Bix8khVqdxSoFDgbMBj1O9nReBswGPU72dF4aGl8pbeJY1L8p0l1xwPDOaCW-WuCcJ2ZnzTQVIDwm8&quot;); background-position: 0px -185px; background-size: 37px 592px; width: 36px; height: 36px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <div class="social-events">
                                <h6 class="">Saved</h6>
                            </div>
                        </li>
                        <li class="">
                            <div class="social-icons ">
                                <i data-visualcompletion="css-img" class="" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/cJdNYgqUyfE.png?_nc_eui2=AeEhsA87O4Bix8khVqdxSoFDgbMBj1O9nReBswGPU72dF4aGl8pbeJY1L8p0l1xwPDOaCW-WuCcJ2ZnzTQVIDwm8&quot;); background-position: 0px -555px; background-size: 37px 592px; width: 36px; height: 36px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <div class="social-events">
                                <h6 class="">Video</h6>
                            </div>
                        </li>
                        <li class="">
                            <div class="social-icons ">
                                <img class="" class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/qfMB40PdgWb.png?_nc_eui2=AeFB_abOB2ctwErx2Vh-PBbgkmXzdxy7YT6SZfN3HLthPk3sPGOLHVFO_RKOt8D03PMvuRg6SMhcvEPri-dJQsJW" style="height: 36px; width: 36px;">
                            </div>
                            <div class="social-events">
                                <h6 class="">Events</h6>
                            </div>
                        </li>
                    
                    <li class="">
                        <div class="social-icons ">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/-6zDH4i8Hrw.png?_nc_eui2=AeG9KAGd4Tk9YoumCe_4FS1N1IEyp2V0iuPUgTKnZXSK44CSDOvDm6NhrDUDf3ySVu2jFaoCSFQ_44aWMP_1iAdO" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events ">
                            <h6 class="">News Feed</h6>
                        </div>
                    </li>
                    <li class="">
                        <div class="social-icons ">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/eECk3ceTaHJ.png?_nc_eui2=AeHGJF1LLGS9keXYpVZXE7o7i9AM8exRZGeL0Azx7FFkZ2Vj3DXOFQhXJSqZXPdfKLLi4MJ9AG31yQW8pt8QxrM4" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events ">
                            <h6 class="">Feeds</h6>
                        </div>
                    </li>
                    <li class="">
                        <div class="social-icons ">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/7RdHDScIkAe.png?_nc_eui2=AeHtXCB8J1ej1mOTACCaM7AbbNlWTATZBohs2VZMBNkGiEu-ZX_nNqE4mGZEAoUjNeXzMjy36irbVFMDsQp296oN" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events ">
                            <h6 class="">Pages</h6>
                        </div>
                    </li>
                 
                </ul>

                </div>

        </div>





        <!-- This is a main section -->
        
        
        
        
        
        
        <div class="c2 col-lg-6">
            <div class=" c2-c1 col-lg-9 mx-auto px-3">
            
            <div class="card shadow w-100 border-0 my-3 px-2">
                <div class="d-flex align-items-center px-4 gap-3 my-3">
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
                    echo  "<img width='40px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>";

                }
            ?>
                <a class="btn-a up text-secondary fw-semibold  text-decoration-none form-control rounded-pill fs-5" style="background-color:#E4E6E9;  cursor: pointer;">
                    What's on  your mind,  <?php
                    echo $_SESSION['username']
                    ?>?
                 
                </a>
        </div>

        <hr class="my-2">


         <div class="d-flex justify-content-between align-items-center">
            <a class="up1 d-flex align-items-center px-2 gap-2 my-3 text-decoration-none" style="cursor:pointer;">
                <img height="24" width="24" alt="" class="xz74otr" referrerpolicy="origin-when-cross-origin" src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/c0dWho49-X3.png?_nc_eui2=AeF6_ebnfGLdTd0pMhluoovBVnUPE18ZZ-dWdQ8TXxln53IxEO7xffBU_DxzydAmatgSudP2AsPKQEBEvKzqfJzK">

            <h6 class="text-secondary">
                   Live video
            </h6>
        </a>
            <a class="up2 d-flex align-items-center px-2 gap-2 my-3 text-decoration-none" style="cursor:pointer;">
                <img height="24" width="24" alt="" class="xz74otr" referrerpolicy="origin-when-cross-origin" src="https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/Ivw7nhRtXyo.png?_nc_eui2=AeFgbpwQndSkPt2wF10_6D1aPL4YoeGsw5I8vhih4azDkk_OgQmh8wqQbnjYCoT81TOJTQUdPpOKHaC3y_LKQNOz">

            <h6 class="text-secondary">
                   Photo/video
            </h6>
        </a>
            <a class="d-flex align-items-center px-2 gap-2 my-3 text-decoration-none">
                <img height="24" width="24" alt="" class="xz74otr" referrerpolicy="origin-when-cross-origin" src="https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Y4mYLVOhTwq.png?_nc_eui2=AeGFhIN3QWI6UDY55XkE1Wd1vPIN-OmHLJy88g346YcsnC0nNM1NkokiGxGoczkrGrEr42o2DxbgniQq5zQjJ1d8">

            <h6 class="text-secondary">
                   Feeling/activity
            </h6>
        </a>

         </div>


        
        
            </div>
            
            
            
            
            
            
            <!-- This is story section  -->
            
            <div class="story-cards-parent">

            
            <div class="d-flex gap-2 sy-card">
                <div class="card stry-card ">
                    <img width="118px" src="https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg" alt="">
                    <div class="up-icon">
                        <svg viewBox="0 0 20 20" width="30" height="30" fill="currentColor" class="xfx01vb x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq" style="--color:var(--always-white)"><g fill-rule="evenodd" transform="translate(-446 -350)"><g fill-rule="nonzero"><path d="M95 201.5h13a1 1 0 1 0 0-2H95a1 1 0 1 0 0 2z" transform="translate(354.5 159.5)"></path><path d="M102.5 207v-13a1 1 0 1 0-2 0v13a1 1 0 1 0 2 0z" transform="translate(354.5 159.5)"></path></g></g></svg>

                        
                    </div>
                    <p class="stry-text text-center fw-semibold">Create Story</p>
                </div>
                
                <div class="stry-card ">
                    <img width="100% " src="http://localhost/facebook/post-images/orange-7713308_1280.jpg" alt="">
                    <div class="up-img">

                        <img width="50px" src="https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A" alt="pakbook profile img">

                    </div>
                    <p class="stry-text-2 text-center text-white fw-semibold">Create Story</p>
                </div>
             
             
            
            </div>
            </div>
            
            

            <!-- This is a post section -->


            <?php
            include './confige.php';
            $read = "SELECT posts.id AS posts_id,posts.image,posts.caption,user.id AS user_id,user.f_name,user.s_name,user.dob,user.m_mail FROM posts JOIN user ON posts.user_id= user.id ORDER BY(posts.id) DESC ";
            $result = mysqli_query($connection,$read);
            while($row =mysqli_fetch_assoc($result)){


            ?>
            
            
            <div class="card post-card border-0 shadow my-3">
                <div class="d-flex justify-content-between px-4 align-items-center">
                 <div class="d-flex align-items-center gap-3 my-3">
            <img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>

            <h6 class="text-capitalize">
                <?php
                echo $row['f_name'] . '' . $row['s_name'];
                ?>
                <i class="bi bi-globe-central-south-asia"></i>
            </h6>
        </div>
        <div class="d-flex gap-2 fs-4">
            <i class="bi bi-three-dots"></i>
            <i class="bi bi-x-lg"></i>
        </div>
        </div>

        <div class="caption px-3">
            <p> <?php echo $row['caption']?> </p>
        </div>

        <a href="./single_post_page.php?post_id=<?php echo $row['posts_id']?>&post_image=<?php echo $row['image']?>&username=<?php
          echo $row['f_name'] .$row['s_name']?>&caption=<?php echo $row['caption']?>">
        <img width="100%" src="./post-images/<?php echo $row['image']?>" alt="pakbook-post">
        </a>

        <div class="d-flex justify-content-between px-3 py-3">
            <i class="bi bi-hand-thumbs-up"></i>    
            <div class="d-flex justify-content-center gap-3 align-items-center">
                <?php
            
                $red = "SELECT COUNT(id) AS total FROM comments WHERE post_id = {$row['posts_id']}";

                $go = mysqli_query($connection,$red);
                $comment_count = mysqli_fetch_assoc($go);
                echo $comment_count['total'];
                ?>
                <i class="bi bi-chat-fill"></i>
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -1218px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
            </div>
            
        </div>
        
        <hr>
        
        <div class="d-flex justify-content-between align-items-center py-4 px-3">
            <div class="d-flex justify-content-center align-items-center"style="cursor:pointer;">
            <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -798px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                <p class="text-secondary px-2">Like</p>

            </div>
            <div class="d-flex justify-content-center align-items-center comment-btn"  style="cursor:pointer;">
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -588px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                <p class="text-secondary px-2">Comment</p>

            </div>
            <div class="d-flex justify-content-center align-items-center" style="cursor:pointer;">
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -441px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                <Send class="text-secondary px-2">Send</p>

            </div>
            <div class="d-flex justify-content-center align-items-center" style="cursor:pointer;">
                     <div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w xeuugli x150jy0e x1e558r4 x10b6aqq x1yrsyyn"><i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -924px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></div>
                 <p class="text-secondary px-2">Share</p>

            </div>
            </div>
            

           <form action="./insert_comment_data.php" method="POST">
            <div class="d-none justify-content-center align-items-center py-2 px-3 gap-2 w-100 comment-form">
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
                    echo  "<img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>";

                }
            ?>
            
        </div>
        
         <div class="d-flex justify-content-between align-items-center px-3 py-2 rounded-pill form-control">
            <input type="hidden" name="posts_id" value="<?php echo $row['posts_id']?>">
            <input type="text" name="comment" placeholder="Comment as <?php echo $_SESSION['username']?>" class="border-0" style="outline-width:0;">
            <button class="border-0">
            <i class="bi bi-send-fill"></i>

            </button>
         </div>
            
            </form>

            

            </div>
            
            
        </div>

        <?php
            }
        ?>
        
            
        </div>
        </div>










        <!-- This is a right section  -->
        
        
        
        
        
        <div class="c3 col-lg-3 px-3">
            <h5 class="text-secondary my-3">
                Your Pages and profiles
            </h5>
            <div class="d-flex align-items-center  gap-3 my-3">
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
                    echo  "<img width='40px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>";

                }
            ?>
            
                <h5 class="text-capitalize">
                    <?php
                    echo $_SESSION['username']
                    ?>
                </h5>
            
        </div>

        <div class="d-flex align-items-center px-4 gap-3 text-secondary">
            <div class="x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w xeuugli xsyo7zv x16hj40l x10b6aqq x1yrsyyn x1rdy4ex"><div class="x6s0dn4 x78zum5 xl56j7k"><div class="x135icu2"><svg viewBox="0 0 20 20" width="25" height="25" fill="currentColor" aria-hidden="true" class="xfx01vb x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq" style="--color: var(--placeholder-icon);"><g fill-rule="evenodd" transform="translate(-446 -398)"><g fill-rule="nonzero"><path d="M96.628 206.613A7.97 7.97 0 0 1 96 203.5a7.967 7.967 0 0 1 2.343-5.657A7.978 7.978 0 0 1 104 195.5a7.978 7.978 0 0 1 5.129 1.86.75.75 0 0 0 .962-1.15A9.479 9.479 0 0 0 104 194a9.478 9.478 0 0 0-6.717 2.783A9.467 9.467 0 0 0 94.5 203.5a9.47 9.47 0 0 0 .747 3.698.75.75 0 1 0 1.381-.585zm14.744-6.226A7.97 7.97 0 0 1 112 203.5a7.967 7.967 0 0 1-2.343 5.657A7.978 7.978 0 0 1 104 211.5a7.978 7.978 0 0 1-5.128-1.86.75.75 0 0 0-.962 1.152A9.479 9.479 0 0 0 104 213a9.478 9.478 0 0 0 6.717-2.783 9.467 9.467 0 0 0 2.783-6.717 9.47 9.47 0 0 0-.747-3.698.75.75 0 1 0-1.381.585z" transform="translate(352 204.5)"></path><path d="M109.5 197h-2.25a.75.75 0 1 0 0 1.5h3a.75.75 0 0 0 .75-.75v-3a.75.75 0 1 0-1.5 0V197zm-11 13h2.25a.75.75 0 1 0 0-1.5h-3a.75.75 0 0 0-.75.75v3a.75.75 0 1 0 1.5 0V210z" transform="translate(352 204.5)"></path></g></g></svg></div><div class="x1jx94hy x1z11no5 xjy5m1g x1mnwbp6 x4pb5v6 xyqdw3p x10ogl3i xg8j3zb x1k2j06m x10l6tqk"></div></div></div>
            <h6>
                Switch to Pages
            </h6>
        </div>

        <div class="d-flex align-items-center px-4 gap-3 my-3 text-secondary">
            <i class="nt-icon bi bi-megaphone"></i>
            <h6>
                   Create promotion
            </h6>
        </div>

        <hr>
        
        <h4 class="text-secondary my-3">Birthday</h4>
         <div class="d-flex align-items-center px-4 gap-3 my-4 text-secondary">
            <i data-visualcompletion="css-img" class="x1b0d499 xl1xv1r" aria-hidden="true" style="height:36px;width:36px;background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/jGIHAYEO3Pc.png?_nc_eui2=AeEw6uAa0xKaQX_nVnLSpZ_uDyN8PLbjx50PI3w8tuPHnZltuS2NTMKJ6OdrJBoqA8Sq6QmQuZ5_CFNmTlYlvJ56');background-position:0 0;background-size:auto;background-repeat:no-repeat;display:inline-block"></i>
            <h6>
                 <?php
                    echo $_SESSION['username']
                    ?>
                  Your  Birthday today
            </h6>
        </div>

        <hr>

        <div class="d-flex align-items-center justify-content-between px-2 gap-3 my-3 text-secondary">


            <h4>
                Contacts
            </h4>
            
            
            <i class="nt-icon bi bi-search"></i>
           
        </div>

        <div class="d-flex align-items-center px-4 gap-3 my-3">
            <img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>

            <h6>
                   Your Friends
            </h6>
        </div>

        <div class="d-flex align-items-center px-4 gap-3 my-3">
            <img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>

            <h6>
                   Your Friends
            </h6>
        </div>

        <div class="d-flex align-items-center px-4 gap-3 my-3">
            <img width='35px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' class='pl-imag'>

            <h6>
                   Your Friends
            </h6>
        </div>


                        
        </div>
    </div>
</div>
