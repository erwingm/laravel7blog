
  @extends('layout')  
  @section('content')
      
  <div class="main-wrapper">
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
					@foreach ($posts as $post)
						<div class="item mb-5">
							<div class="media">
								<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-1.jpg" alt="image">
								<div class="media-body">
									<h3 class="title mb-1"><a href="blog-post.html">{{$post->title}}</a></h3>
									{{-- $post->published_at->diffForHumans() para publicar por horas --}}
									<span style="
										font-size:14px;
										background:#e91e63;
										color:#fff;
										display:inline-block;
										padding:4px 10px;
										border-radius:15px;
								">{{$post->category->name}}</span>
									<div class="meta mb-1"><span class="date">{{$post->published_at->format(' M d')}}</span>@foreach($post->tags as $tag)<span class="time">{{$tag->name}}</span>@endforeach<span class="comment"><a href="#">8 comments</a></span></div>
									<div class="intro">{{$post->description}}</div>
									<a class="more-link" href="blog-post.html">Read more &rarr;</a>
								</div><!--//media-body-->
							</div><!--//media-->
						</div><!--//item-->
					@endforeach
			  
			    
			    <div class="item">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{asset('frontend/images/blog/blog-post-thumb-6.jpg')}}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html">About Remote Working</a></h3>
						    <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">2 min read</span><span class="comment"><a href="#">1 comment</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
				</div>
				<section class="cta-section theme-bg-light py-5">
					<div class="container text-center">
						<h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
						<div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
						<form class="signup-form form-inline justify-content-center pt-3">
											<div class="form-group">
													<label class="sr-only" for="semail">Your email</label>
													<input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
											</div>
											<button type="submit" class="btn btn-primary">Subscribe</button>
									</form>
					</div><!--//container-->
				</section>
	    </section>
@endsection