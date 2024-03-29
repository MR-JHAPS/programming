<?php
use Modelo\User;

require_once('../Modelo/User.php');

class UserController{

    public function index()
    {

        $sql = "SELECT * FROM alumno ";
        $user = new User();
        $datos = $user->getAll($sql);
        require_once('../Vista/indexVista.php');

    }
    public function actualizar($id)
    {
       $sql = "SELECT * FROM alumno WHERE id = $id ";
       $user = new User(); 
       $datos = $user->getById($sql);
       require_once('../Vista/update_vista.php');
    }
    public function guardar($post)
    {
        
    }
}





?>