
<?php
    require_once('./config.php');

    class Conexion{
        private $fuente = $config["fuente"];
        private $usuario = $config["usuario"];
        private $contraseña = $config["contraseña"];
        private $db;
        
        public function Conectar(){
            try{

                $this-> db= new PDO($this->fuente, $this->usuario , $this-> contraseña);
            
            }catch(PDOException $e){

                echo $e ;
            }
        }
        public function Select($query){
            $sql_select=$query;

            try {    
                $st= $this -> $db->prepare($sql_select);
                $st->setFetchMode(PDO::FETCH_ASSOC);
                $st->execute();
                $datos = $st->fetchAll();
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" herf="style_conexion.css">
</head>
<body>
    <table border="2">

<?php

    $cabecera= $datos[0];
    foreach($cabecera as $clave => $valor){
        if($datos == 'nombre'){
            continue;
        }
        echo "<th>".$clave."</th>";
    }
        


    foreach($datos as $dato){
        echo"<tr>";
    
        foreach($dato as  $clave=>$valor){
        echo "<td>".$valor."</td>";
     };

     echo '<td><a href="actualizar.php?data=' . '&id=' . $nombre . '"><button>Actualizar</button></a>
     <a href="borrar.php?id=' . $nombre . '"><button>Borrar</button></a></td>';
         
        
    
    }

?>
<form>
    <button type="submit">Enviar</button>
</form>
</table>
</body>
</html>