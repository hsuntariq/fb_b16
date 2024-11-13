<nav class="navbare">
        <div class="logo-search">
            <div class="logo-img">
                <img width="60px" src="https://static.vecteezy.com/system/resources/previews/018/930/476/non_2x/facebook-logo-facebook-icon-transparent-free-png.png" alt="logo-img" class="lg-img">
            </div>
            <div class="search-input">
                <i class="bi bi-search"></i>
                <input type="search" placeholder="Search facebook" class="sh-iput">
            </div>
        </div>

        <div class="main-icons">
            
                <ul class=" ul-nav">
        <li >
            <a href="">
                   <i class="bi bi-house"></i>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-play-btn"></i>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-shop"></i>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-person-circle"></i>
            </a>
        </li>
        <li>
            
            <a href="">
                <i class="bi bi-controller"></i>
            </a>
        </li>
        </ul>
        </div>

       <div class="profile-icons">
                <div class="menu-icon1">
                
                    <i class="menu-path bi bi-grid-3x3-gap-fill" style="font-size:28px; cursor:pointer;"></i>
                </div>

                <div class="sr-icon">
                    <a href="">
                        <i class="sr-sr bi bi-search"></i>
                    </a>
                </div>
                

                <div class="chat-icon">
                    <a href="">
                    <svg viewBox="0 0 12 13" width="29" height="29" fill="currentColor" class=" xfx01vb x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq" style="--color:var(--primary-icon)"><g fill-rule="evenodd" transform="translate(-450 -1073)"><path d="m459.603 1077.948-1.762 2.851a.89.89 0 0 1-1.302.245l-1.402-1.072a.354.354 0 0 0-.433.001l-1.893 1.465c-.253.196-.583-.112-.414-.386l1.763-2.851a.89.89 0 0 1 1.301-.245l1.402 1.072a.354.354 0 0 0 .434-.001l1.893-1.465c.253-.196.582.112.413.386M456 1073.5c-3.38 0-6 2.476-6 5.82 0 1.75.717 3.26 1.884 4.305.099.087.158.21.162.342l.032 1.067a.48.48 0 0 0 .674.425l1.191-.526a.473.473 0 0 1 .32-.024c.548.151 1.13.231 1.737.231 3.38 0 6-2.476 6-5.82 0-3.344-2.62-5.82-6-5.82"></path></g></svg>
                    </a>
                </div>
                <div class="bell-icon">
                    <a href="">
                    <i class="icn bi bi-bell-fill"></i>
                    </a>
                </div>

                <div class="dp-img " style="cursor:pointer">
                 <?php
                if(isset($_SESSION['img'])){ 
                    
                    if($_SESSION['img'] == NULL){
                        echo  "<img width='50px' class='d-n' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";
                        
                    }
                    else{
                        echo " <div class='dp-img border-0'>
                        <img width='100%' class='d-n;' height='100%' src='{$_SESSION['img']}' alt='dp1-img'>
                        </div>";
                    }
                }
                else{
                    echo  "<img width='50px' class='d-n' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";

                }
            ?>
              <i class="dn-ar bi bi-chevron-down"></i>
                 </div>
                <!-- 
                    <img width="100%" height="100%" src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="dp-img">
                  
               
                 -->
                </div>
        
                </nav>
        
        <div class="main-icons-2" >
            
                <ul class=" ul-nav">
        <li >
            <a href="">
                   <i class="bi bi-house"></i>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-play-btn"></i>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-shop"></i>
            </a>
        </li>
        <li>
            <a href="">
                <i class="bi bi-person-circle"></i>
            </a>
        </li>
        <li>
            
            <a href="">
                <div class="bell-icon">
                    <i class="icn bi bi-bell-fill"></i>
                </div>
            </a>
        </li>
        <li>
            
         <div class="dp-img">
         <?php
                if(isset($_SESSION['img'])){ 
                    
                    if($_SESSION['img'] == NULL){
                        echo  "<img width='50px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";
                        
                    }
                    else{
                        echo " <div class='dp-img border-0'>
                        <img width='100%' height='100%' src='{$_SESSION['img']}' alt='dp1-img'>
                        </div>";
                    }
                }
                else{
                    echo  "<img width='50px' src='https://scontent.fisb5-2.fna.fbcdn.net/v/t1.30497-1/453178253_471506465671661_2781666950760530985_n.png?stp=cp0_dst-png_s50x50&_nc_cat=1&ccb=1-7&_nc_sid=8f254b&_nc_eui2=AeGwIW6OSQLgTtQqcZibj2RhWt9TLzuBU1Ba31MvO4FTUL8YoqPVvbTYiiNfhcq8V_6Y0ylxRhbwsxxnmgjmhfvw&_nc_ohc=HtQaFFdxl5gQ7kNvgEfeJYf&_nc_zt=24&_nc_ht=scontent.fisb5-2.fna&_nc_gid=AyRP1T1B3JDBVZae4QpiHpc&oh=00_AYAv1jTncr0vdxTP15l87CMnYOrNNLuyN3ADAAwMfYZtKw&oe=6750893A' alt='user-default-img'>";

                }
            ?>
               <i class="dp-lt bi bi-list"></i>
         </div>
             
        </li>
        </ul>
        </div>


        
        
        
        
        
        
        

        <div class="main-menu">
            <h2 class="n-hide">Menu</h2>
            
            <div class="menu">
                <div class="menu-left">
                    <div class="search-input n-hide">
                <i class="n-hide bi bi-search"></i>
                <input type="search" placeholder="Search facebook" class="sh-iput n-hide">
                </div>

                <h3 class="n-hide">
                    Social
                </h3>

                <ul class="ul-icons n-hide">
                    <li class="n-hide">
                        <div class="social-icons n-hide">
                            <img class="n-hide" class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/qfMB40PdgWb.png?_nc_eui2=AeFB_abOB2ctwErx2Vh-PBbgkmXzdxy7YT6SZfN3HLthPk3sPGOLHVFO_RKOt8D03PMvuRg6SMhcvEPri-dJQsJW" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events">
                            <h4 class="n-hide">Events</h4>
                            <p class="n-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, id.</p>
                        </div>
                    </li>
                    <li class="n-hide">
                        <div class="social-icons">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/i0pziEs5Wj6.png?_nc_eui2=AeE66mt4Ry1YqZx-YEvnVhc-OicAEHSeNj06JwAQdJ42PT8fWfIoTekNIGBsutjj1a_eRpbMn67I6y-5307rbsh8" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events">
                            <h4 class="n-hide">Friends(90 online)</h4>
                            <p class="n-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, id.</p>
                        </div>
                    </li>
                    <li class="n-hide">
                        <div class="social-icons">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/MhkwI3R0SHP.png?_nc_eui2=AeH7rXBY-h55hYOAneeqy35Vql7VDb0FYbuqXtUNvQVhuxxphgSzpDMjuuziizbciqfJ5qEVgEXOQT_GRKR3emrX" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events n-hide">
                            <h4 class="n-hide">Groups</h4>
                            <p class="n-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, id.</p>
                        </div>
                    </li>
                    <li class="n-hide">
                        <div class="social-icons n-hide">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/-6zDH4i8Hrw.png?_nc_eui2=AeG9KAGd4Tk9YoumCe_4FS1N1IEyp2V0iuPUgTKnZXSK44CSDOvDm6NhrDUDf3ySVu2jFaoCSFQ_44aWMP_1iAdO" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events n-hide">
                            <h4 class="n-hide">News Feed</h4>
                            <p class="n-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, id.</p>
                        </div>
                    </li>
                    <li class="n-hide">
                        <div class="social-icons n-hide">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/eECk3ceTaHJ.png?_nc_eui2=AeHGJF1LLGS9keXYpVZXE7o7i9AM8exRZGeL0Azx7FFkZ2Vj3DXOFQhXJSqZXPdfKLLi4MJ9AG31yQW8pt8QxrM4" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events n-hide">
                            <h4 class="n-hide">Feeds</h4>
                            <p class="n-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, id.</p>
                        </div>
                    </li>
                    <li class="n-hide">
                        <div class="social-icons n-hide">
                            <img class="x1b0d499 xl1xv1r" alt="" aria-hidden="true" src="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/7RdHDScIkAe.png?_nc_eui2=AeHtXCB8J1ej1mOTACCaM7AbbNlWTATZBohs2VZMBNkGiEu-ZX_nNqE4mGZEAoUjNeXzMjy36irbVFMDsQp296oN" style="height: 36px; width: 36px;">
                        </div>
                        <div class="social-events n-hide">
                            <h4 class="n-hide">Pages</h4>
                            <p class="n-hide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat, id.</p>
                        </div>
                    </li>
                 
                </ul>

                </div>
                <div class="menu-right">
                    
                    <ul class="ul-icons n-hide">
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/CvTdMKZv_Sn.png?_nc_eui2=AeEro-c_dDVM9oG-_e_NXndgLpG-vNO4d48ukb6807h3j1ralUT-9tWHk9IuNZxp3ZiKE2ZAhJnHw2tqFlArg0S6&quot;); background-position: 0px -230px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Post</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/rUkzxUYt8am.png?_nc_eui2=AeH5SJSjuuLG_8BaOQAs1eG9DGrhNcNfUKQMauE1w19QpPIWHcH4ftjGA_bRV4kjqMhj_5jGDRcjE5LgXmuq-3cs&quot;); background-position: 0px -273px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Story</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y6/r/rUkzxUYt8am.png?_nc_eui2=AeH5SJSjuuLG_8BaOQAs1eG9DGrhNcNfUKQMauE1w19QpPIWHcH4ftjGA_bRV4kjqMhj_5jGDRcjE5LgXmuq-3cs&quot;); background-position: 0px -21px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Reel</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/iqHNHj-SBfJ.png?_nc_eui2=AeFfvbpcXgSo5SnMKofeGHWiAjJYKIINcVYCMlgogg1xVhOTbOyx_5XaPJ5K3yAJvtCINFQpbxUeLDgu8B4BDVbW&quot;); background-position: 0px -166px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Life Events</h4>
                        </li>
                        <hr>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/CvTdMKZv_Sn.png?_nc_eui2=AeEro-c_dDVM9oG-_e_NXndgLpG-vNO4d48ukb6807h3j1ralUT-9tWHk9IuNZxp3ZiKE2ZAhJnHw2tqFlArg0S6&quot;); background-position: 0px -167px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Page</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/iqHNHj-SBfJ.png?_nc_eui2=AeFfvbpcXgSo5SnMKofeGHWiAjJYKIINcVYCMlgogg1xVhOTbOyx_5XaPJ5K3yAJvtCINFQpbxUeLDgu8B4BDVbW&quot;); background-position: -21px -166px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Ad</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/CvTdMKZv_Sn.png?_nc_eui2=AeEro-c_dDVM9oG-_e_NXndgLpG-vNO4d48ukb6807h3j1ralUT-9tWHk9IuNZxp3ZiKE2ZAhJnHw2tqFlArg0S6&quot;); background-position: 0px -146px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Group</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/CvTdMKZv_Sn.png?_nc_eui2=AeEro-c_dDVM9oG-_e_NXndgLpG-vNO4d48ukb6807h3j1ralUT-9tWHk9IuNZxp3ZiKE2ZAhJnHw2tqFlArg0S6&quot;); background-position: 0px -188px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Event</h4>
                        </li>
                        <li class="n-hide">
                            <div class="page-icons n-hide">
                                <i class="pi-icon n-hide" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ym/r/CvTdMKZv_Sn.png?_nc_eui2=AeEro-c_dDVM9oG-_e_NXndgLpG-vNO4d48ukb6807h3j1ralUT-9tWHk9IuNZxp3ZiKE2ZAhJnHw2tqFlArg0S6&quot;); background-position: 0px -398px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                            </div>
                            <h4 class="n-hide">Market
                                Listing
                            </h4>
                        </li>
                    </ul>
                    
                </div>
                </div>
            

        </div> 