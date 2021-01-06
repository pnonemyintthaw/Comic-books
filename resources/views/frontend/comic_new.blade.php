
@extends('frontend')

@section('content')

<div class="container my-5 py-4">

    <div class="Container">
         <h3 class=" product_style mb-5 text-center" id="padding" id="big">- Comic New -</h3>
         
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
</div>

	


@endsection