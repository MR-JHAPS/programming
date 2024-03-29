
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js" ></script>
    <link href="../assets/css/index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table border="5" style ="border-color:pink">
    <?php


        // Suponiendo que $cabecera contiene las claves de los datos
        $cabecera = $datos[0];
        echo "<tr>";
        foreach($cabecera as $clave => $valor){
            // Si la clave no es "Nombre", imprime la etiqueta <th>
            if ($clave !== 'id') {
                echo "<th>".$clave."</th>";
            }
        }
        echo "<th>Acciones</th>";
        echo "</tr>";

        foreach($datos as $dato){
            echo"<tr>";
            $id ="";
            foreach($dato as $clave=>$valor){
                if($clave != 'id'){
                    echo"<td>".$valor."</td>";
                    
                }else{
                    $id = $valor;
                }
            }
            echo '  <td>
                        <a href="/update?id='.$id. '">
                            <button>Actualizar</button>
                        </a>
                        <a href="borrar.php?id=' .$id. '">
                            <button>Borrar</button>
                        </a>
                    </td>';
               
        }     

    ?>
    </table>
</body>
</html>