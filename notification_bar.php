
<div class="card-parent d-n rounded-3" style="position:fixed;top:72px; right:20px; display:none;z-index:333;">
<div class="card profile-card d-n p-3 w-100 shadow border-0">
    <div class="card p-3 border-0 d-n shadow">
        <div class="d-flex align-items-center d-n gap-3">
            <?php
                if(isset($_SESSION['img'])){ 
                    
                    if($_SESSION['img'] == NULL){
                        echo  "<img width='70px' src='https://static.vecteezy.com/system/resources/thumbnails/009/734/564/small/default-avatar-profile-icon-of-social-media-user-vector.jpg' alt='user-default-img'>";
                        
                    }
                    else{
                        echo " <div class='dp-img border-0'>
                        <img width='100%' height='100%' src='{$_SESSION['img']}' alt='dp1-img'>
                        </div>";
                    }
                }
                else{
                    echo  "<img width='70px' src='https://static.vecteezy.com/system/resources/thumbnails/009/734/564/small/default-avatar-profile-icon-of-social-media-user-vector.jpg' alt='user-default-img'>";

                }
            ?>
            
                <h5 class="text-capitalize d-n">
                    <?php
                    echo $_SESSION['username']
                    ?>
                </h5>
            
        </div>
        <hr class="my-2 d-n">

        <div class="d-flex align-items-center gap-3 d-n">
            <div class="d-n x9f619 x1n2onr6 x1ja2u2z x78zum5 xdt5ytf x2lah0s x193iq5w xeuugli xsyo7zv x16hj40l x10b6aqq x1yrsyyn x1rdy4ex"><div class="x6s0dn4 x78zum5 xl56j7k"><div class="x135icu2"><svg viewBox="0 0 20 20" width="36" height="36" fill="currentColor" aria-hidden="true" class="xfx01vb x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq" style="--color: var(--placeholder-icon);"><g fill-rule="evenodd" transform="translate(-446 -398)"><g fill-rule="nonzero"><path d="M96.628 206.613A7.97 7.97 0 0 1 96 203.5a7.967 7.967 0 0 1 2.343-5.657A7.978 7.978 0 0 1 104 195.5a7.978 7.978 0 0 1 5.129 1.86.75.75 0 0 0 .962-1.15A9.479 9.479 0 0 0 104 194a9.478 9.478 0 0 0-6.717 2.783A9.467 9.467 0 0 0 94.5 203.5a9.47 9.47 0 0 0 .747 3.698.75.75 0 1 0 1.381-.585zm14.744-6.226A7.97 7.97 0 0 1 112 203.5a7.967 7.967 0 0 1-2.343 5.657A7.978 7.978 0 0 1 104 211.5a7.978 7.978 0 0 1-5.128-1.86.75.75 0 0 0-.962 1.152A9.479 9.479 0 0 0 104 213a9.478 9.478 0 0 0 6.717-2.783 9.467 9.467 0 0 0 2.783-6.717 9.47 9.47 0 0 0-.747-3.698.75.75 0 1 0-1.381.585z" transform="translate(352 204.5)"></path><path d="M109.5 197h-2.25a.75.75 0 1 0 0 1.5h3a.75.75 0 0 0 .75-.75v-3a.75.75 0 1 0-1.5 0V197zm-11 13h2.25a.75.75 0 1 0 0-1.5h-3a.75.75 0 0 0-.75.75v3a.75.75 0 1 0 1.5 0V210z" transform="translate(352 204.5)"></path></g></g></svg></div><div class="x1jx94hy x1z11no5 xjy5m1g x1mnwbp6 x4pb5v6 xyqdw3p x10ogl3i xg8j3zb x1k2j06m x10l6tqk"></div></div></div>
            <h5 class="d-n">
                   Your pages
            </h5>

        </div>
         <hr class="my-2 d-n">

      
            <button class="btn btn-light p-3 py-2 d-n">
                <i data-visualcompletion="css-img" class="d-n x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/IJp6w9Zc79T.png?_nc_eui2=AeEi8smiGyMsrB8_2ss4ApK1g4vE8jEZRdeDi8TyMRlF1wIS9GJG9q61Y4WRYjd9yhLqmw_wNs8LORKNTFNmYAvV&quot;); background-position: 0px -319px; background-size: auto; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
                See all profile
            </button>

            
    </div>


    <a class="d-flex gap-3 d-n align-items-center text-decoration-none text-black " style="cursor:pointer">
        <div class="a-icon p-2 d-n my-2 d-flex justify-content-center align-items-center" style=" background-color: #D8DADF;
    clip-path: circle();">
            <i class="d-n fsz" data-visualcompletion="css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/R_FSbGNB99j.png?_nc_eui2=AeHOZUBPH6jFpHUbNYBF5dMctlm69zT0AAa2Wbr3NPQABsLIV5orCRn4utretLfrfcj_tS8W9nl2aTTusO0v38eX&quot;); background-position: 0px -511px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
        </div>
        <p class="d-n">Setting s & privacy</p>
    </a>
    
    <a class="d-flex d-n  gap-3 align-items-center text-decoration-none text-black" style="cursor:pointer">
        <div class="a-icon d-n p-2 my-2 d-flex justify-content-center align-items-center" style=" background-color: #D8DADF;
    clip-path: circle();">
    <i data-visualcompletion="css-img" class="d-n x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/IJp6w9Zc79T.png?_nc_eui2=AeEi8smiGyMsrB8_2ss4ApK1g4vE8jEZRdeDi8TyMRlF1wIS9GJG9q61Y4WRYjd9yhLqmw_wNs8LORKNTFNmYAvV&quot;); background-position: 0px -214px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
</div>
<p class="d-n">Help & support</p>
    </a>
    
    <a class="d-flex d-n gap-3 align-items-center text-decoration-none text-black" style="cursor:pointer">
        <div class="d-n a-icon p-2 my-2 d-flex justify-content-center align-items-center" style=" background-color: #D8DADF;
    clip-path: circle();">
    <i data-visualcompletion="css-img" class="d-n x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Hs6X8XJtq31.png?_nc_eui2=AeHOc44ucxgptf6uWoT2LUrtgPw3gjnq4hmA_DeCOeriGdgTLx60UkQ3nAbganqFZwjQ8SGnSoqGL4yir4nKsnnw&quot;); background-position: 0px -327px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
        </div>
        <p class="d-n">display & accessibility</p>
    </a>
    
    <a class="d-flex d-n gap-3 align-items-center text-decoration-none text-black" style="cursor:pointer">
        <div class="a-icon d-n p-2 my-2 d-flex justify-content-center align-items-center" style=" background-color: #D8DADF;
    clip-path: circle();">
    <i data-visualcompletion="css-img" class="d-n x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/23evM0cLO-Q.png?_nc_eui2=AeGRYZkFafECwYO_avWsbbiwC42wSeh2ZXELjbBJ6HZlcQtfOCRhGGE4k4MAITLZ1Ole15fITiWHfDSam2vipTbf&quot;); background-position: 0px -146px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
        </div>
        <p class="d-n">Give feedback</p>
    </a>
    
    <a href="./logout.php" class="d-flex d-n gap-3 align-items-center text-decoration-none text-black " style="cursor:pointer">
        <div class="d-n a-icon p-2 my-2 d-flex justify-content-center align-items-center" style=" background-color: #D8DADF;
    clip-path: circle();">
    <i data-visualcompletion="d-n css-img" class="x1b0d499 xep6ejk" aria-hidden="true" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yR/r/23evM0cLO-Q.png?_nc_eui2=AeGRYZkFafECwYO_avWsbbiwC42wSeh2ZXELjbBJ6HZlcQtfOCRhGGE4k4MAITLZ1Ole15fITiWHfDSam2vipTbf&quot;); background-position: 0px -167px; background-size: auto; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
        </div>
        Logout
    </a>
    
    
</div>

 </div>
           
