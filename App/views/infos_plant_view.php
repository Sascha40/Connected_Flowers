<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './views/includes/head.php' ?>
</head>
<body>

    <!--  ===HEADER=== -->
        <?php include_once './views/includes/header.php' ?>

    <!-- ===CONTENTS=== -->
    
        <h2 id="title_plant"><?= $plant['name'] ?></h2>
        <div id="contain_block">
            <div id="text_block">
                <p><span style="font-weight:bold;font-size:20px;">Catégorie :</span> <?= $plant['category'] ?></p>
                <p><span style="font-weight:bold;font-size:20px;">Période de floraison :</span> <?= $plant['flowering'] ?></p>
                <p style="font-weight:bold;font-size:20px;"> Description </p>
                <p><?= $plant['description'] ?></p>
            </div>
            <div id="contain_image">
                <img src="<?= $plant['image'] ?>" alt="image <?= $plant['name']?>"/>
            </div>
        </div>
    
</body>
</html>