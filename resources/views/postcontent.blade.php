@extends('mytheme')
@section('content')

<div class="box alt container">
@foreach ($blogs as $blog)

					<section class="feature left">
						<a href="#" class="image icon fa-signal"><img src={{$blog->image}} alt="" /></a>
						<div class="content">
							<h3>{{$blog->title}}</h3>
							<p>{{$blog->data}}</p>
						</div>
					</section>
					
				
@endforeach
</div>			
@endsection                