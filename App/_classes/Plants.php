<?php

class Plants{

    // Function to recup plants list
    public static function getPlants(){
        global $db;

        $req = $db->fetch('SELECT id,name,category,description,flowering,image FROM plants ORDER BY name',[],true);

        return $req;
    }

    // Function to recup just one plant
    public static function getPlant($id){
        global $db;

        $req = $db->fetch('SELECT id,name,category,description,flowering,image FROM plants WHERE id=?',[$id],false);

        return $req;
    }

    // Function to delete one plant by ID on plants table
    public static function deletePlant($idPlant){
        global $db;

        $idPlant = htmlspecialchars($idPlant);
        $req = $db->execute('DELETE FROM plants WHERE id=?',[$idPlant]);

        return $req;
    }

    // Function to delete one plant by ID on plants_select table
    public static function deletePlantSelect($idPlantSelect){
        global $db;

        $idPlantSelect = htmlspecialchars($idPlantSelect);
        $req = $db->execute('DELETE FROM plants_select WHERE id=?',[$idPlantSelect]);

        return $req;
    }

    // Function to add Plant into plants table by a form
    public static function addPlant($name,$category,$description,$flowering,$image){
        global $db;

        $name = htmlspecialchars($name);
        $category = htmlspecialchars($category);
        $description = htmlspecialchars($description);
        $flowering = htmlspecialchars($flowering);
        $image = htmlspecialchars($image);

        $req = $db->execute('INSERT INTO plants(name,category,description,flowering,image) VALUES(?,?,?,?,?)',[$name,$category,$description,$flowering,$image]);

        return $req;
    }

    // Function to add one plant on plants_select by id
    public static function addPlantSelect($id_plant){
        global $db;

        $req = $db->execute('INSERT INTO plants_select(id_plant,id_bool) VALUES(?,0)',[$id_plant]);

        return $req;
    }

    // Function to recup a list of plant select by id
    public static function getListPlantSelect(){
        global $db;

        $req = $db->fetch('SELECT (s.id) as select_plant,(p.id) as plant,name FROM plants p INNER JOIN plants_select s ON p.id = s.id_plant',[],true);

        return $req;
    }

    //Function to recup one plant select to show her data
    public static function getPlantSelect($id_plant){
        global $db;

        $req = $db->fetch('SELECT name FROM plants WHERE id=?',[$id_plant],false);

        return $req;
    }

    //Function to recup data with id of plant select
    public static function getData($id_plant_select){
        global $db;

        $req = $db->fetch('SELECT temperature,luminosity,pression,floor_humidity,air_humidity FROM data_sensor d INNER JOIN plants_select p on d.id_plant_select = ?',[$id_plant_select],false);

        return $req;
    }

    //Function to recup all data with id of plant select
    public static function getDatas($id_plant_select){
        global $db;

        $req = $db->fetch('SELECT temperature,luminosity,pression,floor_humidity,air_humidity FROM data_sensor d INNER JOIN plants_select p on d.id_plant_select = ?',[$id_plant_select],true);

        return $req;
    }

    //Function bool 1
    public static function boolTo1($id_plant_select){
        global $db;

        $req = $db->execute('UPDATE plants_select SET id_bool = 1 WHERE id = ?',[$id_plant_select]);

        return $req;
    }

    //Function bool 0
    public static function boolTo0($id_plant_select){
        global $db;

        $req = $db->execute('UPDATE plants_select SET id_bool = 0 WHERE id <> ?',[$id_plant_select]);

        return $req;
    }

}