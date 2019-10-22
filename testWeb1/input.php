<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'testWeb1');
if(!empty($_POST)) {

    if($insert = mysqli_query($connection, "INSERT INTO numbers 
                                            SET    
                                                number = '{$_POST['number']}'")) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}
?>
<form action="" method="post">
    <input type="number" step="any" name="number">
    <input type="submit">
</form>
<p><a href="output.php">Go to list</a></p>