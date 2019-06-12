<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './views/includes/head.php' ?>
</head>
<body>

    <!-- === HEADER === -->

        <?php include_once './views/includes/header.php' ?>
    
    <!-- === CONTENTS HOME PAGE === -->
    <h2 id="title_plants_select">Mes plantes</h2>

        <?php
        
            foreach($plants as $index => $plant){
                ?>
                    <div class="plant">
                        <h2><?= $plant['name'] ?></h2>
                        <a href="plants_select?delete=<?= $plant['select_plant'] ?>">Supprimer</a>
                        <a href="data?plant=<?= $plant['plant'] ?>&pselect=<?= $plant['select_plant'] ?>">Données</a>
                    </div>
            <?php
            }    
        ?>

</body>
</html>