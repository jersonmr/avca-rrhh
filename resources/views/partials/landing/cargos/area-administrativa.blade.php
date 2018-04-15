<h1 class="category-name">AREA ADMINISTRATIVA</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Cargo</th>
      <th>Sucursal</th>
      <th>Fecha de publicación</th>
    </tr>
  </thead>
  <tbody>
  @foreach($vacantes as $vacante)
    <tr>
      <td>{{ $vacante->titulo }}</td>
      <td>{{ $vacante->nombre }}</td>
      <td>{{ $vacante->fecha_publicacion }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
