@extends('frontend')


@section('content')



<div class="container my-5">
  <h3 class="text-center product_style" id="big"> Latest Book</h3>
	  <div class="row mt-5">
			 @foreach($books as $row)
			    <div class="col-sm-6 col-md-4 col-lg-3 text-center my-5">
			      <img src="{{$row->photo}}" class="img-fluid rounded bestimg" width="250px" height="200px">
			      <h5 class="mt-4" id="tiny"> {{$row->name}}</h5>
			      <a href="{{route('bookdetail',$row->id)}}" class="btn btn-success"> Details</a>         
			    </div>
			 @endforeach

	 </div>
    
	<hr class="divide">

	<div class="Container mb-5">
		 <h3 class=" product_style mb-5" id="padding" id="big">Latest Article</h3>
		 
		 @foreach($stories as $story)

		 <div class="row">
		 	<div class="col-md-6">
		 		<img src="{{$story->photo}}" class="mr-5 img-fluid" alt="..." width="400px" height="200px">
		 	</div>
		 	<div class="col-md-6">
		 		<h5>{{$story->name}}</h5>
				  {{$story->description}}
		 	</div>

		 </div>
		 <br>
		 <hr class="divide">
	@endforeach
		
	</div>

	<hr class="divide">

	<h3 class="text-center product_style mt-5"> Free Book</h3>
	  <div class="row mt-5 ">
			 @foreach($freebooks as $freebook)
			    <div class="col-sm-6 col-md-4 col-lg-3 text-center my-5">
			      <img src="{{$freebook->photo}}" class="img-fluid rounded bestimg" width="250px" height="200px">
			      <h5 class="mt-4" id="tiny"> {{$freebook->name}}</h5>
			      <a href="{{route('freebook',$freebook->id)}}" class="btn btn-success">Read</a>
			    </div>
			 @endforeach

	 </div>


</div>

@endsection