<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Duenio;
use  App\Models\Propiedade;

define('VALOR_METRO', 1500);
define('VALOR_AUMENTO', 0.001);

class ApartamentoController extends Controller
{
    public function appcalcular (){
        return view('appMostrar');
    }

    public function calcular (Request $request){
        $piso = $request->piso;
        $area = $request->area;
        $aumento = VALOR_AUMENTO*VALOR_METRO; 
        $resultado = $aumento*$piso-1 + VALOR_METRO*$area;
        return view('mostrarCalculo', compact('resultado', 'piso', 'area'));
    }

    public function mostrarDuenios (){
        $duenios = Duenio::all();
        return view('mostrarD', compact('duenios'));
    }

    public function mostrarPropiedades (){
        $propiedades = Propiedade::all();
        return view('mostrarP', compact('propiedades'));
    }

    public function formDuenio (){
        return view('agregarDuenio');
    }

    public function insertarDuenio (Request $request){
        $nuevoDuenio = new Duenio();
        $nuevoDuenio->nombre = $request->nombre;
        $nuevoDuenio->aprellido = $request->apellido;
        $nuevoDuenio->correo = $request->correo;
        $nuevoDuenio->save(); 
        return view('estadoInsertar', compact('nuevoDuenio'));
    }

    public function solicitarDuenio (){
        return view('solicitarDuenio');
    }

    public function mostrarDuenio (Request $request){
        $idDuenio = $request->idDuenio;
        $duenioEncontrar = Duenio::find($idDuenio);
        //echo $duenioEncontrar;
        return view('mostrarSolicitudDuenio', compact('duenioEncontrar'));
        //$ejemplo = Duenio::find(1);
        //echo $ejemplo;
    }

    public function viewModificarDuenio ($id){
        $duenioEditar = Duenio::find($id);
        return view('modificarDuenio', compact('duenioEditar', 'id'));
    }

    public function salvarModificarDuenio (Request $request, $idDuenio){
        $duenioGuardar = Duenio::find($idDuenio);
        $duenioGuardar->nombre = $request->nombre;
        $duenioGuardar->aprellido = $request->apellido;
        $duenioGuardar->correo = $request->correo;
        //echo $duenioGuardar;
        $duenioGuardar->save();
        return redirect('/apartamento/duenios');
    }

    public function borrarDuenio ($id){
        $duenioBorrar = Duenio::find($id);
        $duenioBorrar->delete();
        return redirect('/apartamento/duenios');
    }
}
