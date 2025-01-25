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
        echo "<b>Ejercicio 1 </b><br>";

        $persona1 = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");
        $counter = 1;
        foreach ($persona1 as $value) {
            echo "dato " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        echo "<br><b>Ejercicio 2 </b><br>";
        foreach ($persona1 as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }

        echo "<br><b>Ejercicio 3 </b><br>";
        $persona1["Edad"] = 24; // Actualizamos la edad de la persona
        $counter = 1;
        foreach ($persona1 as $value) {
            echo "dato " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        echo "<br><b>Ejercicio 4 </b><br>";
        unset($persona1["Ciudad"]); // Eliminamos el elemento "Ciudad"
        var_dump($persona1); // Mostramos el array después de la eliminación

        echo "<br><br><b>Ejercicio 5 </b><br>";

        $letters = "a,b,c,d,e,f"; 
        $lettersAr = explode(",", $letters); // Convertimos la cadena en un array
        $counter = 1;
        foreach ($lettersAr as $value) {
            echo "letters " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        echo "<b><br><br>Ejercicio 6 </b>";

        echo "<br>Notas de los estudiantes ";
        $students = "Marca, Isabel, Luis, Miguel, Aitor, Pepe"; 
        $studentsAr = explode(",", $students); 
        $counter = 10;
        foreach ($studentsAr as $value) {
            echo $counter . ": " . $value . " ";
            $counter--; // Reducimos el contador en cada iteración
        }

        echo "<b><br><br>Ejercicio 7 </b><br>";
        
        $estudiantes = array("Marca" => 8, "Isabel" => 5, "Luis" => 6, "Miguel" => 7, "Aitor" => 9, "Pepe" => 4);
        $media = 0;
        foreach ($estudiantes as $nota) {
            $media += $nota;
        }

        $media = ($media / count($estudiantes)); // Calculamos la media
        $media = round($media, 2);
        echo "Media de las notas: {$media}<br>";
        echo "Alumnos por encima de la media: <br>";

        // Mostramos los alumnos cuya nota es superior a la media
        foreach ($estudiantes as $alumno => $nota) {
            if ($nota > $media) {
                echo "{$alumno}<br>";
            }
        }

        echo "<b><br><br>Ejercicio 8 </b><br>";
        
        $mejor_alumno = "";
        $nota_maxima = -1;
        foreach ($estudiantes as $alumno => $nota) {
            // Comprobamos si la nota del alumno actual es la más alta
            if ($nota > $nota_maxima) {
                $nota_maxima = $nota;
                $mejor_alumno = $alumno;
            }
        }

        // Mostramos el nombre y la nota del mejor alumno
        echo "El mejor alumno es: {$mejor_alumno} con una nota de: {$nota_maxima}";

    ?>
</body>
</html>
