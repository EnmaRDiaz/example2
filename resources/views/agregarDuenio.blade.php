<div>
    <h1>Ingresa lo datos del nuevo dueño:</h1>
    <form action="{{route('apartamento.agregarduenio')}}" method="POST">
     @csrf
     <div class="form-group">
         <label for="nombre">Ingrese el Nombre:</label>
         <input type="text" id="nombre" name="nombre" required>
     </div>
     <div class="form-group">
         <label for="apellido">Ingrese el Apellido:</label>
         <input type="text" name="apellido" id="apellido" required>
     </div>
     <div class="form-group">
        <label for="correo">Ingrese el Correo:</label>
        <input type="correo" name="correo" id="correo" required>
    </div>
     <button type="submit">Ingresar</button>
    </form>
</div>
