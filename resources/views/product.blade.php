@extends('layouts.app')

@section('script')
    <script src="{{asset('/assets/js/product.js')}}"></script>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
@stop

@section('content')
    <div class="row">
    	<div class="col-xs-12"><button class="btn btn-info" @click="add_product">Agregar</button></div>
        <div class="col-xs-12">
            <producto class="table table-hover table-striped" :items="{{json_encode($products)}}"></producto>
        </div>
    </div>
    @include('includes.modal',['providers'=>$providers])
@stop