<section class="applications" id="application">
  <div class="container">
    <h2 class="rrhh__title rrhh__title--about">Oportunidades de empleo</h2>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card">
          <div class="card-header">Operativos</div>
          <img class="card-img-top" src="{{ asset('images/interns.jpg') }}" alt="Operativos">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <p class="card-text">
              <a href="/cargo?type=operativos" class="btn btn-lg btn-block btn-success">
                <i class="fa fa-plus"></i>
                Información
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <div class="card-header">Personal de oficina</div>
          <img class="card-img-top" src="{{ asset('images/learning.jpg') }}" alt="Personal de oficina y atención">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <p class="card-text">
              <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#aprendicesModal">
                <i class="fa fa-plus"></i>
                Información
              </button>
              @include('modals.landing.aprendices')
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <div class="card-header">Tripulación</div>
          <img class="card-img-top" src="{{ asset('images/technic.jpeg') }}" alt="Tripulación">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <p class="card-text">
              <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#tecnicosModal">
                <i class="fa fa-plus"></i>
                Información
              </button>
              @include('modals.landing.tecnicos')
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <div class="card-header">Área telemática</div>
          <img class="card-img-top" src="{{ asset('images/professional.jpeg') }}" alt="Área telemática">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <p class="card-text">
              <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#profesionalesModal">
                <i class="fa fa-plus"></i>
                Información
              </button>
              @include('modals.landing.profesionales')
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <div class="card-header">Ápoyo logístico</div>
          <img class="card-img-top" src="{{ asset('images/professional.jpeg') }}" alt="Apoyo logístico">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <p class="card-text">
              <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#profesionalesModal">
                <i class="fa fa-plus"></i>
                Información
              </button>
              @include('modals.landing.profesionales')
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <div class="card-header">Área administrativa</div>
          <img class="card-img-top" src="{{ asset('images/professional.jpeg') }}" alt="Área administrativa">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <p class="card-text">
              <a href="/cargo?type=area-administrativa" class="btn btn-lg btn-block btn-success">
                <i class="fa fa-plus"></i>
                Información
              </a>
              @include('modals.landing.profesionales')
            </p>
          </div>
        </div>
      </div>
    </div>
    {{--<div class="card-deck">
      <div class="card">  
        <div class="card-header">Pasantes</div>      
        <img class="card-img-top" src="{{ asset('images/interns.jpg') }}" alt="Pasantes">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#pasantesModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.pasantes')
          </p>
        </div>
      </div>
      <div class="card">
        <div class="card-header">Aprendices</div>
        <img class="card-img-top" src="{{ asset('images/learning.jpg') }}" alt="Aprendices">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#aprendicesModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.aprendices')
          </p>
        </div>        
      </div>
      <div class="card">
        <div class="card-header">Técnicos</div>
        <img class="card-img-top" src="{{ asset('images/technic.jpeg') }}" alt="T[ecnicos">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#tecnicosModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.tecnicos')
          </p>
        </div>        
      </div>
      <div class="card">
        <div class="card-header">Profesionales</div>
        <img class="card-img-top" src="{{ asset('images/professional.jpeg') }}" alt="Profesional">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#profesionalesModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.profesionales')
          </p>
        </div>        
      </div>
    </div>--}}
  </div>
</section>