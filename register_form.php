
<div class="underlay d-flex justify-content-center align-items-center position-fixed top-0" 
style="background:rgba(0,0,0,0.7); width:100vw; height:100vh">

<div class="card reg-card p-4 shadow bg-white col-lg-4">
    
<form action="insert_register_form_data.php" method="POST">
    <i class="bi bi-x-lg fs-3 cross " style="margin-left: 90%;"></i>
    <h3 class="text-center">Create a new account</h3>
    <p class="text-secondary text-center">It's quick and easy.</p>
    <hr>
    <div class="d-flex gap-2">
    <input type="text" name="f_name" placeholder="First name" class="form-control" required>
    <input type="text" name="s_name" placeholder="Surname" class="form-control" required>
    </div>
    <label for="" class="text-secondary my-2">Date of birth <span style="background:#606770; color:white; ">?</span></label>
    <div class="d-flex gap-2">
        <select name="date" id="" class="form-control" required>
            
            <?php 
        for($i = 1 ; $i <= 31 ; $i++){
            echo "<option value='$i'>" . $i ."</option>";
        };
        ?>
            
        </select>
        
        <select name="month" id="" class="form-control text-capitalize" required>
            <?php 

        $months = ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'];

        foreach($months as $item){
            echo "<option value='$item'> $item</option>";
        };

        ?>
        
    </select>
    <select name="year" id="" class="form-control" required>
        <?php 
            for($i = 2024; $i >= 1905;  $i--){
                echo "<option value='$i'>" . $i ."</option>";
            };
            ?>
        </select>
    </div>

    <label for="" class="text-secondary my-2">Gender <span style="background:#606770; color:white; ">?</span></label>

    <div class="d-flex justify-content-between gap-2">
        <div class="border d-flex w-100 justify-content-between p-2  rounded-2">
            <label for="">Female</label>
            <input type="radio" value="female" name="gender" class="form-check" required>
        </div>

        <div class="border w-100 d-flex justify-content-between p-2  rounded-2">
            <label for="">Male</label>
            <input type="radio" value="male" name="gender" class="form-check" required>
        </div>
    </div>
    
    <input type="text" name="m_mail" placeholder="Mobile number or email address" class="form-control my-2 p-2" required>


    <input type="password" name="password" placeholder="Password" class="form-control my-2 p-2" required>

    <p class="text-secondary" style="font-size:13px;">People who use our service may have uploaded your contact information to Facebook. Learn more.</p>

    <p class="text-secondary" style="font-size:13px;">By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</p>
    
    <button class="btn btn-greeen text-white fw-semibold w-50 mx-auto d-block p-1 " style="background:#00BA3B; ">Sign Up</button>

    
</form>

</div>

</div>

