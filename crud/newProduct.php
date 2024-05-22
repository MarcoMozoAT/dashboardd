<?php
    require_once '../clases/producto.php';
    $objProducto = new Producto;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre_Product = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['stock'];


        $product = $objProducto->insertProducto($nombre_Product, $precio, $cantidad);

        if ($product) {
            header("Location: ../productos/productos.php ");
        }
    }
    ?>