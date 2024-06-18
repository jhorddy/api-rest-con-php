<?php 
header('Content-Type: application/json');

require_once ("../config/conexion.php"); 
require_once ("../models/Categoria.php"); 


$categoria = new Categoria(); 
$body = json_decode(file_get_contents("php://input"), true);


switch ($_GET["op"]){  

    /////METODO GET////////////////
case "GetAll":
$datos=$categoria->get_categoria(); 
echo json_encode($datos);
break; 
///////////////////////////////////

/////METODO POST////////////////
case "GetId": 
$datos=$categoria->get_categoria_x_id($body["cat_id"]); 
echo json_encode($datos);
break; 
/////////////////////////////////// 

/////METODO POST////////////////
case "insert": 
    $datos=$categoria->insert_categoria($body["cat_nom"], $body ["cat_obs"]); 
    echo json_encode("Datos insertados correctamente");
    break; 
    ///////////////////////////////////


    /////METODO POST////////////////
case "update": 
    $datos=$categoria->update_categoria($body["cat_id"], $body["cat_nom"], $body ["cat_obs"]); 
    echo json_encode("Datos actulizado correctamente");
    break; 
    ///////////////////////////////////
    
    }  


?>