@extends('admin.layouts.admin')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h4>Listado de cargos</h4>
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Título</th>
                <th>Grupo</th>
                <th>Tabulador salarial</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach($cargos as $cargo)
              <tr>
                <td>{{ $cargo->titulo }}</td>
                <td>{{ $cargo->grupo }}</td>
                <td>Bs. {{ $cargo->sueldo_base }}</td>
                <td>
                  <a href="{{ route('cargo.edit', $cargo->cargo_id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                    Editar
                  </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection