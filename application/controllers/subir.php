<?php
class Subir_Controller extends Base_Controller{

	public function action_formSubir(){
		return View::make('load_photos');
	}

	public function action_subir(){
		$filename = Str::random(29) . '.' . File::extension(Input::file('image.name'));
 
		Input::upload('image', path('public').'uploads', $filename);
		 
		Image::create(array(
		        'path' => $filename
		));
	}
}