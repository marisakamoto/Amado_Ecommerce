<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Imagem_ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { for($i=1; $i < 7 ; $i++){
        DB::table('imagem_produtos')->insert(
                [ 'id'=>$i, 'caminhoDaImagem' => '/img/product-img/product'.$i.'.jpg', 'produto_id'=>$i ]
        );
        }
        // for($i=1; $i < 4 ; $i++){
        //     DB::table('imagem_produtos')->insert(
        //     [ 'id'=>$i, 'caminhoDaImagem' => './img/product-img/product'.$i, 'produto_id'=>$i ]
        //     );
    }
}