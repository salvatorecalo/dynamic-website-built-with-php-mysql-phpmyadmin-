
<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM corsi where id= ".$_GET['page']."";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '
    <div class="card-deck mx-auto pt-5 pb-5">';
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo '
        <div class="col-lg-4 col-md-6 col-12 py-2">
                    <img src="'.$row["image"].'" width="100%">
                    <h5 class="card-title text-center">'.$row["titolo"].'</h5>
                    <p class="card-text">
                    '.$row["descrizione"].'
                    <br>
                    '.$row["info_corso"].' 
                    </p>
                    <a href="mailto:" class="btn btn-outline-success btn-lg btn-block">Iscriviti al corso</a>
        </div>';
    }
    echo '</div>';
}
?>