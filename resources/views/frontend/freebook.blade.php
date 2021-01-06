@extends('frontend')

@section('content')

<div class="container my-5 py-4">
      <h3 class="text-center product_style">{{$freebook->name}}</h3><br>

		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="{{$freebook->pdf}}" allowfullscreen></iframe>
		</div>
</div>
@endsection()