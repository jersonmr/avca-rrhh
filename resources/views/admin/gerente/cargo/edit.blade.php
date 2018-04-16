@extends('admin.layouts.admin')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header text-white bg-primary">Editar cargo</div>
        <div class="card-body">
          <form action="{{ route('cargo.update', $cargo->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="titulo">Título</label>
              <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Ingrese el título" value="{{ $cargo->titulo }}">
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="grupo">Grupo</label>
                  <input type="text" name="grupo" id="grupo" class="form-control" placeholder="Ingrese el grupo" value="{{ $cargo->grupo }}">
                </div>
              </div>
              <div class="col-md-9">

              </div>
            </div>
            <div class="form-group">
              <label for="perfil">Perfil</label>
              <textarea name="perfil" id="perfil" cols="30" rows="30" class="form-control ckeditor">
                {{ $cargo->perfil }}
              </textarea>
            </div>

            <div class="form-group">
              <input type="submit" value="Actualizar cargo" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@endsection
