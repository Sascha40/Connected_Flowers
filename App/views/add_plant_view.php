<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './views/includes/head.php' ?>
</head>
<body>

    <!-- === HEADER === -->

        <?php include_once './views/includes/header.php' ?>
    
    <!-- === CONTENTS HOME PAGE === -->

    <h2 id="add_plant_title">Nouvelle Plante</h2>
    <div id="contain_add_plant">
        
        <div id="contain_add_plant_image">
            <img src="./assets/images/add_plant.png" />
        </div>

        <form action="add_plant" id="form_add_plant" method="post">
            <?php
                if(isset($verification) && !empty($verification)){
                    echo($verification);
                }
            
            ?>
            <input name="name" placeholder="Nom de la plante" type="text" />
            <input name="category" placeholder="Catégorie de la plante" type="text" />
            <input name="flowering" placeholder="Période de floraison" type="text" />
            <input name="picture" placeholder="Image type URL" type="text" />
            <textarea name="description" placeholder="Description de la plante" type="text"></textarea>
            <button type="submit" id="add_plant_button">Ajouter</button>
        </form>

    </div>
    

</body>
</html>