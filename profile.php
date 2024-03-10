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