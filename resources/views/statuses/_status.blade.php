<li class="media mt-4 mb-4">
	<a href="{{ route('users.show',$user->id ) }}">
		<img src="{{ $user->gravatar() }}"  class="mr-3 gravatar" alt="{{ $user->name }}">
	</a>

	<div class="media-body">
		<h5 class="mt-0 mb-1 col-md-8"><small>{{ $user->name }} / {{ $user->created_at->diffForHumans() }} </small></h5>
		<div style="clear: both" class="col-md-10">{{ $status->content }}</div>
		@can('destroy',$status)
		<form action="{{ route('statuses.destroy',$status->id )}}" method="POST" onsubmit="return confirm('确认删除本条微博吗？')">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<button type="submit" class="btn btn-sm btn-danger" style="float: right;" >删除</button>
		</form>
		@endcan
	</div>

</li>