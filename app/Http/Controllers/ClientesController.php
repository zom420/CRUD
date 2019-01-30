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

	public function list(){
		return cliente::all();
	}

	public function update(Request $request, $id){
		$cliente = Cliente::findOrFail($id);
		if($request->name)
			$cliente->name = $request->name;
		if($request->email)
			$cliente->email = $request->email;
		if($request->telefone)
			$cliente->telefone = $request->telefone;
		if($request->data_de_nascimento)
			$cliente->data_de_nascimento = $request->data_nascimento;
		if($request->cpf)
			$cliente->cpf = $request->cpf;
			return response()->json ([$cliente]);
	}
}



