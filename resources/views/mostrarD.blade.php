<div>
    <table>
        <thead>
            <tr>
                <th>ID Dueño</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($duenios as $duenio)
                <tr>
                    <td>{{ $duenio->idDuenios }}</td>
                    <td>{{ $duenio->nombre }}</td>
                    <td>{{ $duenio->aprellido }}</td>
                    <td>{{ $duenio->correo }}</td>
                    <td>
                        <a href="{{route('apartamento.modificar.duenio', $duenio->idDuenios)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('apartamento.borrar.duenio', $duenio->idDuenios)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('apartamento.formduenio')}}">Agregar</a>
</div>
