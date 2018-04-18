@extends('layouts.front')

@section('style')
  <style>
    @media (min-width: 1200px) {
      .modal-xl {
        max-width: 1100px;
      }
    }
  </style>
@endsection

@section('content')
  <div class="container py-5">
    <div class="row">
      <div class="col-12 pt-5">
        {!! $cargo->perfil !!}
      </div>
    </div>

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#postulacionModal">Postularme al cargo</button>

    <!-- Modal -->
    <div class="modal fade" id="postulacionModal" tabindex="-1" role="dialog" aria-labelledby="postulacionModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="postulacionModalLabel">Postúlate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <aspirante-form :vacante_id="{!! $vacante_id !!}"></aspirante-form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar cambios</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection