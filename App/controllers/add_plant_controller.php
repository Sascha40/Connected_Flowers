<?php

if(isset($_POST['name']) && isset($_POST['category']) && isset($_POST['description']) &&isset($_POST['flowering']) && isset($_POST['picture'])){

    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $flowering = $_POST['flowering'];
    $image = $_POST['picture'];

    if(!empty($name) && !empty($category) && !empty($description) && !empty($flowering) && !empty($image)){
        $addPlant = Plants::addPlant($name,$category,$description,$flowering,$image);
        
        if($addPlant){
            $verification = '<p style="color:#24b655;text-align:center;">Votre plante a bien été ajoutée !</p>';
        } else {
            
        }
    } else {
        $verification = '<p style="color:red;text-align:center;">Veuillez remplir tous les champs !</p>';
    }
} else {

}