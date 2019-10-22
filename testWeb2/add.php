<?php

    if(!empty($_POST)) {
        $masiv->setElement($_POST['element']);
    }
?>
<form action="" method="post">
    <input type="text" name="element">
    <input type="submit" name="add">
</form>
