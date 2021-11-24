Fist Name is : <?php if(isset($_POST['fname'])) : ?> <?php endif ?>
Last Name is : <?php if(isset($_POST['lname'])) : ?> <?php endif ?>

<form action="" method="POST">
    <input name="fname" type="text" placeholder="First Name">
    <input name="lname" type="text" placeholder="Last Name">
    <button type="submit">Submit</button>
</form>

