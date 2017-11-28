<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class productController extends Controller{
	public function index(){
		$data = [
			'products'	=> DB::select('CALL get_products'),
			'types'		=> DB::select('CALL get_types')
		];
		return view('product',$data);
	}

	public function update(Request $request){
		$this->validate($request,[
			'data.clave' 	=> 'required|string',
			'data.nombre' 	=> 'required|string',
			'data.tipo' 	=> 'required|integer|min:1',
			'data.id' 		=> 'required|integer|min:1'
		]);
		$active = isset($request->input('data')['active']) && $request->input('data')['active'] > 0 ? 1 : 0;
		DB::statement('CALL update_product(
			' . $request->input('data')['id'] . ',
			' . $request->input('data')['tipo'] . ',
			"' . $request->input('data')['clave'] . '",
			"' . $request->input('data')['nombre'] . '",
			' . $active . 
		')');
	}

	public function provider(Request $request){
		if( $request->ajax() ){
			$this->validate($request,[
				'id' => 'required|integer|min:1'
			]);
			$data = DB::select('CALL get_provider(' . $request->input('id') . ')');
			return response()->json($data);
		}
	}

	public function delete(Request $request){
		if( $request->ajax() ){
			$this->validate($request,[
				'id' => 'required|integer|min:1'
			]);
			DB::statement('CALL delete_product(' . $request->input('id') . ')');
		}
	}

}
