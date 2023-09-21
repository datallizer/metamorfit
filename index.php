<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta property="og:title" content="Inicio | Metamorfit">
  <meta property="og:description" content="">
  <meta property="og:image" content="images/ogportada.jpg">
  <meta property="og:url" content="https://metamorfitlife.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slickslider.css">
  <title>Inicio | Metamorfit</title>
</head>

<body>
  <!-- Messenger Plugin de chat Code -->
  <div id="fb-root"></div>

  <!-- Your Plugin de chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "113283131351070");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v17.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <?php include 'menu.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active herouno">
        <div class=" hero row d-flex align-items-center justify-content-center">
          <div class="col-9">
            <h1 class="heroh1">NUESTROS PLANES</h1>
            <p class="herop">Entrenar de manera inteligente es la mejor opción para cambiar tu<br>vida, conoce todos nuesteos planes:</p>
            <a href="#" class="btn btn-light">Ver más</a>
            <a href="#" class="btn btn-primary">Membresías</a>
          </div>
        </div>
      </div>
      <div class="carousel-item herodos ">
        <div class=" hero row d-flex align-items-center justify-content-center">
          <div class="col-9 text-center">
            <h2>PROGRAMAS PRESENCIALES Y ONLINE</h2>
            <h1 class="herodosh1">ENTRENAMIENTO <span>PERSONALIZADO</span></h1>
            <a href="#" class="btn btn-light">Ver más</a>
            <a href="#" class="btn btn-info">Servicios</a>
          </div>
        </div>
      </div>
      <!-- <div class="carousel-item herotres">
    <div class=" hero row d-flex align-items-center justify-content-center">
        <div class="col-6">
            <h1>PLAN DE ENTRENAMIENTO INTEGRAL</h1>
        </div>
      </div>
    </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-evenly align-items-center servicios">
      <div class="col-12 text-center servicestitle">
        <h2 style="font-weight: 700;">SERVICIOS</h2>
      </div>
      <div class="col-11 col-md-10" style="margin-bottom: 55px;">
        <p>En METAMORFIT, nos comprometemos a transformar vidas a través de un enfoque personalizado e integral de fitness. Nos visualizamos como líderes en la industria del fitness personalizado integral, reconocidos por nuestra excelencia en la creación de programas innovadores que transforman vidas.</p>
      </div>
      <div class="col-11 col-md-3 cardservices">
        <img src="images/ecommerce.svg" alt="Ecommerce">
        <h3>Ecommerce</h3>
        <p>Conoce nuestra tienda virtual donde podras comprar equipo y accesorios deportivos</p>
      </div>
      <div class="col-11 col-md-3 cardservices">
        <img src="images/train.svg" alt="Training">
        <h3>Asesoría</h3>
        <p>Acccede a nuestros planes y programas de entrenamiento y nutrición personalizados</p>
      </div>
      <div class="col-11 col-md-3 cardservices">
        <img src="images/video.svg" alt="Video">
        <h3>Cursos</h3>
        <p>Dale play a los diferentes cursos y certificaciones que tenemos para potenciar tu lado fitness</p>
      </div>
    </div>
    <div class="row justify-content-evenly align-items-center filosofia">
      <div class="col-12 col-md-5 order-2 order-md-1">
        <img src="images/filosofia.jpg" alt="Filosofia">
      </div>
      <div class="col-11 col-md-5 order-1 order-md-2">
        <h2 style="font-weight: 700;">NUESTRA FILOSOFÍA</h2>
        <h2 class="filosofiah2">Programas de ejercicio y planes de nutrición</h2>
        <p>Nos basamos en la idea de abordar la salud y el bienestar de manera consistente, considerando diversos aspectos físicos, mentales y emocionales para lograr un estado óptimo de salud y vitalidad. Este enfoque va más allá de simplemente desarrollar la fuerza o la resistencia física, y busca equilibrar todos los aspectos de la vida de una persona.</p>
        <a href="#" class="btn btn-dark">Ver más</a>
      </div>
    </div>
    <div class="row justify-content-evenly align-items-center team">
      <div class="col-11 text-center">
        <h2>NUESTRO <span class="teamh2">EQUIPO</span></h2>
      </div>
      <div class="col-11 slickcard">
        <div class="slickc" data-aos="zoom-in">
          <img src="https://img.freepik.com/foto-gratis/deportista-confiado-auriculares-saltar-cuerda_1098-21632.jpg?size=626&ext=jpg" alt="Colaborador/a">
          <p><b>Eduardo Gomez</b></p>
        </div>
        <div class="slickc" data-aos="zoom-in">
          <img src="https://img.freepik.com/foto-gratis/mujer-deportiva-salida-demuestra-muscule-estudio_273443-1245.jpg?w=900&t=st=1693194460~exp=1693195060~hmac=bd1e2edaa54684ceb24a3d331dfc62794c59316902784991b5512e55ec956e12" alt="Colaborador/a">
          <p><b>Ana Ramirez</b></p>
        </div>
        <div class="slickc" data-aos="zoom-in">
          <img src="https://img.freepik.com/foto-gratis/hombre-guapo-dedica-gimnasio_1157-29459.jpg?size=626&ext=jpg" alt="Colaborador/a">
          <p><b>Luis Teran</b></p>
        </div>
        <div class="slickc" data-aos="zoom-in">
          <img src="https://img.freepik.com/foto-gratis/asistente-medico-preparandose-ejercicios-fisioterapia_23-2149071431.jpg?size=626&ext=jpg" alt="Colaborador/a">
          <p><b>Lucy Diaz</b></p>
        </div>
        <div class="slickc" data-aos="zoom-in">
          <img src="https://img.freepik.com/foto-gratis/deportista-camisa-posando-gimnasio_7502-4746.jpg?size=626&ext=jpg" alt="Colaborador/a">
          <p><b>Diego Sanchez</b></p>
        </div>
        <div class="slickc" data-aos="zoom-in">
          <img src="https://img.freepik.com/foto-gratis/mujer-abdominales-visibles-haciendo-fitness_23-2150228895.jpg?size=626&ext=jpg" alt="Colaborador/a">
          <p><b>Karina Perez</b></p>
        </div>
      </div>
    </div>
    <div class="row justify-content-evenly align-items-top membresias">
      <div class="col-11 col-md-12 mb-5">
        <h2>MEMEBRESÍAS</h2>
        <p>Conoce los diferentes planes de entrenamiento que tenemos para ti</p>
      </div>
      <div class="col-11 col-md-3 membership">
        <h3>REGULAR</h3>
        <p><span>$300</span> / mes</p>
        <p class="memberp">Tres meses presencial</p>
        <p><i class="bi bi-1-circle"></i> Entrenador</p>
        <p><i class="bi bi-2-circle"></i> Auxiliar</p>
        <p><i class="bi bi-3-circle"></i> Plan metodológico</p>
        <p><i class="bi bi-4-circle"></i> Rutinas optimizables</p>
        <p><i class="bi bi-5-circle"></i> Soporte</p>
        <p><i class="bi bi-6-circle"></i> Monitoreo presencial</p>
        <p><i class="bi bi-7-circle"></i> Una sesión psicológica al mes</p>
        <a href="#" class="btn btn-dark btn-sm mt-3">Comprar</a>
      </div>

      <div class="col-11 col-md-3 membership">
        <h3>PRO</h3>
        <p><span>$500</span> / mes</p>
        <p class="memberp">Tres meses o más presencial</p>
        <p><i class="bi bi-1-circle"></i> Entrenador</p>
        <p><i class="bi bi-2-circle"></i> Auxiliar</p>
        <p><i class="bi bi-3-circle"></i> Psicólogo (1 sesión psicológica al mes)</p>
        <p><i class="bi bi-4-circle"></i> Nutriólogo (2 evaluaciones al mes)</p>
        <p><i class="bi bi-5-circle"></i> Fisioterapeuta (2 terapias y evaluaciones al mes)</p>
        <p><i class="bi bi-6-circle"></i> Plan metodológico</p>
        <p><i class="bi bi-7-circle"></i> Rutinas optimizables</p>
        <p><i class="bi bi-8-circle"></i> Soporte</p>
        <p><i class="bi bi-9-circle"></i> Monitoreo presencial</p>
        <a href="#" class="btn btn-dark btn-sm mt-3">Comprar</a>
      </div>

      <div class="col-11 col-md-3 membership black">
        <h3>BLACK</h3>
        <p><span>$700</span> / mes</p>
        <p class="memberp">Seis meses de evaluación y atención premium</p>
        <p><i class="bi bi-1-circle"></i> Entrenador</p>
        <p><i class="bi bi-2-circle"></i> Auxiliar</p>
        <p><i class="bi bi-3-circle"></i> Psicólogo (Sesiónes ilimitadas)</p>
        <p><i class="bi bi-4-circle"></i> Nutriólogo (Evaluaciones ilimitadas)</p>
        <p><i class="bi bi-5-circle"></i> Fisioterapeuta (Terapias y evaluaciones ilimitadas)</p>
        <p><i class="bi bi-6-circle"></i> Plan metodológico anual</p>
        <p><i class="bi bi-7-circle"></i> Rutinas optimizables ajustables</p>
        <p><i class="bi bi-8-circle"></i> Soporte 24/7</p>
        <p><i class="bi bi-9-circle"></i> Monitoreo y guía presencial</p>
        <a href="#" class="btn btn-primary btn-sm mt-3">Comprar</a>
      </div>

      <div class="col-11 col-md-3 membership">
        <h3>TEEN</h3>
        <p><span>$200</span> / mes</p>
        <p class="memberp">Una membresía adaptada a tus necesidades</p>
        <p><i class="bi bi-1-circle"></i> Entrenador</p>
        <p><i class="bi bi-2-circle"></i> Auxiliar</p>
        <p><i class="bi bi-3-circle"></i> Psicólogo (1 sesión psicológica al mes)</p>
        <p><i class="bi bi-4-circle"></i> Nutriólogo (2 evaluaciones al mes)</p>
        <p><i class="bi bi-5-circle"></i> Fisioterapeuta (2 terapias y evaluaciones al mes)</p>
        <p><i class="bi bi-6-circle"></i> Plan metodológico</p>
        <p><i class="bi bi-7-circle"></i> Rutinas optimizables</p>
        <p><i class="bi bi-8-circle"></i> Soporte</p>
        <p><i class="bi bi-9-circle"></i> Monitoreo presencial</p>
        <a href="#" class="btn btn-dark btn-sm mt-3">Comprar</a>
      </div>
    </div>
    <div class="row justify-content-center align-items-center unete">
      <div class="col-11 col-md-5">
        <h2>INICIA TU CAMBIO FÍSICO</h2>
        <h3 class="retoh2">UN NUEVO RETO</h3>
        <p>La aplicación del programa de ejercicios y un estilo de vida saludable puede llevar a una transformación positiva en la condición física de una persona.</p>
        <a href="#" class="btn btn-sm btn-outline-primary mt-2">Registrarme</a>
      </div>
      <div class="col-11 col-md-4 retoimg">
        <img src="images/reto.png" alt="Reto">
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/slickslider.js"></script>
  
</body>

</html>