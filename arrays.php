<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // El código está diseñado como una serie de ejercicios independientes, cada uno ilustrando un concepto de PHP.
        // Los ejercicios se estructuran de manera incremental, presentando arrays, manipulación de datos y bucles.

        // Ejercicio 1: Recorremos un array asociativo y mostramos sus valores en orden numérico.
        echo "<b>Ejercicio 1 </b><br>";
        $persona1 = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");
        $counter = 1;
        foreach ($persona1 as $value) {
            echo "dato " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        // Ejercicio 2: Iteramos sobre un array asociativo para mostrar las claves junto a sus valores.
        echo "<br><b>Ejercicio 2 </b><br>";
        foreach ($persona1 as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }

        // Ejercicio 3: Actualizamos un valor en el array y lo volvemos a mostrar.
        echo "<br><b>Ejercicio 3 </b><br>";
        $persona1["Edad"] = 24;
        $counter = 1;
        foreach ($persona1 as $value) {
            echo "dato " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        // Ejercicio 4: Eliminamos un elemento del array y mostramos la estructura resultante usando var_dump.
        echo "<br><b>Ejercicio 4 </b><br>";
        unset($persona1["Ciudad"]);
        var_dump($persona1);

        // Ejercicio 5: Demostramos la conversión de una cadena en un array y la iteramos para mostrar sus elementos.
        echo "<br><br><b>Ejercicio 5 </b><br>";
        $letters = "a,b,c,d,e,f"; 
        $lettersAr = explode(",", $letters);
        $counter = 1;
        foreach ($lettersAr as $value) {
            echo "letters " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        // Ejercicio 6: Trabajamos con un array de nombres, asignándoles valores decrecientes de un contador.
        echo "<b><br><br>Ejercicio 6 </b>";
        echo "<br>Notas de los estudiantes ";
        $students = "Marca, Isabel, Luis, Miguel, Aitor, Pepe"; 
        $studentsAr = explode(",", $students); 
        $counter = 10;
        foreach ($studentsAr as $value) {
            echo $counter . ": " . $value . " ";
            $counter--;
        }

        // Ejercicio 7: Calculamos la media de las notas de los estudiantes y mostramos aquellos que están por encima de la media.
        echo "<b><br><br>Ejercicio 7 </b><br>";
        $estudiantes = array("Marca" => 8, "Isabel" => 5, "Luis" => 6, "Miguel" => 7, "Aitor" => 9, "Pepe" => 4);
        $media = 0;
        foreach ($estudiantes as $nota) {
            $media += $nota;
        }
        $media = ($media / count($estudiantes));
        $media = round($media, 2);
        echo "Media de las notas: {$media}<br>";
        echo "Alumnos por encima de la media: <br>";
        foreach ($estudiantes as $alumno => $nota) {
            if ($nota > $media) {
                echo "{$alumno}<br>";
            }
        }

        // Ejercicio 8: Identificamos al mejor alumno según su nota, recorriendo el array para encontrar la nota máxima.
        echo "<b><br><br>Ejercicio 8 </b><br>";
        $mejor_alumno = "";
        $nota_maxima = -1;
        foreach ($estudiantes as $alumno => $nota) {
            if ($nota > $nota_maxima) {
                $nota_maxima = $nota;
                $mejor_alumno = $alumno;
            }
        }
        echo "El mejor alumno es: {$mejor_alumno} con una nota de: {$nota_maxima}";

    ?>
</body>
</html>
