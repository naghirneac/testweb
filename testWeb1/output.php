<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'testWeb1');
$result = mysqli_query($connection, "SELECT * FROM numbers");
?>
<table border="1">
    <? while($number = mysqli_fetch_assoc($result)){
        $arr[] = $number['number'];
        rsort($arr);?>
    <? } ?>
    <? foreach ($arr as $item) {?>
        <tr>
            <td><?= $item?></td>
        </tr>
    <? } ?>
</table>
<p><a href="input.php">Add a number</a></p>