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
function choose_numbers(){
    $max_value = readline("Ingrese valor máximo:");
    $bool = readline("Ingrese un valor booleano (true para numeros pares, false para impares):");/* 
    if($bool != "true" xor $bool != "false"){
        return("valor introducido erróneo");
    } */
    $i = 0;
    if($bool == "false"){
        $i++;
    }
    for($i; $i<=$max_value; $i++){
        echo(($i) . " ");
        $i++;
    }
}
echo(choose_numbers());





?>
