<?php

use function PHPSTORM_META\type;

$allowed_Type = array('image/png', 'image/jpg', 'image/jpeg');

if($_FILES['photo']){
    $total_count = count($_FILES['photo']['name']);
    for($i=0;$i<$total_count;$i++){
            if(in_array($_FILES['photo'] ['type'] [$i], $allowed_Type) && $_FILES['photo']["size"][$i]< 10000000){
                move_uploaded_file($_FILES['photo']['tmp_name'][$i], 'files/'.$_FILES['photo']['name'][$i]);
        } 
    }
}
?>

<pre>
    <p>
        <?php print_r($_FILES); ?>
    </p>
</pre>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo[]">
    <input type="file" name="photo[]">
    <input type="file" name="photo[]">
    <input type="file" name="photo[]">
    <button type="submit">Submit</button>
</form>

