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
        // Ejercicio 1
        echo "<b>Ejercicio 1 </b><br>";

        $persona1 = array("Nombre" => "Sara", "Apellido" => "Martinez", "Edad" => 23, "Ciudad" => "Barcelona");
        $counter = 1;
        foreach ($persona1 as $value) {
            echo "dato " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        // Ejercicio 2
        echo "<br><b>Ejercicio 2 </b><br>";

        foreach ($persona1 as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }

        // Ejercicio 3
        echo "<br><b>Ejercicio 3 </b><br>";
        $persona1["Edad"] = 24; 
        $counter = 1;
        foreach ($persona1 as $value) {
            echo "dato " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        // Ejercicio 4
        echo "<br><b>Ejercicio 4 </b><br>";

        unset($persona1["Ciudad"]);
        var_dump($persona1);

        // Ejercicio 5
        echo "<br><br><b>Ejercicio 5 </b><br>";

        $letters = "a,b,c,d,e,f";
        $lettersAr = explode(",", $letters);
        $counter = 1;

        foreach ($lettersAr as $value) {
            echo "letters " . $counter . "º: " . $value . "<br>";
            $counter++;
        }

        // Ejercicio 6
        echo "<b><br><br>Ejercicio 6 </b>";

        echo "<br>Notas de los estudiantes ";
        $students = "Marca, Isabel, Luis, Miguel, Aitor, Pepe";
        $studentsAr = explode(",", $students); 
        $counter = 10;
        foreach ($studentsAr as $value) {
            echo $counter . ": " . $value . " ";
            $counter--;
        }

        // Ejercicio 7
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

        // Ejercicio 8
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
