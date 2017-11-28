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

	public function provider(Request $request){
		if( $request->ajax() ){
			$this->validate($request,[
				'id' => 'required|integer|min:1'
			]);
			$data = DB::select('CALL get_provider(' . $request->input('id') . ')');
			return response()->json($data);
		}
	}

}
