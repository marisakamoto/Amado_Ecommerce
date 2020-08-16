<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //1 para n imagens
    public function imagemProdutos(){
        return $this->hasMany('App\ImagemProduto');
    }
}
