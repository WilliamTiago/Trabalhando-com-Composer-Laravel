<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select("SELECT * FROM produtos");
		return view('produto.listagem')->withProdutos($produtos);
    }

	public function mostra(){
		//$id = Request::input('id', '1');
		$id = Request::route('id');
		$resposta = DB::select("select * from produtos where id = ?",[$id]);
		if(empty($resposta)){
			return "Esse produto não existe";
		}

		return view('produto.detalhe')->with('p', $resposta[0]);
	}

}