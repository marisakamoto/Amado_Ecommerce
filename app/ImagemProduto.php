<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemProduto extends Model
{
    public function Produto(){
        return $this->belongsTo('App\Produto');
    }
}
