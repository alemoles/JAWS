<?php
include '../trozos/session.php';

seguridad("admin");
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


require_once '../clases/BD.php';

if (isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'test' :

            $data = array();
            $str = $_POST['item'];
            //$storable_string = serialize(json_decode($_POST['item']));
            $storable_string = serialize($_POST['item']);
            saveData($storable_string);
            $data['status'] = 'ok';
            $data['msg'] = 'perfect';
//
//            //database details
//            $dbHost = 'localhost';
//            $dbUsername = 'root';
//            $dbPassword = '';
//            $dbName = 'codexworld';
//
//            //create connection and select DB
//            $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//            if ($db->connect_error) {
//                die("Unable to connect database: " . $db->connect_error);
//            }
//
//            //get user data from the database
//            $query = $db->query("SELECT * FROM users WHERE id = {$_POST['user_id']}");
//
//            if ($query->num_rows > 0) {
//                $userData = $query->fetch_assoc();
//                $data['status'] = 'ok';
//                $data['result'] = $userData;
//            } else {
//                $data['status'] = 'err';
//                $data['result'] = '';
//            }

            //returns data as JSON format
            echo json_encode($data);
            //print_r($data);
            break;
        case 'blah' :
            blah();
            break;

    }
}


function saveData($storable_string)
{
    $bd = new BD();
    $sql = "INSERT INTO comments (comment) VALUES ('$storable_string')";
    $bd->setConsulta($sql);
    $bd->ejecutar();
}





//unserialize()
//$storable_string = serialize(json_decode($json_object);