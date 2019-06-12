<?php

if(isset($_GET['pselect']) && !empty($_GET['pselect'])){

    $id_pselect = $_GET['pselect'];

    Plants::boolTo1($id_pselect);
    Plants::boolTo0($id_pselect);

}

$plantSelect = Plants::getPlantSelect($_GET['plant']);
$dataPlant = Plants::getData($_GET['pselect']);
$datas = Plants::getDatas($_GET['pselect']);