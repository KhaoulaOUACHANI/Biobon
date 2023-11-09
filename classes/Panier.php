<?php
if(!isset($_SESSION)){
            session_start();
        }
class Panier{
    public function __construct(){
        
    
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
}
}