<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Dueño</title>
</head>
<body>
    <div>
        <form action="{{route('apartamentos.duenios.salvar', $id)}}" method="PUT">
            @method ('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">Ingrese el nombre:</label>
                <input type="text" name="nombre" value="{{$duenioEditar->nombre}}" id="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Ingrese el apellido:</label>
                <input type="text" name="apellido" value="{{$duenioEditar->aprellido}}" id="apellido">
            </div>
            <div class="form-group">
                <label for="correo">Ingrese el Correo:</label>
                <input type="correo" name="correo" value="{{$duenioEditar->correo}}" id="correo">
            </div>
            <button type="submit">Modificar</button>
        </form>
    </div>
</body>
</html>