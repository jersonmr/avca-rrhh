@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="category-content">
          @if (request()->get('type') == 'operativos')
            @include('partials.landing.cargos.operativos')
          @endif
          @if (request()->get('type') == 'area-administrativa')
            @include('partials.landing.cargos.area-administrativa')
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection