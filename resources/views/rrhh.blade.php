<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing RRHH</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
  <link rel="stylesheet" href="{{ asset('css/rrhh.css') }}">
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top header__navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">RRHH</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">¿Quienes sómos? <span class="sr-only">(¿Quienes sómos?)</span></a>
            </li>                             
            <li class="nav-item active">
              <a class="nav-link" href="#">Estructura organizativa <span class="sr-only">(Estructura organizativa)</span></a>
            </li>                             
            <li class="nav-item active">
              <a class="nav-link" href="#">Proceso de selección <span class="sr-only">(Proceso de selección)</span></a>
            </li>                             
            <li class="nav-item active">
              <a class="nav-link" href="#">Contáctenos <span class="sr-only">(Contáctenos)</span></a>
            </li>                             
            <li class="nav-item active">
              <a class="nav-link btn btn-info" href="#">
                Acceder <span class="sr-only">(Acceder al sistema)</span>
                <i class="fas fa-lock"></i>
              </a>
            </li>                             
          </ul>              
        </div>
      </div>
    </nav>

    <!-- Texto principal -->
    <div class="header__hero-text">
      <h1>
        Alas de Venezuela C.A (AVCA) <br>Gerencia de RRHH
      </h1>

      <div class="header__hero-arrow">
        <a href="#">
          <i class="fas fa-angle-down"></i>
        </a>
      </div>
    </div>
  </header>

  <main>
    <!-- Acerca de la empresa -->
    <section class="about py-5">
      <div class="container">
        <h2 class="rrhh__title">Acerca de nosotros</h2>
        <div class="row">
          <div class="col-lg-6">
            <article class="about__item about__item--mision">
                <div class="media">
                  <img class="mr-3" src="./images/meeting.svg" alt="Generic placeholder image" class="about__img">
                  <div class="media-body">
                    <h5 class="mt-0">Misión</h5>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eum blanditiis ratione, facilis necessitatibus minima nesciunt amet.</p>
                  </div>
                </div>
            </article>
            <article class="about__item about__item--vision">
              <div class="media">
                <img class="mr-3" src="./images/target.svg" alt="Generic placeholder image" class="about__img">
                <div class="media-body">
                  <h5 class="mt-0">Visión</h5>
                  <p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere exercitationem deleniti mollitia reprehenderit aperiam expedita atque quam dolor assumenda est ipsum nihil error fugit, aliquam, totam obcaecati aspernatur cumque nobis.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-lg-6">
            <div class="row no-gutters">
              <div class="col-lg-4">
                <img src="./images/objetives.jpeg" alt="Objetivos" class="img-fluid about__img">
              </div>
              <div class="col-lg-8 pl-3">
                <h5 class="about__title">Objetivos</h5>
                <ul class="list-unstyled about__objetives">
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iure quam sequi maiores natus optio. Fuga deserunt ex nesciunt corrupti?</li>
                  <li>Fugiat nam culpa eius nesciunt explicabo pariatur velit nulla similique expedita illo neque harum ab, omnis quos rerum aperiam laborum!</li>
                  <li>Sequi, odio in unde id harum ducimus sed! Modi maiores nostrum soluta, quaerat distinctio harum ipsa earum aperiam voluptates aut.</li>
                  <li>Eos placeat inventore pariatur itaque saepe quod? At dolor quia earum, autem repellendus ex maxime, voluptatibus vitae consectetur deleniti quas?</li>
                  <li>Ipsa suscipit, alias possimus magnam laboriosam perspiciatis eius. Asperiores corrupti est quidem eaque et. Molestias adipisci vero dolore quos ipsa.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Proceso de seleccion -->
    <section class="recruitment py-5">
      <div class="container">
        <h2 class="rrhh__title">Proceso de selección</h2>
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="/images/reclutamiento.jpeg" alt="Reclutamiento">
            <div class="card-body">
              <h4 class="card-title text-center">Reclutamiento</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, labore magnam! Incidunt eveniet, aliquid non tempore accusamus ea magnam, tempora expedita labore at esse provident, ratione nostrum voluptates quisquam optio!</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="/images/seleccion.jpeg" alt="Selección">
            <div class="card-body">
              <h4 class="card-title text-center">Selección</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, sequi cupiditate! Pariatur velit, delectus nihil ratione magnam, minima vel, voluptas hic quidem et ipsam distinctio suscipit molestias nostrum inventore eaque.</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="/images/capacitacion.jpg" alt="Capacitación">
            <div class="card-body">
              <h4 class="card-title text-center">Capacitación</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque expedita id velit quod ea modi ut consequuntur adipisci, eos sint? Laudantium magni officia numquam rerum eos earum nam velit beatae.</p>
            </div>
          </div>
        </div>
        
        <!-- Seccion de informacion -->
        <div class="recruitment__subscription text-center py-5">
          <h4 class="recruitment__text">¿Quieres formar parte de nosotros?</h4>
          <a href="#" class="recruitment__link">
            Ingresa tu curriculum
            <i class="fas fa-arrow-alt-circle-right"></i>
          </a>
        </div>
      </div>
    </section>


    <!-- Seccion de postulaciones -->
    <section class="applications py-5">
      <div class="container">          
        <div class="card-deck">
          <div class="card">
            <div class="card-header">Pasante</div>
            <div class="card-body">                  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, velit. Numquam deserunt pariatur quod, repudiandae animi vel sapiente distinctio blanditiis suscipit dicta iste officiis. Ex quod provident molestias excepturi veniam?</p>
            </div>
            <div class="card-footer px-0 py-0">
                <a href="#" class="btn btn-info btn-block rounded-0">
                  Contáctenos
                  <i class="fas fa-arrow-alt-circle-right"></i>
                </a>
              </div>
          </div>
          <div class="card">
            <div class="card-header">Aprendíz</div>
            <div class="card-body">                  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, velit. Numquam deserunt pariatur quod, repudiandae animi vel sapiente distinctio blanditiis suscipit dicta iste officiis. Ex quod provident molestias excepturi veniam?</p>
            </div>
            <div class="card-footer px-0 py-0">
                <a href="#" class="btn btn-info btn-block rounded-0">
                  Contáctenos
                  <i class="fas fa-arrow-alt-circle-right"></i>
                </a>
              </div>
          </div>
          <div class="card">
            <div class="card-header">Técnico</div>
            <div class="card-body">                  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, velit. Numquam deserunt pariatur quod, repudiandae animi vel sapiente distinctio blanditiis suscipit dicta iste officiis. Ex quod provident molestias excepturi veniam?</p>
            </div>
            <div class="card-footer px-0 py-0">
                <a href="#" class="btn btn-info btn-block rounded-0">
                  Contáctenos
                  <i class="fas fa-arrow-alt-circle-right"></i>
                </a>
              </div>
          </div>
          <div class="card">
            <div class="card-header">Profesional</div>
            <div class="card-body">                  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, velit. Numquam deserunt pariatur quod, repudiandae animi vel sapiente distinctio blanditiis suscipit dicta iste officiis. Ex quod provident molestias excepturi veniam?</p>             
            </div>
            <div class="card-footer px-0 py-0">
              <a href="#" class="btn btn-info btn-block rounded-0">
                Contáctenos
                <i class="fas fa-arrow-alt-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
</body>
</html>