<?php
class UsuarioController{
    public function mostrarTodos(){
        require '../modelo/Usuario.php';
        $usuario=new Usuario();
        $usuario->conseguirTodos();
    }
    public function crearUsuario(){
        
    }
}