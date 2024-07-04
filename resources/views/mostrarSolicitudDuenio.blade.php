<div>
    <table>
        <thead>
            <tr>
                <th>ID Dueño</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $duenioEncontrar->idDuenios }}</td>
                    <td>{{ $duenioEncontrar->nombre }}</td>
                    <td>{{ $duenioEncontrar->aprellido }}</td>
                    <td>{{ $duenioEncontrar->correo }}</td>
                </tr>
        </tbody>
    </table>
</div>
