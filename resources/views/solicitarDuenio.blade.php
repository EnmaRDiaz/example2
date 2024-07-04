<div>
    <h1>Ingrese El identificador del dueño</h1>
    <form action="{{ route('apartamento.mostrarDuenio') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="idDuenio">ID Dueño:</label>
            <input type="text" name="idDuenio" id="idDuenio" required>
        </div>
        <button type="submit">Solicitar</button>
    </form>
</div>