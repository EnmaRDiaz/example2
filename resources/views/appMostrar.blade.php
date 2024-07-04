<div>
   <h1>Ingresa el piso y el area de el apartamento a cotizar:</h1>
   <form action="{{route('calcular.resultado')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="piso">Ingrese el Piso</label>
        <input type="number" min="1" max="12" id="piso" name="piso" value="1">
    </div>
    <div class="form-group">
        <label for="area">Ingrese el Area</label>
        <input type="number" min="1" name="area" id="area" required>
    </div>
    <button type="submit">Calcular</button>
   </form>
</div>
