@extends('layouts.layoutBase')

@section('activeShop')
    active
@endsection

@section('principal')

    @foreach($produtos as $p)
        <p>{{$p->nome}}</p>
        <p>{{$p->descricao}}</p>
        <p>{{$p->marca}}</p>
        <p>{{$p->preco}}</p>
        <p>{{$p->quantidade}}</p>
        {{$caminhoDaImagem = App\Produto::find()->imagensProdutos()->where('produto_id','=',1)}}
        <p></p>
    @endforeach

    @foreach ($imagensProdutos as $img )
        <img src="{{url($img->caminhoDaImagem)}}" alt="">
        
    @endforeach

@endsection('principal')