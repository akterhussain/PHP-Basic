Fist Name is : <?php if(isset($_POST['fname'])) { 
    echo $_POST['fname']; } ?> <br>

Last Name is : <?php if(isset($_POST['lname'])) { 
    echo $_POST['lname']; } ?> 


<form method="POST">
    <input name="fname" type="text" placeholder="First Name">
    <input name="lname" type="text" placeholder="Last Name">
    <button type="submit">Submit</button>
</form>

