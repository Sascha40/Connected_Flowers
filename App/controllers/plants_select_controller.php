<?php

if(isset($_GET['delete']) && !empty($_GET['delete']) && is_numeric($_GET['delete'])){
    $idPlant = $_GET['delete'];

    $deletedPlant = Plants::deletePlantSelect($idPlant);

    if($deletedPlant){
        $verifyDelete = '<p class="bold" style="font-size:18px;text-align:center;">La plante a bien été supprimée</p>';
    } else{
        $verifyDelete = '<p class="bold" style="font-size:18px;color:red;text-align:center;">La plante n\'a pas été supprimée</p>';
    }
}
else{
    $verifyDelete = '<p class="bold" style="font-size:18px;color:red;text-align:center;">La plante n\'a pas été supprimée</p>';
}

$plants = Plants::getListPlantSelect();