<div class="underlay d-flex justify-content-center align-items-center position-fixed top-0" 
style="background:rgba(0,0,0,0.7); width:100vw; height:100vh; z-index:333;">

<div class="card reg-card shadow border-0 p-3" style="width:30%;">
    <div class="d-flex justify-content-between align-items-center gap-3">   
        <p class="fw-bold fs-4">Create post</p>
                <i class="bi bi-x-lg cross"></i>
                </div>

                <hr class="my-3">
        
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

        

        
        <form action="./insert_post_data.php" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Caption" name="caption" class="form-control p-2 my-2">
            <input type="file" name="img" class="form-control p-2 outline-0 shadow file-input">
            <img class="post-preview my-2" style="width:100%; height:200px;display:none;">
            
            <button class="btn btn-info fw-bold text-capitalize w-100 my-2 p-2">
                post
            </button>
        </form>
        
    </div>

</div>




