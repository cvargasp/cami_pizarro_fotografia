<?php

class Contact_Controller extends Base_Controller{

	public function action_formulario(){
		return View::make('contact');
	}

	public function action_contactar(){
		$nombre = Input::get('nombre');
		$email = Input::get('email');
		$comentario = Input::get('comentario');
		$numero = Input::get('numero');

		$mensaje=array("nombre"=>$nombre,"email"=>$email,"comentario"=>$comentario,"numero"=>$numero);
		$reglas = array(
			'nombre' => "required|min:6|alpha",
			'email' => "required|email",
			'comentario' => "required"
		);
		$mensajes = array(
			"required" => "El :attribute es obligatorio",
			"min" => "El :attribute debe tener minimo 6 caract.",
			"email" => "El :attribute debe ser un mail valido",
			"alpha" => "El :attribute debe contener letras"
		);
		$validar = Validator::make($mensaje,$reglas,$mensajes);

		if($validar->passes())
		{
			Message::send(function($message) use($email,$nombre,$comentario)
			{
			    $message->to('kmot13@gmail.com');
			    $message->from($email, $nombre);

			    $message->subject('Contacto Fotografias Cami - '.$nombre);
			    $message->body($comentario);
			});
			return Redirect::to('/');
			
		}else{
			return Redirect::to('/contact')
				->with_input()
				->with_errors($validar);
		}		
	}
}