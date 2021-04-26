<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::with(['Cliente','Banco'])->get();
        //return Cuenta::get();
        return $cuentas;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = New Cuenta;
        $cuenta->numero = $request->input('numero');
        $cuenta->saldo = $request->input('saldo');
        $cuenta->id_cliente = $request->input('id_cliente');
        $cuenta->id_banco = $request->input('id_banco');

        $cuenta->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuenta $cuenta)
    {

      //  $cuenta->update($request->all());

      $cuenta = Cuenta::find($request->id);
      $cuenta->numero=$request->numero;
      $cuenta->saldo = $request->saldo;
      $cuenta->id_cliente = $request->id_cliente;
      $cuenta->id_banco = $request->id_banco;
      $cuenta->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuenta $cuenta)
    {
        $cuenta->delete();
    }

    public function agregarsaldocuenta(Request $request)
    {
        dd($request->all());
        $cuenta = Cuenta::find($request->id);

      $cuenta->saldo = $request->saldo;

      $cuenta->save();
    }
}
