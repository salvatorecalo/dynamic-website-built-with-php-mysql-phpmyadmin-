<style>
.carta {
  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12);
  margin: 100px auto;
  min-height: 550px;
  background: white;
  border-radius: 5px;
  transition: 0.3s linear;
}

.carta:hover {
    box-shadow:
  0 0 0 rgba(0, 0, 0, 0.034),
  0 0 5.3px rgba(0, 0, 0, 0.048),
  0 0 0 rgba(0, 0, 0, 0.06),
  0 0 0.0 rgba(0, 0, 0, 0.072),
  0 0 0 0 rgba(0, 0, 0, 0.086),
  0 0 0 rgba(0, 0, 0, 0.12);
    cursor: pointer;
}
body {
  background: #EEF2F7;
}
</style>
<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM corsi";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '
    <div class="card-deck mx-auto pt-5 pb-5">';
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo '
        <div class="col-lg-4 col-md-6 col-12 py-2">
            <div class="card carta">
                <div class="card-body">
                    <img src="'.$row["image"].'" width="100%">
                    <h5 class="card-title text-center my-2">'.$row["titolo"].'</h5>
                    <p class="card-text">'.$row["descrizione"].'
                    <a href="blog.php?page='.$row["id"].'" class="link text-link">Leggi di più...</a>
                    </p>
                    <a href="mailto:salvatorecalo4@gmail.com?subject=Richiesta%20iscrizione%20al%20corso%20&body=Buongiorno vorrei richiedere di partecipare al corso **scrivi il nome corso**" class="btn btn-outline-success btn-lg btn-block">Iscriviti al corso</a> 
                </div>
            </div>
        </div>';
    }
    echo '</div>';
}
// ending point

include 'inc/footer.php';
?>