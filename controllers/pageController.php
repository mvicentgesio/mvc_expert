<?php
class PageController{

    public function home(){

        $nombre = "Mario";

        return Render::view('home', compact('nombre'));
    }
    
    public function listar(){
        echo 'estoy listar';
    }
    
    public function modificar(){
        echo 'estoy modificar';
    }

    public function nuevo(){
        echo 'estoy nuevo';
    }
}