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
            } else if($dataPlant['floor_humidity'] == 2){
                $dataPlant['floor_humidity'] = "Humide";
            }
        
        ?>
        
        <h2 id="title_data">Données de votre <?= $plantSelect['name'] ?></h2>

        <div id="contain_data">
            <div id="luminosity">
                <h3>Luminosité</h3>
                <p><?= $dataPlant['luminosity'] ?> Lux</p>                
            </div>
            <div id="temperature">
                <h3>Température</h3>
                <p><?= $dataPlant['temperature'] ?> °C</p>
            </div>
            <div id="pression">
                <h3>Pression</h3>
                <p><?= $dataPlant['pression'] ?> hPa</p>
            </div>
            <div id="floorhumidity">
                <h3>Humidité du sol</h3>
                <p><?= $dataPlant['floor_humidity'] ?></p>                
            </div>
        </div>

        <h2 id="title_data">Historique</h2>

        <table id="table_data">
            
            <tr>
                <th>Date</th>
                <th>Luminosité</th>
                <th>Température</th>
                <th>Pression</th>
                <th>Humidité du sol</th>
                <th>Humidité de l'air</th>
            </tr>
            
            <?php  
                foreach($datas as $index=>$data){ 
                    
                    if($data['floor_humidity'] == 1){
                        $data['floor_humidity'] = "Pas Humide";
                    } else if($data['floor_humidity'] == 2){
                        $data['floor_humidity'] = "Humide";
                    }           
                    
                    ?>
                    <tr>
                        <td><?= $data['data_date']  ?></td>
                        <td><?= $data['luminosity']  ?> Lux</td>
                        <td><?= $data['temperature']  ?> °C</td>
                        <td><?= $data['pression']  ?> hPa</td>
                        <td><?= $data['floor_humidity']  ?></td>
                        <td><?= $data['air_humidity']  ?> %</td>
                    </tr>
            <?php
            } ?>

        </table>


</body>
</html>