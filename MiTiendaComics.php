<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Cómics</title>
</head>
<body>
    <?php
    $inventario = [
        'suspense_terror' => [
            ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
            ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
            ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
        ],
        'accion' => [
            ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
        ],
    ];

    // Main
    mostrarComicsEnTabla();
    mostrarValorAlmacen();
    aplicarDescuentoManga();
    echo '<h3>Inventario después del descuento:</h3>';
    mostrarComicsEnTabla();
    mostrarValorAlmacen();

    function mostrarComicsEnTabla()
    {
        global $inventario;
        echo '<table border="1">';
        echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

        foreach ($inventario as $categoria => $comics) {
            foreach ($comics as $comic) {
                echo '<tr>';
                echo "<td>$categoria</td>";
                echo "<td>{$comic['titulo']}</td>";
                echo "<td>{$comic['editorial']}</td>";
                echo "<td>{$comic['autor']}</td>";
                echo "<td>{$comic['idioma']}</td>";
                echo "<td>{$comic['precio']}€</td>";
                echo "<td>{$comic['stock']}</td>";
                echo '</tr>';
            }
        }

        echo '</table><br>';
    }

    function mostrarValorAlmacen()
    {
        global $inventario;
        $valorTotal = 0;

        foreach ($inventario as $categoria => $comics) {
            foreach ($comics as $comic) {
                $valorTotal += $comic['precio'] * $comic['stock'];
            }
        }

        echo "<p>El valor total del inventario es: <b>{$valorTotal}€</b></p>";
    }

    function aplicarDescuentoManga()
    {
        global $inventario;

        foreach ($inventario['accion'] as &$comic) {
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] = round($comic['precio'] * 0.7, 2); // Aplicar descuento del 30%
            }
        }
    }
    ?>
</body>
</html>
