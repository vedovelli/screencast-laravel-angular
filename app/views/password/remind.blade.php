@extends('layouts.main')

@section('content')

	<div class="row">
		<div class="col-md-offset3 col-md-3"></div>
		<div class="col-md-6">

			<div class="well spa-login-box">
				
				@include('layouts.partials.flash_messages')

				{{ Form::open(['action' => 'RemindersController@postRemind']) }}
					
					<div class="form-group">
						{{ Form::label('txtEmail', 'E-mail') }}
						{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'txtEmail']) }}
					</div>

					<div class="form-group">
						{{ Form::submit('Enviar link troca de senha', ['class' => 'btn btn-primary']) }}
					</div>

					{{link_to_route('login_path', '< voltar')}}
		 				
				{{ Form::close() }}
			</div>
		</div>
		<div class="col-md-offset3 col-md-3"></div>
	</div>

@stop