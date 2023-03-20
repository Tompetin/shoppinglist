<?php
require_once 'inc/functiot.php';
require_once 'inc/headerit.php';

try{
    $db = openDb();
    $sql = "select * from item";
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    header('HTTP/1.1 200 OK');
    print json_encode($results);
} catch (PDOException $pdoex){
    returnError($pdoex);
}