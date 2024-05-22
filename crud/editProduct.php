<?php
    require_once '../clases/producto.php';
    $objProducto = new Producto;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_producto = $_POST['id_producto'];
        $nombre_Product = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['stock'];


        $product = $objProducto->actualizarPtoducto($nombre_Product, $precio, $cantidad, $id_producto);

        if ($product) {
            header("Location: ../productos/productos.php ");
        }
    }
    ?>