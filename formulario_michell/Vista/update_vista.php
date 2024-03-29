<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="/actualizar_usuario" method="POST">
    <input type = "hidden" name = "id" value = "<?php echo $datos["id"];?>">
    <label>Nombre</label>
    <input type="text" name= "nombre" value = "<?php echo $datos["nombre"];?>"  >
    <br>
    <br>
    <label>Apellido</label>
    <input type="text" name= "apellido" value = "<?php echo $datos["apellido"];?>"  >
    <br>
    <br>
    <label>Direccion</label>
    <input type="text" name= "direccion" value = "<?php echo $datos["direccion"];?>"  >
    <br>
    <br>
    <label>Telefono</label>
    <input type="text" name= "telefono" value = "<?php echo $datos["telefono"];?>" >
    <br>
    <br>
    <button>Actualizar</button>


</form>
</body>
</html>