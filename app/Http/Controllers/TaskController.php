<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TaskController extends Controller
{
    //
	public function index() {
		//$my = App\Task::all();
	//	$my = DB::table('tasks')->get();
		$my = App\Task::myfunc();
		return view('welcome', compact('my'));
	}
}
