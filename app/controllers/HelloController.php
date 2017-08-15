<?php
class HelloController extends BaseController
{
	public function showIndex($name='%userName%')
	{
		return View::make('hello.index', array('userName'=>$name));
	}
	public function showForm()
	{
		return View::make('form.index');
	}
	public function postForm()
	{
		return Redirect::to('blade');
		//return View::make('hello.post', array('name' => Input::get('name')));
	}
	public function showBlade()
	{
			return View::make('hello.blade', array('list'=>array(1,2,3,4,5), 'item' =>'my text', 'ival'=>100));
	}
	public function getAction()
	{
			return View::make('hello.my-form');
	}
	public function postMyForm()
	{
			return print_r(Input::all(),true);
	}
	



}
?>
