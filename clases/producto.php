<?php
require_once 'bd.php';

class Producto
{
    private $bd;

    public function __construct()
    {
        $this->bd = new DataBase();
    }

    
    public function verProductos()
    {
        $conexion = $this->bd->getConexion();
        $consulta = "SELECT * FROM tb_producto where id_status= 1";
        $result = $conexion->query($consulta);
        
        if ($result->num_rows > 0) {
            $docentes  = array();
            while ($row = $result->fetch_assoc()) {
                $docentes[] = $row;
            }
            return $docentes;
        } else {
            return array();
        }
    }

    public function verProductoId($id_producto)
    {
        $conexion = $this->bd->getConexion();
        $consulta = "SELECT * FROM tb_producto WHERE id_producto=$id_producto";
        $result = $conexion->query($consulta);
        
        if ($result->num_rows > 0) {
        
            $docentes = $result->fetch_assoc();
         
            return $docentes;
        } else {
            return array();
        }
    }
    public function insertProducto($nombre_producto, $precio, $stock)
    {
        $conexion = $this->bd->getConexion();

        $query = "INSERT INTO  tb_producto (nombre_producto, precio, stock, id_status)VALUES('$nombre_producto', $precio, $stock, 1)";
        $resultado = $conexion->query($query);
 
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarPtoducto($nombre, $precio, $stock, $id_producto)
    {
        $conexion = $this->bd->getConexion();
        $consulta = "UPDATE tb_producto SET nombre_producto='$nombre', precio='$precio ', stock='$stock', id_status=1 WHERE id_producto=$id_producto";
        $resultado = $conexion->query($consulta);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarProducto($id_producto)
    {
        $conexion = $this->bd->getConexion();
        $consulta = "UPDATE tb_producto SET id_status=2 where id_producto= $id_producto";
        $resultado = $conexion->query($consulta);

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
 

}
?>