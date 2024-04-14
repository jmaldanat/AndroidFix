<?php

// Array de productos
$productos = array(
    array(
        'imagen' => 'https://media.entertainmentearth.com/assets/images/42247c305b4143edaf91c30eadb2a742md.jpg',
        'nombre' => 'Harry Potter with Hedwig 18-Inch Funko Pop! Vinyl Figure #03',
        'precio' => '$539,079',
        'codigo' => '88207',
        'grupo' => 'E',
        'enlace' => 'https://api.whatsapp.com/message/XHKLEUNZWXQOH1?autoload=1&app_absent=0'
    ),
    array(
        'imagen' => 'https://media.entertainmentearth.com/assets/images/f862006981f64ebd97ef07b93cdb5a2bmd.jpg',
        'nombre' => 'Guardians of the Galaxy Dancing Groot 18-Inch Funko Pop! Vinyl Figure #01',
        'precio' => '$539,079',
        'codigo' => '91406',
        'grupo' => 'E',
        'enlace' => 'https://api.whatsapp.com/message/XHKLEUNZWXQOH1?autoload=1&app_absent=0'
    ),
    array(
        'imagen' => 'https://media.entertainmentearth.com/assets/images/2a5afc1080214ca780ee4a3b35fcc713md.jpg',
        'nombre' => 'Pokemon Pikachu 18-Inch Funko Pop! Vinyl Figure #01',
        'precio' => '$539,079',
        'codigo' => '88191',
        'grupo' => 'E',
        'enlace' => 'https://api.whatsapp.com/message/XHKLEUNZWXQOH1?autoload=1&app_absent=0'
    )
);

// Obtener el número de página y elementos por página de la solicitud GET
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$itemsPerPage = isset($_GET['itemsPerPage']) ? intval($_GET['itemsPerPage']) : 8;

// Calcular el índice de inicio y final de los productos para la página actual
$startIndex = ($page - 1) * $itemsPerPage;
$endIndex = min($startIndex + $itemsPerPage - 1, count($productos) - 1);

// Array de productos para la página actual
$productosPagina = array_slice($productos, $startIndex, $endIndex - $startIndex + 1);

// Generar el HTML de los productos para la página actual
$htmlProductos = '';
foreach ($productosPagina as $producto) {
    $htmlProductos .= '<div class="product">';
    $htmlProductos .= '<img src="' . $producto['imagen'] . '" alt="Producto">';
    $htmlProductos .= '<h2>' . $producto['nombre'] . '</h2>';
    $htmlProductos .= '<p class="price">' . $producto['precio'] . '</p>';
    $htmlProductos .= '<p>Código: ' . $producto['codigo'] . '</p>';
    $htmlProductos .= '<p>Grupo: ' . $producto['grupo'] . '</p>';
    $htmlProductos .= '<a href="' . $producto['enlace'] . '" target="_blank">Comprar</a>';
    $htmlProductos .= '</div>';
}

// Devolver los productos en formato HTML
echo $htmlProductos;

?>
