{{Form::open_for_files('subir','POST')}}

{{Form::file('image')}}

{{Form::submit('Enviar',array('class'=>'btn btn-success'))}}

{{Form::close()}}