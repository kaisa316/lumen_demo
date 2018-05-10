<?php

namespace App\Http\Controllers;
use DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

	public function hello_world() {
		$result = app('db')->select('select * from car limit 1');
		//$result = DB::select('select * from test');
		return $result;
	}

    //
}
