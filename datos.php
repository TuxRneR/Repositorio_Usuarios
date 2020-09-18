<?php
class Persona {

    protected $nombre;
    protected $apellido;
    protected const NOVIAS = 1;
    
    
    function __construct(string $nombre = 'persona',$apellido = 'No tengo')
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;

        # this|self|static|parent
    }


    function hablar():void {
        print '<br> Esta ' .$this->nombre.' está hablando desde la clase padre. <br>';
    }

    function saludar(string $saludo = 'Sin Saludo'):void{
        print '<br> Saludando a: '. $saludo;  
    }

    # Método Mágico
    /* function __toString(){
        return '<br> esta instancia pertenece a '.$this->nombre;
    }*/
}


# Herencia

class Chepe extends Persona {

    const NOVIAS = 200;

    function __construct(){
        parent::__construct('Dany','De la palma');
    }


    function novias(){
        echo "Cuantas novias puede tener una persona: ".parent::NOVIAS ."<br>";
        echo '<br><br> ¿Cuantas novias tiene Chepe? = '.self::NOVIAS."<br>";
    }


    function hablar():void {
        //parent::hablar();
        print '<br>' .$this->nombre.' está hablando desde un metodo sobrescrito en la clase chepe <br>';
    }
}





$chepe = new Chepe();

$chepe->saludar("Fany");
$chepe->hablar();
