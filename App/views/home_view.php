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
        
            if(isset($_GET['error']) && !empty($_GET['error']) && $_GET['error'] ==1){
                echo'<p style="text-align:center;color:red;font-size:18px;">Veuillez vous connecter pour accéder à vos informations</p>';
            } else{

            }
        
        ?>

        <div id="contain_home">
            <img src="./assets/images/trees.png" alt="logo arbre"/>
            <div id="home_text">
                <h2>L'application pour votre plante connectée</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam magnam aspernatur accusamus dolorum nobis assumenda
                    amet beatae omnis quas. Soluta reprehenderit autem optio, inventore
                    voluptate, saepe repudiandae veritatis velit ab aut tempora illum eos
                    praesentium vel, illo porro unde omnis. Assumenda voluptas, porro
                    deserunt ad fugit et non explicabo distinctio?
                </p>
            </div>
        </div>
</body>
</html>