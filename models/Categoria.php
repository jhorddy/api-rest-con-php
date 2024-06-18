<?php
 class Categoria extends Conectar{  

/////METODO GET////////////////
public function get_categoria(){

   $conectar=parent::conexion();
   parent::set_name(); 
   $sql = "SELECT * FROM tm_categoria where est=1"; 
   $sql=$conectar->prepare ($sql); 
   $sql->execute();  

   return $resultado=$sql->fetchAll (PDO::FETCH_ASSOC);
 } 
 /////FIN////////////////


/////METODO POST////////////////
public function get_categoria_x_id($cat_id){

    $conectar=parent::conexion();
    parent::set_name(); 
    $sql = "SELECT * FROM tm_categoria where est=1 AND cat_id=?"; 
    $sql=$conectar->prepare ($sql);  
    $sql->bindValue(1, $cat_id);
    $sql->execute();  
 
    return $resultado=$sql->fetchAll (PDO::FETCH_ASSOC);
  } 
  /////FIN////////////////

/////METODO POST////////////////
public function insert_categoria($cat_nom,$cat_obs){

    $conectar=parent::conexion();
    parent::set_name(); 
    $sql = "INSERT INTO  tm_categoria (cat_id, cat_nom,cat_obs,est)Values(Null, ?,?,'1')"; 
    $sql=$conectar->prepare ($sql);  
    $sql->bindValue(1,$cat_nom);
    $sql->bindValue(2,$cat_obs);
    $sql->execute();  
 
    return $resultado=$sql->fetchAll (PDO::FETCH_ASSOC);
  } 
  /////FIN////////////////



/////METODO POST////////////////
public function update_categoria($cat_id,$cat_nom,$cat_obs){

    $conectar=parent::conexion();
    parent::set_name(); 
    $sql = "UPDATE  tm_categoria set cat_nom=?,cat_obs=? where cat_id=?"; 
    $sql=$conectar->prepare ($sql);  
    $sql->bindValue(1,$cat_nom);
    $sql->bindValue(2,$cat_obs);
    $sql->bindValue(3,$cat_id);
    $sql->execute();  
 
    return $resultado=$sql->fetchAll (PDO::FETCH_ASSOC);
  } 
  /////FIN////////////////




}
?>