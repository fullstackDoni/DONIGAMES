<?php

try {
    $connection = new PDO("mysql:host=localhost;dbname=session", "root", "");
} catch (Exception $e) {
    echo "<h4 style = 'color:red;'>" . $e->getMessage() . "</h4>";
}
function getAllGames(){
    global $connection;
    $query = $connection->prepare("
     SELECT g.id,g.name,g.developer_id,d.name as developer_name,d.izdatel
     FROM games g
     INNER JOIN developer d on d.id=g.developer_id");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function getAllDevelopers(){
    global $connection;
    $query = $connection->prepare("SELECT * FROM developer");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
function addGames($name, $developer_id){
    global $connection;
    $query = $connection->prepare("
    INSERT INTO games(id,name,developer_id)
    VALUES (NULL,:n,:d_id)");
    $query->execute(array("n" => $name, "d_id" => $developer_id));
}

function addDeveloper($name, $izdatel){
    global $connection;
    $query = $connection->prepare("
    INSERT INTO developer(id,name,izdatel)
      VALUES (NULL,:n,:iz)
      ");
    $query->execute(array("n" => $name, "iz" => $izdatel));
}

function getGames($id){
    global $connection;
    $query = $connection->prepare("
     SELECT g.id,g.name,g.developer_id,d.name as developer_name,d.izdatel
     FROM games g
     INNER JOIN developer d 
     ON d.id = g.id
     WHERE g.id = :id");
    $query->execute(array("id" => $id));
    $result = $query->fetch();
    return $result;
}

function deleteGames($id){
    global $connection;
    $query = $connection->prepare("
   DELETE FROM games WHERE id = :i");
    $query->execute(array("i" => $id));
}

function updategames($id, $name, $developer_name,$izdatel){
    global $connection;
    $query = $connection->prepare("
    UPDATE games SET  name=:n,developer_name = :d,izdatel = :iz  WHERE id=:i");
    $query->execute(array("n" => $name, "d" => $developer_name,"iz"=>$izdatel, "i" => $id));
}

function getUser($email){
    global $connection;
    $query = $connection->prepare("SELECT  * FROM users WHERE email = :email LIMIT 1");
    $query->execute(array("email" => $email));
    $result = $query->fetch();
    return $result;
}

function addUser($email, $password, $full_name){
    global $connection;
    $query = $connection->prepare("
    INSERT INTO users(id,email,password,full_name)
    VALUES(NULL,:email,:password,:full_name)
    ");
    $query->execute(array("email" => $email, "password" => $password, "full_name" => $full_name));
}

function getAllNews(){
    global $connection;
    $query = $connection->prepare("SELECT * FROM news");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
