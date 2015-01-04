@extends('layouts.login')

@section('content')

	<div class="row">
		<div class="col-md-offset3 col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default spa-login-box">
				<div class="panel-heading">
					<h3 class="panel-title">Escolha sua nova senha</h3>
				</div>
				<div class="panel-body">
					@include('layouts.partials.flash_messages')

					{{ Form::open(['action' => 'RemindersController@postReset']) }}
						
						{{ Form::hidden('token', $token)}}

						<div class="form-group">
							{{ Form::label('txtEmail', 'E-mail') }}
							{{ Form::email('email', Session::get('email'), ['class' => 'form-control', 'id' => 'txtEmail']) }}
						</div>

						<div class="form-group">
							{{ Form::label('txtPassword', 'Senha') }}
							{{ Form::password('password', ['class' => 'form-control', 'id' => 'txtPassword']) }}
						</div>

						<div class="form-group">
							{{ Form::label('txtPasswordConfirmation', 'Confirmação da Senha') }}
							{{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'txtPasswordConfirmation']) }}
						</div>

						<div class="form-group">

							{{ Form::submit('Trocar senha', ['class' => 'btn btn-primary']) }}

						</div>
			 				
					{{ Form::close() }}				
				</div>
			</div>
		</div>
		<div class="col-md-offset3 col-md-3"></div>
	</div>

@stop