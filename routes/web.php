<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartamentoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/apartamento/appcalcular',
[ApartamentoController::class, 'appcalcular']);

Route::post('/apartamento/appcalcular/resultado',
[ApartamentoController::class, 'calcular'])->name('calcular.resultado');

Route::get('/apartamento/duenios',
[ApartamentoController::class, 'mostrarDuenios'])->name('apartamento.duenios');

Route::get('/apartamento/propiedades',
[ApartamentoController::class, 'mostrarPropiedades']);

Route::get('/apartamento/nuevoduenio',
[ApartamentoController::class, 'formDuenio'])->name('apartamento.formduenio');

Route::post('/apartamento/agregarduenio',
[ApartamentoController::class, 'insertarduenio'])->name('apartamento.agregarduenio');

Route::get('/apartamento/solicitarduenio',
[ApartamentoController::class, 'solicitarDuenio']);

Route::post('/apartamento/mostrarduenio',
[ApartamentoController::class, 'mostrarduenio'])->name('apartamento.mostrarDuenio');

Route::get('/apartamento/viewModificarDuenio/{idDuenio}',
[ApartamentoController::class, 'viewModificarDuenio'])->name('apartamento.modificar.duenio');

Route::get('/apartamento/salvarModificarDuenio/{idDuenio}',
[ApartamentoController::class, 'salvarModificarDuenio'])->name('apartamentos.duenios.salvar');

Route::get('/apartamento/borrarDuenio/{idDuenio}',
[ApartamentoController::class, 'borrarDuenio'])->name('apartamento.borrar.duenio');