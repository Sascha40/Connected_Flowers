<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './views/includes/head.php' ?>
</head>
<body>

    <!-- === HEADER === -->

        <?php include_once './views/includes/header.php' ?>
    
    <!-- === CONTENTS HOME PAGE === -->

    <h2 id="title_plants_list">Liste des plantes</h2>
    <div id="contain_button">
        <a href="add_plant" id="add_plant">Ajouter une plante</a>
    </div>

    <?php  

        if(isset($deletedPlant)){
            echo $verifyDelete;
        }

        if(isset($verifyAdd)){
            echo($verifyAdd);
        }
    ?>

    <div id="contain_plants">
        <?php
        
            foreach($plants as $index => $plant){
                ?>
                    <div class="plant">
                        <h2><?= $plant['name'] ?></h2>
                        <p><?= $plant['category'] ?></p>
                        <a href="infos_plant?id=<?= $plant['id'] ?>">En savoir plus</a>
                        <a href="list_plants?id=<?= $plant['id'] ?>">Ajouter à ma liste</a>
                        <a href="list_plants?delete=<?= $plant['id']?>">Supprimer</a>
                    </div>
            <?php
            }    
        ?>
    </div>

</body>
</html>