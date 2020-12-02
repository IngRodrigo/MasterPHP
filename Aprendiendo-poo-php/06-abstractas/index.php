<?php

class Ordenador{
    public $encendido;
    
    public function encender(){
        $this->encendido=true;
    }
    
   public function apagar(){
       $this->encendido=false;
   }
}
