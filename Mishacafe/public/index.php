<?php
// index.php (ubicado fuera de /public)

// Iniciar sesión si no está iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Autoload de clases (puedes usar Composer o un autoloader propio)
require_once __DIR__ . '/../app/controllers/ProductController.php';
// require otros controladores según necesites

// Enrutamiento simple (puedes mejorarlo luego)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/index.php':
        (new ProductController())->index();
        break;
    // Agrega más rutas aquí
    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
?>

<?php include __DIR__ . '/partials/header.php'; ?>

<!-- BANNER -->
<section class="banner">
    <div class="content_banner">
        <p>Café Delicioso</p>
        <h2>100% Natural <br>Con un peludo acompañamiento</h2>
        <a href="#">Más Información</a>
    </div>
</section>

<main class="main-content">
    <section class="container container-features">
        <!-- CARD 1 -->
        <div class="card-feature">
            <i class="fa-solid fa-cat"></i>
            <div class="feature-content">
                <span>GatoAmigo</span>
                <p>Tu amigo peludo</p>
            </div>
        </div>
        <!-- CARD 2 -->
        <div class="card-feature">
            <i class="fa-regular fa-heart"></i>
            <div class="feature-content">
                <span>Relajación</span>
                <p>Ayuda a que te sientas más tranquilo</p>
            </div>
        </div>
        <!-- CARD 3 -->
        <div class="card-feature">
            <i class="fa-regular fa-face-laugh-beam"></i>
            <div class="feature-content">
                <span>Haz tu día más feliz</span>
                <p>La compañía mejora tu ánimo</p>
            </div>
        </div>
        <!-- CARD 4 -->
        <div class="card-feature">
            <i class="fa-solid fa-mug-saucer"></i>
            <div class="feature-content">
                <span>Un buen café</span>
                <p>Disfruta un café orgánico</p>
            </div>
        </div>
    </section>

    <section class="container top-categorias">
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

    <section class="container top-products">
        <h1 class="heading-1">Mejores Productos</h1>
        <div class="container-options">
            <span class="active">Destacados</span>
            <span>Más recientes</span>
            <span>Mejores vendidos</span>
        </div>
        <div class="container-products">
            <!-- PRODUCT 1 -->
            <div class="card-product">
                <div class="container-img">
                    <img src="/img/cafe-late.png" alt="Café Latte">
                    <span class="discount">-13%</span>
                    <div class="button-group">
                        <span><i class="fa-solid fa-eye"></i></span>
                        <span><i class="fa-solid fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
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
                    <span class="add-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    <p class="price">$4.68 <span>$5.39</span></p>
                </div>
            </div>
            <!-- PRODUCT 2 -->
            <div class="card-product">
                <div class="container-img">
                    <img src="/img/capu-min.jpg" alt="Café Helado">
                    <span class="discount">-13%</span>
                    <div class="button-group">
                        <span><i class="fa-solid fa-eye"></i></span>
                        <span><i class="fa-solid fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
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
                    <span class="add-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    <p class="price">$5.20 <span>$6.00</span></p>
                </div>
            </div>
            <!-- PRODUCT 3 -->
            <div class="card-product">
                <div class="container-img">
                    <img src="/img/cafe-bombon.png" alt="Café Bombón">
                    <span class="discount">-13%</span>
                    <div class="button-group">
                        <span><i class="fa-solid fa-eye"></i></span>
                        <span><i class="fa-solid fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
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
                    <span class="add-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    <p class="price">$4.90 <span>$5.65</span></p>
                </div>
            </div>
            <!-- PRODUCT 4 -->
            <div class="card-product">
                <div class="container-img">
                    <img src="/img/cafe-pan.png" alt="Café con Pan">
                    <span class="discount">-13%</span>
                    <div class="button-group">
                        <span><i class="fa-solid fa-eye"></i></span>
                        <span><i class="fa-solid fa-heart"></i></span>
                        <span><i class="fa-solid fa-code-compare"></i></span>
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
                    <span class="add-cart"><i class="fa-solid fa-cart-shopping"></i></span>
                    <p class="price">$3.99 <span>$4.59</span></p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>