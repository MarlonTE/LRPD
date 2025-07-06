<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mishacafé</title>
  <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
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
          <a href="login.html" class="btn-login-link">
            <i class="fa-solid fa-user"></i>
          </a>
          <i class="fa-solid fa-cart-shopping"></i>
          <div class="content_carrito">
            <span class="text">Carrito</span>
            <span class="number">(0)</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container_navbar">
      <nav class="container nav_container">
        <i class="fa-solid fa-bars"></i>
        <ul class="lista">
          <li><a href="/">Inicio</a></li>
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