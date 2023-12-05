<?php
class Persona {
    private static $persona;
    private $nombre = "Daniel";
    
    private function __construct() {
        
    }
    
    public static function getInstance() {
        if (!isset(self::$persona)) {
            self::$persona = new self;
        }
        return self::$persona;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
?>