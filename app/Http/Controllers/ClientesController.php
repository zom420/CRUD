<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller{

	public function create(Request $request){
	    $cliente=new Cliente;
	    $cliente->name=$request->nome;
	    $cliente->email=$request->email;
	    $cliente->telefone=$request->telefone;
	    $cliente->data_de_nascimento=$request->data_nascimento;
	    $cliente->cpf=$request->cpf;
	    $cliente->save();
	    return response()->json ([$cliente]);
	}
}




