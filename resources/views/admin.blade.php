<x-app-layout>
  <form action="{{route('paradas.store')}}" method="POST">
    @csrf
    <label>
      Nombre:
      <input type="text" name="nombre_parada">
    </label>
    <br />
    <label>
      Latitud:
      <input type="text" name="lat">
    </label>
    <br />
    <label>
      Longitud:
      <input type="text" name="lng">
    </label>
    <br />
    <label>
      Ruta:
      <input type="text" name="ruta">
    </label>
    <br />
    <button type="submit" name="enviar">enviar</button>
  </form>
</x-app-layout>