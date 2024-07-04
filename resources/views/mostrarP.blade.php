<div>
    <table>
        <thead>
            <tr>
                <th>Numero de Registro</th>
                <th>Piso</th>
                <th>Tamaño de Apartamento</th>
                <th>Color</th>
                <th>ID de Dueño</th>
                <th>Estado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propiedades as $propiedade)
                <tr>
                    <td>{{ $propiedade->id }}</td>
                    <td>{{ $propiedade->piso }}</td>
                    <td>{{ $propiedade->area }}</td>
                    <td>{{ $propiedade->color }}</td>
                    <td>{{ $propiedade->idDuenio }}</td>
                    <td>{{ $propiedade->estado }}</td>
                    <td>
                        Editar
                    </td>
                    <td>
                        Eliminar
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
