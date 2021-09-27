@extends('layouts.template')
@section('content')
@foreach ($productos as $producto)
      
        <div class="{{$producto->categoria}} menu-restaurant">
            <span class="clearfix">
            <img class="menu-img"  src="/imagen/{{$producto->imagen}}" class="img-responsive">
              <a class="menu-title" href="#" data-meal-img="assets/img/res01.jpg">{{$producto->nombre}}</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">${{$producto->precio}}</span>
            </span>
            <span class="menu-subtitle">{{$producto->descripcion}}</span>
          </div>


@endforeach               
@endsection