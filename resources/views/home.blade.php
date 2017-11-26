@extends('layouts.app')

@section('script')
    <script src="{{asset('/assets/js/app.js')}}"></script>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
@stop

@section('content')
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <a href="{{url('/productos')}}" class="btn btn-large btn-success">Productos</a>
        </div>
    </div>
@stop