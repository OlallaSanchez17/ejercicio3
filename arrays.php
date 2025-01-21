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
        //Ejercicio 1
        echo "<b>Ejercicio 1 </b><br>";

        $persona1 = array("Nombre" => "Sara", "Apellido" => "Martinez","Edad" => 23, "Ciudad" => "Barcelona");
        $counter=1;
        foreach($persona1 as $value){
            echo "dato " . $counter . "º:" . $value . "<br>";
            $counter++;
        }


        //Ejercicio 2
        echo "<br><b>Ejercicio 2 </b><br>";

        foreach($persona1 as $key => $value){
            echo $key. ": " .$value ."<br>";
        }


        //Ejercicio 3

        echo "<br><b>Ejercicio 3 </b><br>";
        $person["edad"]=24;
        $counter=1;
        foreach($persona1 as $value){
            echo "dato " . $counter . "º: ". $value . "<br>";
            $counter++;
        }

        //Ejercicio 4
        echo "<br><b>Ejercicio 4 </b><br>";

        unset($persona1["ciudad"]);
        var_dump(value: $persona1);



        //Ejercicio 5

        echo "<br><br><b>Ejercicio 5 </b><br>";

        $letters = "a,b,c,d,e,f";
        $lettersAr = explode( ",", string: $letters); 
        $counter = 1; 
        
        foreach ($lettersAr as $value) {
            echo "letters " . $counter . "º: " . $value . "<br>";
            $counter++; 
        }

        
        //Ejercicio 6
        
        echo "<b><br><br>Ejercicio 6 </b>";
        
        echo "<br>Notas de los estudiantes ";
        $letters = "Marca, Isabel, Luis, Miguel, Aitor, Pepe";
        $lettersAr = explode( ",", string: $letters); 
        $counter = 10; 
        foreach ($lettersAr as $value) {
            echo $counter. ": " . $value . " ";
            $counter--; 
        }


        

    ?>
</body>
</html>