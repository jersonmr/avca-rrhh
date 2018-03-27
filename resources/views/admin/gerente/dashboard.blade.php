@extends('admin.layouts.template')

@section('scripts')
<script>
    $(":file").filestyle({
        input: false,
        htmlIcon: '<span class="far fa-folder"></span> ',
        text: "Buscar archivo",
        btnClass: "btn-primary"
    });    
</script>
@endsection

