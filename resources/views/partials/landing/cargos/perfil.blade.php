@extends('layouts.front')

@section('content')
  <div class="container py-5">
    <div class="row">
      <div class="col-12">
        {!! $cargo->perfil !!}
      </div>
    </div>

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#postulacionModal">Postularme al cargo</button>

    <!-- Modal -->
    <div class="modal fade" id="postulacionModal" tabindex="-1" role="dialog" aria-labelledby="postulacionModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="postulacionModalLabel">Postúlate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <aspirante-form></aspirante-form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection