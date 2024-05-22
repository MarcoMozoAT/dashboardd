<?php
$url = "https://api.conekta.io/orders";
$api_key = "key_ufnA0plRgLb4PHuQe5zS4DQ";
// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/vnd.conekta-v2.1.0+json',
    'Content-type: application/json'
));
curl_setopt($ch, CURLOPT_USERPWD, $api_key . ':');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

$data = json_decode($response, true);
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
        <a href="#" class="active">
          <i class="bx bx-box"></i>
          <span class="links_name">Pagos</span>
        </a>
      </li>
      <li>
        <a href="../productos/productos.php">
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
        Pagos realizados
    </header>

    <div>
        <table>
            <thead class="head">
                <tr>
                    <th>Producto</th>
                    <th>Nombre Cliente</th>
                    <th>Precio</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['data'] as $order) {
                    echo "<tr>";

                    echo "<td>" . $order['line_items']['data'][0]['name'] . "</td>";
                    echo " <td>" . $order['customer_info']['name'] . "</td>";
                    echo "<td>" . $order['amount'] . " " . $order['currency'] . "</td>";
                    if ($order['payment_status'] === "refunded") {
                        echo "<td>Pago Cancelado</td>";
                    } elseif ($order['payment_status'] === 'paid') {
                        echo '<td><button id="buttonCancelar" data-id="' . $order['id'] . '" data-price="' . $order['amount'] . '">Cancelar Pago</button></td>';
                    } else {
                        echo "<td>ERROR</td>";
                    }
                    echo "</tr>";
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