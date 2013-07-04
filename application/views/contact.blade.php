@layout("master")
@section("content")
	@if($errors->has())
	<div class="container">
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
			<strong>ERROR:</strong> Completa los datos necesarios antes de continuar.
		</div>
	</div>
	@endif
	<div id="contact">
		<center>
			<h2>Contact</h2>
			<p>Si tienes cualquier duda o deseas realizar una cotización no dudes en escribirme.</p>
			
			{{Form::open('contact','POST')}}
			<label for="nombre"> Nombre:</label>
			@if($errors->has())
				<p class="alert alert-error">{{$errors->first('nombre')}}</p>
			@endif
			{{Form::text('nombre',Input::old('nombre'),array('class'=>'help-block'))}}<br>

			<label for="email"> Email:</label>
			@if($errors->has())
				<span style="color: red;"> {{$errors->first('email')}}</span>
				<br>
			@endif
			{{Form::text('email',Input::old('email'),array('class'=>'help-block'));}}<br>

			<label for="numero"> Numero (Opcional):</label>
			{{Form::text('numero',Input::old('numero'),array('class'=>'help-block'));}}

			<label for="comentario"> Comentario:</label>
			@if($errors->has())
				<span style="color: red;"> {{$errors->first('comentario')}}</span>
				<br>
			@endif
			{{Form::textarea('comentario',Input::old('comentario'),array('class'=>'textarea'))}}<br>

			{{Form::submit('Enviar',array('class'=>'btn btn-success'))}}

			{{Form::close()}}
		</center>
	</div>


<div id="contact">
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcamipizarrofoto&amp;width=292&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
</div>
@endsection