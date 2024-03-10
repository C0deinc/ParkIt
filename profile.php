<div class="profile">
    <?php
    $select = mysqli_query($conn, "SELECT * FROM `account` WHERE id= `$id`")
    or die('query failed');
    
    if(mysqli_num_rows($select) > 0){
        $fetch =mysqli_fetch_assoc($select);
    }
    if($fetch['image'] == ''){
        echo '<img src="/images/default-profile.png">';
    }else{
        echo '<img src="uploaded_img/' .$fetch['image']. '">';
    }
    ?>
</div>
<div class="profile">
    <?php
    /*
    $select = mysqli_query($conn, "SELECT * FROM `account` WHERE id = '$id'")
    or die('query failed');
    if(mysqli_num_rows($select) > 0){
        $fetch = mysqli_fetch_assoc($select);
        if($fetch['image'] == ''){
            echo '<img src="/images/default-profile.png" class="rounded-circle">';
        } else {
            echo '<img src="uploaded_img/' . $fetch['image'] . '" class="rounded-circle">';
        }
    }
    */
    ?>
    </div>


<div class="container pt-5" style="padding-left: 50px;" >
                    <div class="">
                    <i class="fa-solid fa-address-card me-4 text-white"></i>
                    <a href="" class="text-decoration-none text-white profile-details">Harolhette O. Rom</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa-envelope me-4 text-white"></i>
                    <a href="" class="text-decoration-none text-white profile-details">haroletrom@gmail.com</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-venus-mars me-4 text-white"></i>
                    <a href="" class="text-decoration-none text-white profile-details">Male</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-mobile me-4 text-white"></i>
                    <a href="" class="text-decoration-none text-white profile-details">09557651889</a>
                    </div>
                    <div class="pt-3">
                    <i class="fa-solid fa fa-location-dot me-4 text-white"></i>
                    <a href="" class="text-decoration-none text-white profile-details">Zamboanga del sur, Zamoanga City,Upper Calarian, Southcom Village</a>
                    </div>
</div>