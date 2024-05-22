<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Administrador</title>
  <link rel="stylesheet" href="css/style.css" />
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
        <a href="#" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Inicio</span>
        </a>
      </li>
      <li>
        <a href="pagos/pagos.php">
          <i class="bx bx-box"></i>
          <span class="links_name">Pagos</span>
        </a>
      </li>
      <li>
        <a href="productos/productos.php">
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
        <img src="images/logo.png" alt="" srcset="">

      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Productos</div>
            <div class="number">10</div>
            <div class="indicator">
              <i class="bx bx-up-arrow-alt"></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>

          <i class="bx bx-group cart"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Alumnos</div>
            <div class="number">128</div>
            <div class="indicator">
              <i class="bx bx-up-arrow-alt"></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="bx bx-book-reader two cart"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Ordenes</div>
            <div class="number">27</div>
            <div class="indicator">
              <i class="bx bx-up-arrow-alt"></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class="bx bx-git-branch cart three"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Montos</div>
            <div class="number">$11,486</div>
            <div class="indicator">
              <i class="bx bx-down-arrow-alt down"></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class="bx bx-dollar cart four"></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Ingresos</div>

          <canvas id="myChart" class="canvas2"></canvas>

        </div>
        <div class="top-sales box">
          <div class="title">Alumnos Aprobados</div>

          <canvas id="recentCustomersChart"></canvas>

        </div>
      </div>
    </div>
  </section>

  <script src="js/canvas.js"></script>
  <script src="js/script.Js"></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>