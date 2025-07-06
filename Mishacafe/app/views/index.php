<?php include __DIR__ . '/partials/header.php'; ?>

<!-- BANNER -->
<section class="banner">
  <div class="content_banner">
    <p>Café Delicioso</p>
    <h2>100% Natural <br />Con un peludo acompañamiento</h2>
    <a href="#">Más Información</a>
  </div>
</section>

<main class="main-content">
  <section class="container container-features">
    <!-- CARTA 1 -->
    <div class="card-feature">
      <i class="fa-solid fa-cat"></i>
      <div class="feature-content">
        <span>GatoAmigo</span>
        <p>Tu amigo peludo</p>
      </div>
    </div>

    <!-- CARTA 2 -->
    <div class="card-feature">
      <i class="fa-regular fa-heart"></i>
      <div class="feature-content">
        <span>Relajación</span>
        <p>Ayuda a que te sientas más tranquilo</p>
      </div>
    </div>

    <!-- CARTA 3 -->
    <div class="card-feature">
      <i class="fa-regular fa-face-laugh-beam"></i>
      <div class="feature-content">
        <span>Haz tu día más feliz</span>
        <p>La compañía mejora tu ánimo</p>
      </div>
    </div>

    <!-- CARTA 4 -->
    <div class="card-feature">
      <i class="fa-solid fa-mug-saucer"></i>
      <div class="feature-content">
        <span>Un buen café</span>
        <p>Disfruta un café orgánico</p>
      </div>
    </div>
  </section>

  <section id="categorias" class="container top-categorias animar">
    <h1 class="heading-1">Mejores Categorías</h1>
    <div class="container-categorias">
      <div class="card-category category-moca">
        <p>Café Moca</p>
        <span>Ver más</span>
      </div>

      <div class="card-category category-expreso">
        <p>Expreso Americano</p>
        <span>Ver más</span>
      </div>

      <div class="card-category category-capuchino">
        <p>Cappuccino</p>
        <span>Ver más</span>
      </div>
    </div>
  </section>

  <section id="productos" class="container top-products animar">
    <h1 class="heading-1">Mejores Productos</h1>

    <div class="container-options">
      <span class="active">Destacados</span>
      <span>Más recientes</span>
      <span>Mejores vendidos</span>
    </div>

    <div class="container-products">
      <!-- PRODUCTO 1 -->
      <div class="card-product" id="producto-cafe-latte">
        <div class="container-img">
          <img src="/img/cafe-late.png" alt="Café Latte" />
          <span class="discount">-13%</span>
          <div class="button-group">
            <span>
              <i class="fa-solid fa-eye"></i>
            </span>
            <span>
              <i class="fa-solid fa-heart"></i>
            </span>
            <span>
              <i class="fa-solid fa-code-compare"></i>
            </span>
          </div>
        </div>
        <div class="content-card-product">
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Café Latte</h3>
          <span class="add-cart">
            <i class="fa-solid fa-cart-shopping"></i>
          </span>
          <p class="price">$4.68 <span>$5.39</span></p>
        </div>
      </div>

      <!-- PRODUCTO 2 -->
      <div class="card-product" id="producto-cafe-helado">
        <div class="container-img">
          <img src="/img/capu-min.jpg" alt="Café Helado" />
          <span class="discount">-13%</span>
          <div class="button-group">
            <span>
              <i class="fa-solid fa-eye"></i>
            </span>
            <span>
              <i class="fa-solid fa-heart"></i>
            </span>
            <span>
              <i class="fa-solid fa-code-compare"></i>
            </span>
          </div>
        </div>
        <div class="content-card-product">
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Café Helado</h3>
          <span class="add-cart">
            <i class="fa-solid fa-cart-shopping"></i>
          </span>
          <p class="price">$5.20 <span>$6.00</span></p>
        </div>
      </div>

      <!-- PRODUCTO 3 -->
      <div class="card-product" id="producto-cafe-bombon">
        <div class="container-img">
          <img src="/img/cafe-bombon.png" alt="Café Bombón" />
          <span class="discount">-13%</span>
          <div class="button-group">
            <span>
              <i class="fa-solid fa-eye"></i>
            </span>
            <span>
              <i class="fa-solid fa-heart"></i>
            </span>
            <span>
              <i class="fa-solid fa-code-compare"></i>
            </span>
          </div>
        </div>
        <div class="content-card-product">
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Café Bombón</h3>
          <span class="add-cart">
            <i class="fa-solid fa-cart-shopping"></i>
          </span>
          <p class="price">$4.90 <span>$5.65</span></p>
        </div>
      </div>

      <!-- PRODUCTO 4 -->
      <div class="card-product">
        <div class="container-img">
          <img src="/img/cafe-pan.png" alt="Café con Pan" />
          <span class="discount">-13%</span>
          <div class="button-group">
            <span>
              <i class="fa-solid fa-eye"></i>
            </span>
            <span>
              <i class="fa-solid fa-heart"></i>
            </span>
            <span>
              <i class="fa-solid fa-code-compare"></i>
            </span>
          </div>
        </div>
        <div class="content-card-product">
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <h3>Café con Pan</h3>
          <span class="add-cart">
            <i class="fa-solid fa-cart-shopping"></i>
          </span>
          <p class="price">$3.99 <span>$4.59</span></p>
        </div>
      </div>
    </div>
  </section>

  <section id="galerias" class="gallery animar">
    <img
      src="/img/galeria1.1.jpg"
      alt="Gallery Img1"
      class="gallery-img-1" /><img
      src="/img/galeria2.1.jpg"
      alt="Gallery Img2"
      class="gallery-img-2" /><img
      src="/img/galeria3.1.jpg"
      alt="Gallery Img3"
      class="gallery-img-3" /><img
      src="/img/galeria4.jpg"
      alt="Gallery Img4"
      class="gallery-img-4" /><img
      src="/img/galeria5.jpg"
      alt="Gallery Img5"
      class="gallery-img-5" />
  </section>

  <section id="blog" class="container blogs animar">
    <h1 class="heading-1">Últimos Blogs</h1>

    <div class="container-blogs">
      <!-- BLOG 1 -->
      <div class="card-blog">
        <div class="container-img">
          <img src="/img/blog1.1.PNG" alt="Imagen Blog 1" />
          <div class="button-group-blog">
            <span>
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <a
              href="https://www.facebook.com/photo.php?fbid=737779978633505&set=pb.100072045278047.-2207520000&type=3">
              <span>
                <i class="fa-solid fa-link"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="content-blog">
          <h3>Una tarde entre café y ronroneos</h3>
          <span>4 de junio, 2025</span>
          <p>
            Nada mejor que disfrutar una taza de café mientras un gatito se
            acurruca a tu lado. En nuestro local, los felinos cafés se
            convierten en los compañeros perfectos para una pausa tranquila.
          </p>
          <div class="btn-read-more">Apoya</div>
        </div>
      </div>

      <!-- BLOG 2 -->
      <div class="card-blog">
        <div class="container-img">
          <img src="/img/blog2.PNG" alt="Imagen Blog 2" />
          <div class="button-group-blog">
            <span>
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <a
              href="https://www.facebook.com/gatu.peru/photos/pb.100072045278047.-2207520000/530467692112061/?type=3">
              <span>
                <i class="fa-solid fa-link"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="content-blog">
          <h3>Conoce a Moka, nuestro gato más curioso</h3>
          <span>01 de julio de 2025</span>
          <p>
            Moka es un gato café juguetón y sociable que se ha robado el
            corazón de todos los visitantes. ¡Ven a conocerlo y tal vez se
            siente contigo mientras tomas tu capuchino!
          </p>
          <div class="btn-read-more">AMA A LOS FELINOS</div>
        </div>
      </div>

      <!-- BLOG 3 -->
      <div class="card-blog">
        <div class="container-img">
          <img src="/img/blog3.PNG" alt="Imagen Blog 3" />
          <div class="button-group-blog">
            <span>
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <a
              href="https://www.facebook.com/photo.php?fbid=365035329241307&set=pb.100072045278047.-2207520000&type=3">
              <span>
                <i class="fa-solid fa-link"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="content-blog">
          <h3>Café con causa: cada sorbo ayuda a un gato</h3>
          <span>27 de junio de 2025</span>
          <p>
            En nuestra cafetería, cada bebida que consumes apoya el rescate
            y cuidado de gatos abandonados. Descubre cómo tu visita puede
            cambiar vidas peludas.
          </p>
          <div class="btn-read-more">ADOPTA</div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- FOOTER -->
<?php include __DIR__ . '/partials/footer.php'; ?>