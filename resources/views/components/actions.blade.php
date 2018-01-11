<div class="btn-group">
	{{ $prepend_actions or '' }}
	<a class="btn btn-sm btn-primary" href=" {{ route('users.edit', $user->id) }} ">Edit</a>
	<a class="btn btn-sm btn-info" href=" {{ route('users.show', $user->id) }} ">View</a>

	<a class="btn btn-sm btn-danger" 
		href="{{ route('users.destroy', $user->id) }}"
		onclick="event.preventDefault();if(confirm('Are you sure want to delete this user?')){document.getElementById('destroy-user-form-{{ $user->id }}').submit()}">
		Delete
	</a>
	<form id="destroy-user-form-{{ $user->id }}" 
		action="{{ route('users.destroy', $user->id) }}"
		method="POST" style="display:none">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}		
	</form>
	{{ $append_actions or '' }}
</div>