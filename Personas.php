<?php
class Usuarios {
    public $nombre;
    public $apellido;
    public $nombreacudiente;
    public $apellidoacudiente;
    public $parentesco;
    public $numero;
    

    public function __construct($nombre, $apellido, $nombreacudiente, $apellidoacudiente,$parentesco,$numero) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nombreacudiente = $nombreacudiente;
        $this->apellidoacudiente = $apellidoacudiente;
        $this->parentesco = $parentesco;
        $this->numero = $numero;
    }
}
?>
