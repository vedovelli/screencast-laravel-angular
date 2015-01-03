@extends('layouts.main')

@section('content')

	<div class="row">
		<div class="col-md-offset3 col-md-3"></div>
		<div class="col-md-6">

			<div class="well spa-login-box">

				@include('layouts.partials.flash_messages')

				{{ Form::open(['action' => 'login_path']) }}
					
					<div class="form-group">
						{{ Form::label('txtEmail', 'E-mail') }}
						{{ Form::email('email', null, ['class' => 'form-control', 'id' => 'txtEmail']) }}
					</div>

					<div class="form-group">
						{{ Form::label('txtPassword', 'Senha') }}
						{{ Form::password('password', ['class' => 'form-control', 'id' => 'txtPassword']) }}
					</div>
					
					<div class="form-group">
						{{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
						{{ Form::checkbox('remember_me', true, true, ['id' => 'chkRememberMe']) }}
						{{ Form::label('chkRememberMe', 'Lembrar-me') }}
					</div>

					{{link_to_action('RemindersController@getRemind', 'Esqueceu a senha?')}}
		 				
				{{ Form::close() }}
			</div>
		</div>
		<div class="col-md-offset3 col-md-3"></div>
	</div>

@stop