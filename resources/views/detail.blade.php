@extends('layouts.app')

@section('script')
    <script src="{{asset('/assets/js/app.js')}}"></script>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
@stop

@section('content')
    <div class="row">
        <div class="form-group col-xs-6">
            <label for="clave">Clave</label>
            <input type="text" name="clave" v-model="clave" id="clave">
        </div>
        <div class="form-group col-xs-6">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" v-model="nombre" id="nombre">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-6">
            <label for="tipo">Tipo de producto</label>
            <select name="tipo" v-model="tipo" id="tipo">
                <option></option>
            </select>
        </div>
        <div class="form-group col-xs-6">
            <div class="checkbox">
                <label>
                    <input type="checkbox" :checked="activo ? 'checked' : ''"> Activo
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <producto class="table table-hover table-striped"></producto>
        </div>
    </div>
@stop