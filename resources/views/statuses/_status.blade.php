<li class="media mt-4 mb-4">
	<a href="{{ route('users.show',$user->id ) }}">
		<img src="{{ $user->gravatar() }}"  class="mr-3 gravatar" alt="{{ $user->name }}">
	</a>

	<div class="media-body">
		<h5 class="mt-0 mb-1"><small>{{ $user->name }} / {{ $user->created_at->diffForHumans() }} </small></h5>
		<div style="clear: both">{{ $status->content }}</div>
	</div>
</li>