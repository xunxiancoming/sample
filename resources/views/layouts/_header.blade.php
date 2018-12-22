<header class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			<a href="/" id="logo">Sample App</a>
			<nav>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
					<li class="nav-item"><a href="#">用户列表</a></li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
							{{ Auth::user()->name }} <b class="caret"></b>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-center" href="{{ route('users.show',Auth::user()->id) }}">个人中心</a><br>
							<a class="dropdown-item text-center" href="{{ route('users.edit',Auth::user()->id) }}">编辑资料</a>
							
							<a href="#" id="logout" class="dropdown-item">
								<form action="{{ route('logout') }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
								</form>
							</a>
							
						</div>
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
