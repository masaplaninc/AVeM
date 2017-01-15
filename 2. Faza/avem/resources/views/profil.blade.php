   @include('layouts.gl')
	<body>
	   @include('layouts.nav')
		<div class="ogrodje">
		  
		    <!-- levo-->
		    <div class="pLevo">
		        <div class="slika">
            <img src="/slike/{{ $user->avatar }}">
            <a href="{{ url('/urediprofil') }}"><img src="../ikone/urediprofil.png" alt="urediprofil"></a>
            <h2>{{ $user->username }}</h2>
             </div>
		        <div class="omeni">
		          <ul>
		          		<li class="beseda">{{ $user->aboutme }}</li>
		         	</ul>
		        </div>
		      	<div class="zanimanja">
		          	<h3><b>Najboljši angleški filmi</b></h3>
		          	<ul>
		          		<li class="beseda">{{ $user->films }}</li>
		         	</ul>
		        </div>
		   
		        <div class="zanimanja">
		          	<h3><b>Najboljša angleška glasba</b></h3>
		          	<ul>
		          		<li class="beseda">{{ $user->music }}</li>
		         	</ul>

		        </div>

		        <div class="zanimanja">
		          	<h3><b>Najboljša angleška literatura</b></h3>
		        	<ul>
		        		<li class="beseda">{{ $user->literature }}</li>
		         	</ul>
		        </div>
		    </div>

		    <!-- desno -->
		    <div class="pDesno">
		    
		      <div class="mojeObjave">
		        <h2 style="text-align: center;">Moje objave</h2>
		        @foreach ($posts as $post)
		        	@if ($user->id === $post->user_id)

			        <div class="napisal">
			        	<h6> <a href="{{ route('posts.edit',$post->id) }}"><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6></a>
						<h5><a href="{{ route('posts.show',$post->id) }}"><b>{{$post->title}}</b></a></h5>
						<h4>{{$post->created_at}}</h4>
						<p class="beseda" style="float: left;">{!! $post->content !!}</p>
			        </div>
                    @endif
			    @endforeach
			    @foreach ($ideas as $idea)
		        	@if ($user->id === $idea->user_id)

			        <div class="napisal">
			        	<h6> <a href="{{ route('ideas.edit',$idea->id) }}"><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6></a>
						<h5><a href="{{ route('ideas.show',$idea->id) }}"><b>{{$idea->title}}</b></a></h5>
						<h4>{{$idea->created_at}}</h4>
						<p class="beseda" style="float: left;">{!! $idea->content !!}</p>
			        </div>
                    @endif
			    @endforeach
			    @foreach ($problems as $problem)
		        	@if ($user->id === $problem->user_id)

			        <div class="napisal">
			        	<h6> <a href="{{ route('problems.edit',$problem->id) }}"><img src="../ikone/uredi.png" title="uredi" alt="uredi"></h6></a>
						<h5><a href="{{ route('problems.show',$problem->id) }}"><b>{{$problem->title}}</b></a></h5>
						<h4>{{$problem->created_at}}</h4>
						<p class="beseda" style="float: left;">{!! $problem->content !!}</p>
			        </div>
                    @endif
			    @endforeach
		      </div>

		    </div>

		</div>

	</body>
</html>
