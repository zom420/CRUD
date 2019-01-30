<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livro;

class LivrosController extends Controller{

	public function create(Request $request){
		$livros= new livro;
		$livros->titulo=$request->titulo;
		$livros->autor=$request->autor;
		$livros->editora=$request->editora;
		$livros->versao=$request->versao;
		$livros->anoDelancamento=$request->anoDelancamento;
		$livros->qtdEstoque=$request->qtdEstoque;
		$livros->qtdEmprestada=$request->qtdEmprestada;
		$livros->save();

		return response()->json ([$livros]);
	
	}
	

	public function list(){
		return livro::all();
	}

	public function update(Request $request, $id){

		$livros = livro::findOrFail($id);

		if($request->titulo)
			$livros->titulo=$request->titulo;
		if($request->autor)
			$livros->autor=$request->autor;
		if($request->editora)
			$livros->editora=$request->editora;
		if($request->versao)
			$livros->versao=$request->versao;
		if($request->anoDelancamento)
			$livros->anoDelancamento=$request->anoDelancamento;
		if($request->qtdEstoque)
			$livros->qtdEstoque=$request->qtdEstoque;
		if($request->qtdEmprestada)
			$livros->qtdEmprestada=$request->qtdEmprestada;
		$livros->save();

		return response()->json ([$livros]);
	}
}
