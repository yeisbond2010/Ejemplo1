<?php
class Consultas{
    public function insertarusuario($arg_Nombre,$arg_Email){
        $modelo =new Conexion();
        $conexion=$modelo->get_conexion();
        $sql="insert into usuario (Nombre,Email) values(:Nom,:Email)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':Nom',$arg_Nombre);
        $statement->bindParam(':Email',$arg_Email);
        if(!$statement){
          return "Error No se guardaron los registros";
            }else{
				$statement->execute();
                return "Sus datos se han almacenado";
			}
	}
	//public function repetido($arg_buscar){
		//$rows=null;
		//$modelo=new Conexion();
		//$conexion=$modelo->get_conexion();
		 //$sql="selectt * from usuario where email=:busca";
		 //$statement = $conexion->prepare($sql);
		 //$statement->bindParam(':busca',$arg_buscar);
		 //$statement->execute();
		 //while($result=$statement->fetch()){
         //$rows[]=$result;
		 //foreach ($filas as $fila){
	//$dato=$fila['email'];
	//}
//}
//return $rows;
	//}
	
	
}
?>