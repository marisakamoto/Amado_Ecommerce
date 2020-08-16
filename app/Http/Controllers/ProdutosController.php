<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;
use App\ImagemProduto;

class ProdutosController extends Controller
{
    public function catalogo(){
        $produtos =  Produto::all();
        $imagensProdutos = ImagemProduto::all();
        
        return view('\shop',compact('produtos','imagensProdutos'));
    }

    public function index(){
        $produtos =  Produto::all();
        $imagensProdutos = ImagemProduto::all();
        
        return view('/index',compact('produtos','imagensProdutos'));
    }

    public function produto($id){
        $img = DB::table('ImagemProduto')->where('produto_id',$id)->get();
        return $img;
    }

}
