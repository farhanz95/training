@extends('layouts.app')

@section('content')
	<div class="pull-left">
		There Are Currently {{ $users->total() }} users
		
		<br>

		No Of Users To Appear On Each Page
		<select name="perPage" class="form-control" width="20px !important">
			@foreach (['15','30','45','60','75','90'] as $key => $value)
				 <option>{{ $value }}</option>
			@endforeach
		</select>
	</div>
	<div class="pull-right">
		{{ $users->links() }}
	</div>
	@component('components.table')
		@slot('thead')
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Action</th>
			</tr>
		@endslot
		@slot('tbody')
			@forelse($users as $key => $user)
			<tr>
				<td>
					{{
						($users->currentPage() * $users->perPage() - $users->perPage())+($key+1)
					}}
				</td>
				<td>{{ $user->name  }}</td>
				<td>{{ $user->email }}</td>
				<td>@include('components.actions')</td>
			</tr>
			@empty
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			@endforelse
		@endslot
	@endcomponent
@endsection