@if(Session::has('status'))
<div class="alert alert-dismissible alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('status')}}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-dismissible alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('error')}}
</div>
@endif