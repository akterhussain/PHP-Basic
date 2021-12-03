<?php

use function PHPSTORM_META\type;

$allowed_Type = array('image/png', 'image/jpg', 'image/jpeg');

if($_FILES['photo']){
    if(in_array($_FILES['photo'] ['type'], $allowed_Type) && $_FILES['photo']["size"]< 10){
        move_uploaded_file($_FILES['photo']['tmp_name'], 'files/'.$_FILES['photo']['name']);
        echo"Successfully uploaded file.";
    }
}
?>

<pre>
    <p>
        <?php print_r($_FILES); ?>
    </p>
</pre>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button type="submit">Submit</button>
</form>

