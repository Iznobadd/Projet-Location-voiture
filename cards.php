<?php
$filename = "cars.json";
$data = file_get_contents($filename);
$cars = json_decode($data);
?>

<div class="bd-example">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach($cars as $car){
        ?>
        <div class="col">
            <div class="card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="200" src="<?= $car->url_image ?>" alt="" role="img">
                <div class="card-body">
                    <h5 class="card-title"><?= $car->model ?></h5>
                    <p class="card-text"><?= $car->description ?></p>
                    <h5 class="card-title">Nombre de places : <?= $car->place ?></h5>
                    <h5 class="card-title">Tarif journalier : <?= $car->tarif ?>€</h5>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>