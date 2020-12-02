<?php
include '../inc/config.php';
$sql = "SELECT * FROM test";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['head'];
    }
}
$name = 'test';
?>
<p><?=$name?></p>