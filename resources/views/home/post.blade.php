
 




@foreach($post as $post)
	
		<div class="div_deg">
				
				<h3  title="view his profile"><a href="{{url('view_profile',$post->user_id)}}">{{$post->username}} </a></h3>

				<p>{{$post->description}}</p>


				<img src="post/{{$post->image}}" height="400px" width="60%">



		</div>

@endforeach
