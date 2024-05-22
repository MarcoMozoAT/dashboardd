<?php
require_once '../clases/producto.php';
$objProducto = new  Producto;
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    $eliminar = $objProducto->eliminarProducto($id_producto);
    if ($eliminar) {
        header('location: ../productos/productos.php');
    } else {
        echo "error";
        die();
    }
}
