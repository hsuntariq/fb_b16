<div class="underlay-comment d-flex justify-content-center align-items-center position-fixed top-0" 
style="background:rgba(0,0,0,0.7); width:100vw; height:100vh; z-index:333;">

<div class="card comment-card shadow border-0 p-3" style="width:30%;">
    <div class="d-flex justify-content-between align-items-center gap-3">   
        <p class="fw-bold fs-4 text-capitalize"><?php echo $_SESSION['username']?> post</p>
                <i class="bi bi-x-lg cross-c"></i>
                </div>



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
            <img class="x16dsc37" height="18" role="presentation" width="18" src="data:image/svg+xml,%3Csvg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M16.0001 7.9996c0 4.418-3.5815 7.9996-7.9995 7.9996S.001 12.4176.001 7.9996 3.5825 0 8.0006 0C12.4186 0 16 3.5815 16 7.9996Z' fill='url(%23paint0_linear_15251_63610)'/%3E%3Cpath d='M16.0001 7.9996c0 4.418-3.5815 7.9996-7.9995 7.9996S.001 12.4176.001 7.9996 3.5825 0 8.0006 0C12.4186 0 16 3.5815 16 7.9996Z' fill='url(%23paint1_radial_15251_63610)'/%3E%3Cpath d='M16.0001 7.9996c0 4.418-3.5815 7.9996-7.9995 7.9996S.001 12.4176.001 7.9996 3.5825 0 8.0006 0C12.4186 0 16 3.5815 16 7.9996Z' fill='url(%23paint2_radial_15251_63610)' fill-opacity='.5'/%3E%3Cpath d='M7.3014 3.8662a.6974.6974 0 0 1 .6974-.6977c.6742 0 1.2207.5465 1.2207 1.2206v1.7464a.101.101 0 0 0 .101.101h1.7953c.992 0 1.7232.9273 1.4917 1.892l-.4572 1.9047a2.301 2.301 0 0 1-2.2374 1.764H6.9185a.5752.5752 0 0 1-.5752-.5752V7.7384c0-.4168.097-.8278.2834-1.2005l.2856-.5712a3.6878 3.6878 0 0 0 .3893-1.6509l-.0002-.4496ZM4.367 7a.767.767 0 0 0-.7669.767v3.2598a.767.767 0 0 0 .767.767h.767a.3835.3835 0 0 0 .3835-.3835V7.3835A.3835.3835 0 0 0 5.134 7h-.767Z' fill='%23fff'/%3E%3Cdefs%3E%3CradialGradient id='paint1_radial_15251_63610' cx='0' cy='0' r='1' gradientUnits='userSpaceOnUse' gradientTransform='rotate(90 .0005 8) scale(7.99958)'%3E%3Cstop offset='.5618' stop-color='%230866FF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%230866FF' stop-opacity='.1'/%3E%3C/radialGradient%3E%3CradialGradient id='paint2_radial_15251_63610' cx='0' cy='0' r='1' gradientUnits='userSpaceOnUse' gradientTransform='rotate(45 -4.5257 10.9237) scale(10.1818)'%3E%3Cstop offset='.3143' stop-color='%2302ADFC'/%3E%3Cstop offset='1' stop-color='%2302ADFC' stop-opacity='0'/%3E%3C/radialGradient%3E%3ClinearGradient id='paint0_linear_15251_63610' x1='2.3989' y1='2.3999' x2='13.5983' y2='13.5993' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%2302ADFC'/%3E%3Cstop offset='.5' stop-color='%230866FF'/%3E%3Cstop offset='1' stop-color='%232B7EFF'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E">
            <div class="d-flex justify-content-center gap-2 align-items-center">
                <?php
            
                $red = "SELECT COUNT(id) AS total FROM comments WHERE post_id = {$row['posts_id']}";

                $go = mysqli_query($connection,$red);
                $comment_count = mysqli_fetch_assoc($go);
                echo $comment_count['total'];
                ?>
                <i data-visualcompletion="css-img" class="x1b0d499 x1d69dk1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/xAljGE-8t8Y.png?_nc_eui2=AeEt0OWqfO4npjyY_HERIIDrYKeqiUd796lgp6qJR3v3qQfTLzDIKRyl6_7F8d9AsWiAsMJrGt1AbBEXF3MuaOIJ&quot;); background-position: 0px -1201px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
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
                
                
                
                <hr class="my-3">
        
                 

        

       
        
    </div>

</div>
