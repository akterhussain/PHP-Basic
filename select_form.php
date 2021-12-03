<?php
    function displayOptions($options){
        foreach($options as $option){
            printf("<option value='%s'>%s</option>", strtolower($option),ucwords($option));
        }
    }

    $fruits =["mango", "apple","orange"]; ?>
    <p>
    <?php if(isset($_POST['fruits'])){
        printf("You have selected : %s",filter_input($_POST,'fruits', FILTER_SANITIZE_STRING));
    }
?>
</p>
<form action="" method="POST">
    <select name="fruit" id="">
        <option value="" disabled selected>Select a fruit</option>
        <?php displayOptions($fruits); ?>
        </select>
    <button type="submit">Submit</button>
</form>

