<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AVCA - RRHH</title>
  <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-inverse header-transparent fixed-top rrhh-navbar">
      <a class="navbar-brand" href="#">
        AVCA LOGO
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">¿Quienes sómos? <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Estrctura organizativa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link btn btn-success" href="#">
              <i class="fa fa-lock text-white"></i>
              Acceder              
            </a>
          </li>
        </ul>        
      </div>
    </nav>

    <div class="hero-text">
      <h1>Texto alucivo a RRHH</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quo?</p>
      <button>Hacer algo!</button>
    </div>

  </header>

  <main class="rrhh-landing">
    <div class="container py-5" id="nosotros">
      <div class="row">
        <div class="col-4">
          <div class="nosotros-item">            
            <h4 class="text-center">Misión</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugiat deleniti, eligendi molestiae? Quia nobis quisquam voluptas, ducimus, molestiae accusantium tenetur dolore provident necessitatibus, numquam vel. Molestiae autem similique quam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ad saepe non nisi ratione ea eligendi atque nostrum quod omnis veritatis fuga eaque iusto tenetur optio ipsa libero, quidem cupiditate!</p>
          </div>
        </div>
        <div class="col-4">
          <div class="nosotros-item">            
            <h4 class="text-center">Visión</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam numquam, nesciunt repellendus possimus quasi minima. Impedit consequatur laborum nisi, incidunt aliquid quia maiores. Voluptatibus fuga odit autem, delectus, eos perspiciatis.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi similique ratione sit aspernatur reprehenderit explicabo facilis sequi, itaque officiis sed omnis earum tempora amet aperiam voluptatem accusantium laudantium eos quam.</p>
          </div>
        </div>
        <div class="col-4">
          <div class="nosotros-item">            
            <h4 class="text-center">Objetivos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos sequi adipisci eos architecto vitae possimus, dolorem omnis molestiae unde, labore! Nihil iste consequatur sint harum, aperiam! Voluptatem optio tempora id.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates fuga, pariatur sapiente ex eos placeat molestiae recusandae quod, omnis vero at, doloribus unde quibusdam. Ut consequatur accusamus tenetur possimus fugit!</p>
          </div>
        </div>        
      </div>
    </div>

    <section id="informacion" class="informacion">
      <div class="container py-5">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="{{ asset('images/reclutamiento.jpeg') }}" alt="Reclutamiento">
            <div class="card-body">
              <h5 class="card-title">Reclutamiento</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('images/seleccion.jpeg') }}" alt="Selección">
            <div class="card-body">
              <h5 class="card-title">Selección</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{ asset('images/capacitacion.jpg') }}" alt="Capacitación">
            <div class="card-body">
              <h5 class="card-title">Capacitación</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
  <script src="{{ asset('js/jarallax-0.2.4b.js') }}"></script>
</body>
</html>