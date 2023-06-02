<?php
class Conexion {
    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $basedatos = "registro";
    private $con;

    public function Conectar() {
        $this->con = new mysqli($this->servidor, $this->usuario, $this->pass, $this->basedatos);
        if ($this->con->connect_error) {
            die("No hay conexión al servidor: " . $this->con->connect_error);
        }
    }

    public function InsertarPersona($persona) {
        $this->Conectar();

        try {
            $sql = "INSERT INTO datos (nombre, apellido, nombre_acudiente, apellido_acudiente, parentesco, telefono) VALUES ('" . $persona->nombre . "' , '" . $persona->apellido . "','" . $persona->nombreacudiente . "' , '" . $persona->apellidoacudiente . "', '" . $persona->parentesco . "', '" . $persona->numero . "')";

            if ($this->con->query($sql) === TRUE) {
                echo "Registro insertado correctamente";
            } else {
                echo "Error al insertar registro: " . $this->con->error;
            }
        } catch (mysqli_sql_exception $e) {
            echo "Excepción capturada: " . $e->getMessage();
        }

        $this->con->close();
    }
}
?>
