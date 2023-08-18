<nav>
	<label class="logo"><a href="{{url('/')}}">BlogWeb </a></label>

	<ul>
		<li>
			<a href="" class="menu"  >Home</a>
		</li>

		<li>
			<a href="" class="menu"  >Contact</a>
		</li>

		@if (Route::has('login'))


			@auth 

			<li>
			<a href="{{ url('/dashboard') }}" class="btn btn-success">{{ Auth::user()->name }}</a>
			</li>


			@else

		<li>
			<a href="{{ route('register') }}" class="btn btn-success">Register</a>
		</li>
		<li>
			<a href="{{ route('login') }}" class="btn btn-primary">Login</a>
		</li>

		 @endauth

		@endif

	</ul>
</nav>