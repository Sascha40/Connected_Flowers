<?php


if(isset($_GET['delete']) && !empty($_GET['delete']) && is_numeric($_GET['delete'])){
    $idPlant = $_GET['delete'];

    $deletedPlant = Plants::deletePlant($idPlant);

    if($deletedPlant){
        $verifyDelete = '<p class="bold" style="font-size:18px;text-align:center;">La plante a bien été supprimée</p>';
    } else{
        $verifyDelete = '<p class="bold" style="font-size:18px;color:red;text-align:center;">La plante n\'a pas été supprimée</p>';
    }
}
else{
    $verifyDelete = '<p class="bold" style="font-size:18px;color:red;text-align:center;">La plante n\'a pas été supprimée</p>';
}

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
    $idPlant = $_GET['id'];

    $addPlantSelect = Plants::addPlantSelect($idPlant);

    if($addPlantSelect){
        $verifyAdd = '<p class="bold" style="font-size:18px;text-align:center;">La plante a bien été ajoutée à votre selection</p>';
    } else {
        $verifyAdd = '<p class="bold" style="font-size:18px;text-align:center;">La plante n\'a pas été ajoutée à votre selection</p>';
    }
} else {

}

$plants = Plants::getPlants();
