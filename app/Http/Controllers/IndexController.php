<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class IndexController extends Controller
{
	protected $name;
	protected $text;
	public function __construct() {
		$this->name = 'Добро пожаловать!!!';
		$this->text = 'В данном приложении Вы можете расчитать индекс массы тела';
	}
    public function index() {
		return view('page')->with(['name'=>$this->name,'text'=>$this->text]);
	}	 
}