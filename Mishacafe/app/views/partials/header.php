<!-- ENCABEZADO -->
<header>
  <div class="container-hero">
    <div class="container container-hero2">
      <div class="customer_supp">
        <i class="fa-solid fa-mobile-screen"></i>
        <div class="content-customer-supp">
          <span class="text">Contacto ayuda</span>
          <span class="number">+51 927475668</span>
        </div>
      </div>
      <div class="container-logo">
        <i class="fa-solid fa-mug-hot"></i>
        <h1 class="logo"><a href="/">Mishacafé</a></h1>
      </div>

      <div class="container-user">
        <?php
        if (!isset($_SESSION)) {
          session_start();
        }
        if (empty($_SESSION['user_id'])) {
        ?>
          <a href="/Mishacafe/app/views/login.php" class="btn-login-link">
            <i class="fa-solid fa-user"></i>
          </a>
        <?php
        } else {
        ?>
          <div class="user-session-info">
            <span class="user-email"><?= htmlspecialchars($_SESSION['usuario']) ?></span>
            <a href="/Mishacafe/app/views/logout.php" class="btn-login-link" title="Cerrar sesión">
              <i class="fa-solid fa-right-from-bracket"></i>
            </a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  </div>

  <div class="container_navbar">
    <nav class="container nav_container">
      <i class="fa-solid fa-bars"></i>
      <ul class="lista">
        <li><a href="#">Inicio</a></li>
        <li><a href="#categorias">Mejores Categorías</a></li>
        <li><a href="#productos">Mejores Productos</a></li>
        <li><a href="#galerias">Galeria</a></li>
        <li><a href="#blog">Blog</a></li>
      </ul>

      <form class="search_form" onsubmit="buscarProducto(event)">
        <input type="search" id="busqueda" placeholder="Buscar..." />
        <button class="btn-search" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      <p
        id="mensaje-busqueda"
        style="
              display: none;
              color: red;
              text-align: center;
              margin-top: 10px;
            ">
        No se encontraron resultados.
      </p>
    </nav>
  </div>
</header>