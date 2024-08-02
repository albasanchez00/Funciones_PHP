<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
</head>
<body>
<?php
/*
 * PHP como todos los lenguajes tiene más de mil funciones integradas, pero tu puedes crear tus propias funciones.
*/

/*  Funcion Básica -> Identificador o nombre  */
    function saltar(){
        echo "<br>";
    }
    echo "Es una prueba";
    Saltar(); // OJO-> no recomendable!
    //sALRTAR(); // OJO-> no recomendable!
    echo "Después del salto??";


    /*  Función con pase de parámetros  */
    function saltarYescribir($texto){
        echo "<br>";
        echo $texto;
    }
    $linea=5;
    saltarYescribir("Es un nuevo texto ".$linea);


    /*   Practica   */
    /*   Crea dos funciones que al pasar por un texto,
         1. Devuelve en Minuscula => return
         2. Devuelve en Mayuscula  => return
    */
    function pasarMinuscula($texto){
        return strtolower($texto);
    }
    function pasarMayuscula($texto){
        return strtoupper($texto);
    }

    $mensaje="Es una prueba de las funciones en PHP";
    echo "<br>";
    echo "<br>";
    echo "Original -> ".$mensaje;
    saltarYescribir("Minúscula -> ".pasarMinuscula($mensaje));
    saltarYescribir("Mayúscula -> ".pasarMayuscula($mensaje));

    //En las funciones puedes enviar varios parámetros
    echo "<br>";
    function registro($nombre,$apellido,$telefono){
        echo "<br>";
        $registroAlumno=["Nombre"=>$nombre,"Apellido"=>$apellido,"Telefono"=>$telefono];
        return $registroAlumno;
    }
    saltar();
    /*
    $array= array(valores);
    $array=[valores];
    */
    $registroGeneral[]=registro("Francisco","Gonzalez","6524598922");
    print_r($registroGeneral);
    saltar();

    // array_push -> Inserta los valores que le pases al final del array.
    array_push($registroGeneral,registro("Alba","Sánchez","645781244"));

    // Otra forma de insertar al final de igual manera que el array_push.
    $registroGeneral[]=registro("Luisa","Diaz","625147833");
    print_r($registroGeneral);
    saltar();
    saltarYescribir("solo un alumno");
    saltar();
    print_r($registroGeneral[2]);
    echo "
        <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Teléfono</td>
        </tr>
    
    ";
    foreach ($registroGeneral as $indice => $valor) {
        echo "<tr><td>$indice</td>";
        foreach ($valor as $dato) {
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    saltar();
    function tabla4Col($textoCol1,$textoCol2,$textoCol3,$textoCol4,$array){
        echo "
        <table>
        <tr>
            <td>$textoCol1</td>
            <td>$textoCol2</td>
            <td>$textoCol3</td>
            <td>$textoCol4</td>
        </tr>
    
    ";
        foreach ($array as $indice => $valor) {
            echo "<tr><td>$indice</td>";
            foreach ($valor as $dato) {
                echo "<td>$dato</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    saltarYescribir("*****************************************");
    saltar();
    saltarYescribir("Tabla con funcion");
    tabla4Col("Id","Nombre","Apellido","Telefono",$registroGeneral);



    /*   Declaración de variables en el paso de parámetros   */
    function sumar($a=5,$b=8){
        return $a+$b;
    }
    saltarYescribir(sumar());
    saltarYescribir(sumar(null,8));
    saltarYescribir(sumar(10,8));
    saltar();

    function sumarVarios(){
        /* func_num_args() -> Devuelve la cantidad de elementos que pasamos a la función*/
        $total=0;
        for ($i = 0; $i < func_num_args(); $i++) {
            /* func_get_arg() -> Devuelve  cada elemento que hemos pasado a la función*/
            $total=func_get_arg($i);
        }
        return $total;
    }
    saltarYescribir(sumarVarios(4,5,6,1,6));
    saltarYescribir(sumarVarios());
    saltarYescribir(sumarVarios(58+74));
?>
</body>
</html>










<?php
