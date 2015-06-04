@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				@if
				<div class="panel-body">
					You are logged in!
				</div>
				@else
				<div class="panel-body">
					You are not logged in! Please register and login!
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@stop
