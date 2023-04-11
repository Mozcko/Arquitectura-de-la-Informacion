<!DOCTYPE html>
<html lang="es">
  <!--datos no visibles por el usuario-->
  <head>
    <!--metadatos-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!--icono de favicon-->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!--estilos de la pagina-->
    <link rel="stylesheet" href="css/style.css" />
    <!--bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/d6098394de.js"
      crossorigin="anonymous"
    ></script>

    <!--fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Crimson+Pro"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Dosis"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans"
    />

    <!--scripts-->
    <!--<script src="js/script.js"></script>-->
    <!--titulo del documento-->
    <title>TenCloy</title>
  </head>

  <!--datos visibles por el usuario-->
  <body>
    <!--barra superior-->
    <header>
      <!--esta es la barra de navegación-->
      <section>
        <div id="navbar">
          <div class="row">
            <!--logo-->
            <div class="col-lg-1 col-md-2 col-sm-2">
              <div class="logo">
                <a href="#"><img src="img/logo full(fixed).png" alt="" width="80%"></a>
              </div>
            </div>
            <!--menu-->
            <div class="col-lg-6 col-md-8 col-sm-8">
              <div class="menu">
                <a href="#home">Home</a>
                <a href="#news">News</a>
                <a href="#products">Products</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <!--contenido principal-->
    <main>
      <!--imagen de fondo-->
      <section class="bgimage">
        <div class="container-fluid">
          <div class="row">
            <div class="background">
              <h3>TenCloy Soluciones </h3>
              <p>
                <a href="#" class="primary-btn"><span>Comprar</span></a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--categorías-->
      <section class="categorias">
        <div class="container">
          <div class="row">
            <article class="col-lg-3 col-md-6 col-sm-12 text-center">
              <div class="container">
                <img src="img/audifonos.jpg" alt="" />
                <p>
                  <a href="shop.html" class="primary-btn"><span>audio</span></a>
                </p>
              </div>
            </article>
            <article class="col-lg-3 col-md-6 col-sm-12 text-center">
              <div class="container">
                <img src="img/gadgets.jpg" alt="" />
                <p>
                  <a href="shop.html" class="primary-btn"><span>gadgets</span></a>
                </p>
              </div>
            </article>
            <article class="col-lg-3 col-md-6 col-sm-12 text-center">
              <div class="container">
                <img src="img/werables.jpg" alt="" />
                <p>
                  <a href="shop.html" class="primary-btn"><span>werables</span></a>
                </p>
              </div>
            </article>
            <article class="col-lg-3 col-md-6 col-sm-12 text-center">
              <div class="container">
                <img src="img/laptops.jpg" alt="" />
                <p>
                  <a href="shop.html" class="primary-btn"><span>laptops</span></a>
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!--Carrousel de imágenes-->

      <!--necesita modificarse usando #bootstrap-->
      <section class="audio">
        <div class="container-fluid">
          <div class="audio-p">
            <p>los mejores dispositivos</p>
            <p>al mejor precio</p>
          </div>
          <div class="auto-img">
            <div class="wrapper">
              <img src="img/audifonos.jpg" />
              <img src="img/gadgets.jpg" />
              <img src="img/laptops.jpg" />
              <img src="img/werables.jpg" />
            </div>
          </div>
          <div class="audio-btn">
            <div class="text-center">
              <p>
                <a href="#" class="primary-btn"><span>Comprar</span></a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--icono flotante de WhatsApp-->
      <section>
        <a href="#" class="whatsapp" target="_blank">
          <i class="fab fa-whatsapp my-whatsapp"></i>
        </a>
      </section>
    </main>

    <!--footer y redes sociales-->
    <footer>
      <section class="socialM">
        <h3>síguenos en nuestras redes sociales</h3>
        <div class="row">
          <div class="col-12">
            <span>
              <p>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </p>
            </span>
          </div>
          <div class="col-12">
            <span>
              <p>
                <a href="#">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </p>
            </span>
          </div>
          <div class="col-12">
            <span>
              <p>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </p>
            </span>
          </div>
          <div class="col-12">
            <span>
              <p>
                <a href="#">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </p>
            </span>
          </div>
        </div>
      </section>

      <section class="copyrights">
        <div class="container">
          <p>
            <i class="fa fa-registered" aria-hidden="true"></i> Derechos
            reservados Joaquin Eduardo Ramos Farfan
          </p>
        </div>
      </section>
    </footer>

    <!--script de bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
