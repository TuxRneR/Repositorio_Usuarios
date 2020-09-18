<?php

class Datos {
    protected $nombers, $apellidos; #snake_case
    protected $conn;

    function __construct(string $nombres = '', $apellidos = ''){
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;


        try{

            $this->conn = new PDO(
                'mysql:host=localhost;dbname=test',
                'root',
                ''
            );
  
          }catch(Exception $e){
              echo "La cagastes: ".$e->getMessage(); 
        }
    }

    function printDatos(string $rName = 'Sin nombre', $rApellidos = 'Sin apellidos'):void{
        echo 'Hola <b><span style="color: red;">' .$rName. ' ' .$rApellidos. '</span></b>';
    }
    
    function Validacion():void 
    {
        #Validación del método
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if( isset( $_POST['nombre'] ) && isset($_POST['apellidos']) )
            {                
                $this->insertar($_POST['nombre'],$_POST['apellidos']);
                $this->mostrar();
            }
        }
    }

    public function insertar( string $nombre,string $apellido){
        
        # insertar

        try{
            $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre,apellido) VALUES (:nombre, :apellido)");

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            
            $stmt->execute();
            echo "Lo insertastes <br>";
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }

    public function mostrar():void{
        try{


            // FETCH_OBJ
            $stmt = $this->conn->prepare("SELECT id,nombre,apellido FROM usuarios");
            // Ejecutamos
            $stmt->execute();


            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                echo "ID: " . $row->id . "<br>";
                echo "Nombre: " . $row->nombre . "<br>";
                echo "Apellido: " . $row->apellido . "<br>";
            }
  
  
          }catch(Exception $e){
              echo "La cagastes: ".$e->getMessage(); 
          }
    }

}
