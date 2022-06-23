<?php

//ej. 1
/* $suma = 2 + 3;
$resta = 3 - 2;
echo("El resultado de la suma és: $suma \nEl resultado de la resta és: $resta");
 */
//ej. 2
/* $array = [1,2,3,"azul",231];
echo("\n$array[3]\n");
 */
//ej. 3
/* $array = [1,2,[2,2,2],[4,3,[10,2]],5];
echo($array[3][2][0]);
 */
//ej. 4
/* echo("\n");
$i = 1;
for($i; $i<10; $i++){
    echo("$i,");
}echo("$i\n");
 */
//ej. 5
/* $i = 1;
$total = 0;
for($i; $i<=10; $i++){
    $total += $i;
}echo("$total\n");
 */
//ej. 6
/* $x = 10;
for($i=1; $i<$x; $i++){
    echo(rand(0,100) . ",");
}echo(rand(0,100) . "\n"); */

//ej. 7
    //a
/* function print_numbers(){
    $total = 0;
    for($i = 0; $i<=10; $i++){
    $total += $i;
    }return("$total\n");
}
echo(print_numbers()); */
    //b
/* function print_random(){
    $x = 10;
    for($i=1; $i<$x; $i++){
        echo(rand(0,100) . ",");
    }echo(rand(0,100) . "\n");
}
print_random(); */

//ej. 8
/* function print_random_values(){
    $numOfValues = 20;
    $maxValue = 1000;
    for($i=1; $i<$numOfValues; $i++){
        echo(rand(0,$maxValue) . ",");
    }echo(rand(0,$maxValue) . "\n");
}
print_random_values(); */

//ej. 9
/* function even_numbers(){
    $max_value = readline("Ingrese valor máximo:");
    for($i=0; $i<$max_value; $i++){
        if($i%2 == 0){
            echo(($i) . " ");
        }
    }if($i%2 == 0){
        echo($i);
    }
}
echo(even_numbers() . "\n"); */

//ej. 10
/* function odd_numbers(){
    $max_value = readline("Ingrese valor máximo:");
    for($i=0; $i<$max_value; $i++){
        if($i%2 != 0){
            echo(($i) . " ");
        }
    }if($i%2 != 0){
        echo($i);
    }
}
echo(odd_numbers() . "\n"); */

//ej. 11
/* function choose_numbers(){
    $max_value = readline("Ingrese valor máximo:");
    $bool = readline("Ingrese un valor booleano (true para numeros pares, false para impares):");
    //if($bool != "true" xor $bool != "false"){
    //    return("valor introducido erróneo");
    $i = 0;
    if($bool == "false"){
        $i++;
    }
    for($i; $i<=$max_value; $i++){
        echo(($i) . " ");
        $i++;
    }
}
echo(choose_numbers()); */

//ej. 12 Contraseña mínimo 8 caracteres, una mayúscula y un número.

/* function checkLength($password){
    if(strlen($password) >= 8){
        return true;
    }else{
        return false;
    }
}

function checkUpper($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    return false;
}

function checkNumber($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            return true;
        }
    }
    return false;
}

function passwordCheck($password){
    $length = checkLength($password);
    $upper = checkUpper($password);
    $number = checkNumber($password);
    if ($length && $upper && $number){
        return true;
    }else{
        return false;
    };
}

$bandera = false;

do{
    $password = readline("Ingrese contraseña: ");
    $check = passwordCheck($password);
    if($check){
    echo "Contraseña correcta \n";
    $bandera = true;
    }else{
    echo "Contraseña incorrecta \n";
    }
} while ($bandera == false); */


//ej. 13
/* function comprar($cartera,$productos){
    $miCesta=[];
    foreach ($productos as $producto => $precio){
        if($cartera - $precio >= 0){
        $miCesta[]= $producto;
        $cartera = $cartera - $precio;
        print_r("has comprado ".$producto." Te quedan ".$cartera." euros\n");
        }
    }
    return $miCesta;
}

$cartera = 7;
$productos = ["pan"=>2,"papas"=>1,"cocacola"=>3,"agua"=>2];

print_r(comprar($cartera,$productos)); */

//ej. 14
/* function comprar($cartera, $productos){
    natsort($productos);
    $miCesta = [];
    foreach ($productos as $producto => $precio){
        if ($cartera - $precio >= 0){
        array_push($miCesta, $producto);
        $cartera = $cartera - $precio;
        print_r("has comprado " . $producto . " Te quedan " . $cartera . " euros\n");
        }
    }
    return $miCesta;
}

$cartera =7;
$productos = ["pan"=>2,"papas"=>1,"cocacola"=>3,"agua"=>2];
print_r(comprar($cartera,$productos)); */

//! PHP OOP

//ej. 1
/* class Persona{
    public $nombre;
    public $apellido;
    public $edad;

    function __construct($nombre, $apellido, $edad){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
    }
}

$Persona1 = new Persona("Julia","Agosta",34);
$Persona2 = new Persona("Mario","Bros",45);

echo $Persona1 -> nombre . ", " . $Persona1-> apellido . ", " . $Persona1 -> edad . "\n";
echo $Persona2 -> nombre . ", " . $Persona2-> apellido . ", " . $Persona2 -> edad . "\n";
 */

//ej. 2
/* class Persona{
    private $nombre;
    private $apellido;
    private $edad;

    function __construct($nombre, $apellido, $edad){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
    }

    function __toString(){
        return "Nombre: $this->nombre, Apellido: $this->apellido, Edad: $this->edad \n";
    }
}

$Persona1 = new Persona("Julia","Agosta",34);
$Persona2 = new Persona("Mario","Bros",45);

echo $Persona1 -> __toString();
echo $Persona2 -> __toString(); */

//ej. 3
/* class Persona{
    private $nombre;
    private $apellido;
    private $edad;

    function __construct($nombre, $apellido, $edad){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
    }

    public function saludar(){
        return "Hola $this->nombre, me tengo que ir. \n";
    }
}

$Persona1 = new Persona("Julia","Agosta",34);
$Persona2 = new Persona("Mario","Bros",45);

echo $Persona1 -> saludar();
echo $Persona2 -> saludar(); */

//ej. 4
/* class Persona{
    public $nombre;
    public $apellido;
    public $dni;

    function __construct($nombre, $apellido, $dni){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
    }

    function saluda(){
        return "Hola soy $this->nombre $this->apellido."; 
    }

}

class Estudiante extends Persona{

    function __construct($asignaturas,$totalNotas,$nombre,$apellido,$dni){
        parent::__construct($nombre,$apellido,$dni);
        $this -> asignaturas = $asignaturas;
        $this -> totalNotas = $totalNotas;
        }
}

class Profesor extends Persona{

    function __construct($clases,$horasSemanales,$nombre,$apellido,$dni){
        parent::__construct($nombre,$apellido,$dni);
        $this -> clases = $clases;
        $this -> horasSemanales = $horasSemanales;
        }
}

$Estudiante1 = new Estudiante(["Ciencias","Matemáticas","Filosofía"],56,"Andrés","Tomás","2364572364Q");

print_r($Estudiante1);
echo $Estudiante1->saluda(); */

//ej. 5
/* class Persona{
    public $nombre;
    protected $apellido;
    protected $dni;

    function __construct($nombre, $apellido, $dni){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
    }

    function saluda(){
        return "Hola soy $this->nombre $this->apellido. \n"; 
    }

}

class Estudiante extends Persona{

    function __construct($asignaturas,$totalNotas,$nombre,$apellido,$dni){
        parent::__construct($nombre,$apellido,$dni);
        $this -> asignaturas = $asignaturas;
        $this -> totalNotas = $totalNotas;
    }
    
    function __toString(){
        return "El alumno $this->nombre $this->apellido, con DNI $this->dni tiene un total de notas de $this->totalNotas.";
    }
}

class Profesor extends Persona{

    function __construct($clases,$horasSemanales,$nombre,$apellido,$dni){
        parent::__construct($nombre,$apellido,$dni);
        $this -> clases = $clases;
        $this -> horasSemanales = $horasSemanales;
        }
}

$Estudiante1 = new Estudiante(["Ciencias","Matemáticas","Filosofía"],56,"Andrés","Tomás","2364572364Q");

print_r($Estudiante1);
echo $Estudiante1->__toString(); */

//ej. 6
/* class Persona{
    function saluda(){
        return "Hola soy soy el padre. \n"; 
    }
}

class Estudiante extends Persona{
    function saluda(){
        return "Hola soy el hijo. \n"; 
    }
}

$Persona1 = new Persona;
$Estudiante1 = new Estudiante;

echo $Persona1->saluda();
echo $Estudiante1->saluda(); */

//ej. 7
/* class Persona{
    final function comer(){
        return "Pizza";
    }
}

//class Estudiante extends Persona{
//    function comer(){
//        return "Ensalada";
//    }
//}

$Persona1 = new Persona;

echo $Persona1->comer(); */

//ej. 8
//No tiene sentido hacerlo si podemnois crear una clase alumno o profesor en la cual podemos introducir todos los valores que incluye clase persona.

//ej. 9
/* class Contador{
    static $contador = 0;
    static function veces(){
        Contador::$contador++;
    }
}

class Persona{
    public $nombre;
    public $apellido;
    public $dni;

    function __construct($nombre, $apellido, $dni){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
        Contador::veces();
    }
}

$Personas = [];

for ($i=0; $i < 10; $i++){
    $Personas[] = new Persona("Persona num $i","Apellido num $i", "DNI " . rand(10000000,100000000));
}

print_r ($Personas);
echo Contador::$contador . "\n"; */



?>
