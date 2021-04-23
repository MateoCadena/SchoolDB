<?php
require_once 'model/profesor.php';

class ProfesorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Profesor();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/profesor/profesor.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $almp = new Profesor();
        
        if(isset($_REQUEST['id'])){
            $almp = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/profesor/profesor-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $almp = new Profesor();
        
        $almp->id = $_REQUEST['id'];
        $almp->Nombre = $_REQUEST['Nombre'];
        $almp->Apellido = $_REQUEST['Apellido'];
        $almp->Correo = $_REQUEST['Correo'];
        $almp->Sexo = $_REQUEST['Sexo'];
        $almp->Licenciatura = $_REQUEST['licenciatura'];
        $almp->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $almp->id > 0 
            ? $this->model->Actualizar($almp)
            : $this->model->Registrar($almp);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}