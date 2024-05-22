<?php
require_once '../clases/producto.php';
$objProducto = new Producto;
$productos = $objProducto->verProductos();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Administrador</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/tableOrders.css" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-dashboard'></i>
      <span class="logo_name">Admin</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../" >
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Inicio</span>
        </a>
      </li>
      <li>
        <a href="../pagos/pagos.php" >
          <i class="bx bx-box"></i>
          <span class="links_name">Pagos</span>
        </a>
      </li>
      <li>
        <a href="#" class="active">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Productos</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="links_name">Reportes</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-coin-stack"></i>
          <span class="links_name">Configuración</span>
        </a>
      </li>

      <li class="log_out">
        <a href="#">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Salir</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">

    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Ing. Marco</span>
      </div>
      <div class="search">
        <label>
          <input type="text" placeholder="Buscar">
          <ion-icon name="search-outline"></ion-icon>
        </label>
      </div>
      <div class="profile-details">
        <img src="../images/logo.png" alt="" srcset="">

      </div>
    </nav>

    <div class="home-content">
    <header>
        Productos   
    </header>

    <div class="conteButton">
    <a href="../vistas/nuevoProducto.php" class="ButtonRegresar">Nuevo</a>


    </div>
    <div>
        <table>
            <thead class="head">
                <tr>
                    <th>Id Producto</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>stock</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    if (isset($productos) && !empty($productos)) {
        foreach ($productos as $producto) {
            echo '<tr>
                <td>' . $producto['id_producto'] . '</td>
                <td>' . $producto['nombre_producto'] . '</td>
                <td>' . $producto['precio']  . '</td>
                <td>' . $producto['stock']  . '</td>
                <td><a href="../vistas/editarProducto.php?id=' . $producto['id_producto'] . '" class="icon-link edit-icon"><i class="bx bx-edit"></i></a></td>
                <td><a href="../crud/deleteProduct.php?id=' . $producto['id_producto'] . '" class="icon-link delete-icon"><i class="bx bx-trash"></i></a></td>
                </tr>';
        }
    } else {
        echo '<tr><td colspan="5">No se encontraron Productos.</td></tr>';
    }
?>
</tbody>

                
        </table>
    </div>
   </div>



  </section>

  <script src="../js/script.Js"></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>