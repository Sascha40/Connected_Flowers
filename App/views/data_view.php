<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './views/includes/head.php' ?>
</head>
<body>

    <!-- === HEADER === -->

        <?php include_once './views/includes/header.php' ?>
    
    <!-- === CONTENTS HOME PAGE === -->
    
        <?php 
        
            if($dataPlant['floor_humidity'] == 1){
                $dataPlant['floor_humidity'] = "Pas Humide";
            } else{
                $dataPlant['floor_humidity'] = "Humide";
            }
        
        ?>
        
        <h2 id="title_data">Données de votre <?= $plantSelect['name'] ?></h2>

        <div id="contain_data">
            <div id="luminosity">
                <h3>Luminosité</h3>
                <p><?= $dataPlant['luminosity'] ?></p>                
            </div>
            <div id="temperature">
                <h3>Température</h3>
                <p><?= $dataPlant['temperature'] ?></p>
            </div>
            <div id="pression">
                <h3>Pression</h3>
                <p><?= $dataPlant['pression'] ?></p>
            </div>
            <div id="floorhumidity">
                <h3>Humidité du sol</h3>
                <p><?= $dataPlant['floor_humidity'] ?></p>                
            </div>
        </div>

        <div id="table_data">
            <div id="indications">
                <h3>Date</h3>
                <h3>Luminosité</h3>
                <h3>Température</h3>
                <h3>Pression</h3>
                <h3>Humidité du sol</h3>
                <h3>Humidité de l'air</h3>
            </div>
            <?php  
                foreach($datas as $index=>$data){ ?>
                <div class="data">
                    <h3><?= $data['luminosity']  ?></h3>
                    <h3><?= $data['temperature']  ?></h3>
                    <h3><?= $data['pression']  ?></h3>
                    <h3><?= $data['floor_humidity']  ?></h3>
                    <h3><?= $data['air_humidity']  ?></h3>   
                </div>            
                <?php
                } ?>
        </div>


</body>
</html>