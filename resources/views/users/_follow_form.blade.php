@can('follow',$user)
<div class="text-center mt-2 mb-4">
	@if(Auth::user()->isFollowing($user->id))
	<form action="{{ route('followers.destory',$user->id) }}" method="POST">
		{{csrf_field()}}
		{{method_field('DELETE')}}
		<button class="btn btn-sm btn-outline-primary" type="submit">取消关注</button>
	</form>
	@else
	<form action="{{ route('followers.store',$user->id) }}" method="POST">
		{{csrf_field()}}
		<button class="btn btn-primary btn-sm" type="submit">关注</button>
	</form>
	@endif
</div>
@endcan