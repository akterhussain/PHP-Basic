<?php
    function first_name(){
        if(isset($_POST['fname'])){
            return htmlspecialchars($_POST['fname']);
        }
    }

    function last_name(){
        if(isset($_POST['lname'])){
            return htmlspecialchars($_POST['lname']);
        }
    }

?>
First Name : <?php echo  first_name(); ?> <br>
Last Name : <?php echo  last_name(); ?>

<form action="" method="POST">
    <input name="fname" type="text" placeholder="First Name">
    <input name="lname" type="text" placeholder="Last Name">
    <button type="submit">Submit</button>
</form>

