@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="category-content">
          @if (request()->get('name') == 'tecnico-apoyo-en-asuntos-legales')
            @include('partials.landing.cargos.subcargos.tecnico-apoyo-en-asuntos-legales')
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection