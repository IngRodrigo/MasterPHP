<?php
class Persona{
    
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;
    
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    
    //metodos
    public function hablar() {
        return 'Estoy hablando';
    }
    public function caminar() {
        return 'Estoy caminando';
    }

}

//herencia
class Informatico extends Persona{
    
    public $lenguajes;
    
    public function sabeLenguajes($lenguajes) {
        $this->lenguajes=$lenguajes;
        return $lenguajes;
    }
    
    public function programar() {
        return 'Soy programador';
    }
    
    public function repararOrdenador() {
        return 'Reparo ordenadores';
    }
    public function hacerOffimatica() {
        return 'Trabajo con office';
    }
}