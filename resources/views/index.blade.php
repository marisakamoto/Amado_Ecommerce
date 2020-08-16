@extends('layouts.layoutBase')


@section('activeHome')
    active
@endsection


@section('principal')
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
<div class="amado-pro-catagory clearfix">


@foreach ($produtos as $p )
<!-- Single Catagory -->
<div class="single-products-catagory clearfix">
    <a href="/shop">
        <img src="{{$p->imagemProdutos[0]->caminhoDaImagem}}" alt="">
        <!-- Hover Content -->
        <div class="hover-content">
            <div class="line"></div>
            <p>A partir de R${{$p->preco}}</p>
        <h4>{{$p->nome}}</h4>
        </div>
    </a>
    </div>
@endforeach


</div>
</div>
<!-- Product Catagories Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->

@endsection('principal')