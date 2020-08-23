<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [ 'id'=>1, 'nome' => 'Cadeira moderna', 'descricao'=>'Cor branca, estilo minimalista, designer edição limitada','marca'=> 'Ikea', 'quantidade'=> 100, 'preco'=>500.99],
        );
        DB::table('produtos')->insert(
            [ 'id'=>2, 'nome' => 'Vaso com cacto', 'descricao'=>'Vaso de 10cm para enfeite de mesa','marca'=> 'Amado', 'quantidade'=> 50, 'preco'=>30.00] );
        DB::table('produtos')->insert(
            [ 'id'=>3, 'nome' => 'Banqueta', 'descricao'=>'Mesa minimalista alegre','marca'=> 'Ikea', 'quantidade' => 100, 'preco'=>89.99] );
        DB::table('produtos')->insert(
            [ 'id'=>4, 'nome' => 'Mesa de canto', 'descricao'=>'Mesa minimalista alegre','marca'=> 'Ikea', 'quantidade'=> 100, 'preco'=>500.99] );
        DB::table('produtos')->insert(    
            [ 'id'=>5, 'nome' => 'Cadeira de balanço', 'descricao'=>'Linda cadeira de ninar unissex','marca'=> 'Amado', 'quantidade'=> 100, 'preco'=>100.00] );
        DB::table('produtos')->insert(    
            [ 'id'=>6, 'nome' => 'Luminária em copor', 'descricao'=>'Luz de bar','marca'=> 'Ikea', 'quantidade'=> 100, 'preco'=>500.99] );
        
        
        
        
        




    }
}
