@extends('layouts.app')

@section('script')
    <script src="{{asset('/assets/js/product.js')}}"></script>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <producto class="table table-hover table-striped"></producto>
        </div>
    </div>
@stop