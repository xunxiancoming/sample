<header class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			<a href="/" id="logo">Sample App</a>
			<nav>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
						<li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
								{{ Auth::user()->name }} <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('users.show',Auth::user()->id) }}">个人中心</a></li>
								<li><a href="{{ route('users.edit',Auth::user()->id) }}">编辑资料</a></li>
								<li class="divider"></li>
								<a href="#" id="logout">
									<form action="{{ route('logout') }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-sm btn-danger btn-block logout" type="submit" name="button">退出</button>
									</form>
								</a>
							</ul>
						</li>
					@else
						<li><a href="{{ route('help') }}">帮助</a></li>
						<li><a href="{{ route('login') }}">登录</a></li>
					@endif
				</ul>
			</nav>
		</div>
	</div>
</header>
