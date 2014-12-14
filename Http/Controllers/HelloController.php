<?php namespace Modules\Hello\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class HelloController extends Controller {

	public function index()
	{
		return View::make('hello::index');
	}
	
}