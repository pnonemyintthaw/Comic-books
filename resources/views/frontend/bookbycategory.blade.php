@extends('frontend')

@section('content')

<div class="container my-5 py-4">
      <h3 class="text-center product_style">- Comic List -</h3><br>

      <div class="text-center">
            {{-- <a href="" class="btn btn-light ">All</button></a> --}}

            
            @foreach($mycategories as $category)

            <a href="{{route('bookbycategory',$category->id)}}" class="btn btn-light" id="button">{{$category->name}}</a>
            @endforeach
      </div>
</div>

<div class="container">
<div class="row mt-5 ">
       @foreach($categories->books as $book )
          <div class="col-sm-6 col-md-4 col-lg-3 text-center my-5">
            <img src="{{$book->photo}}" class="img-fluid rounded bestimg" width="250px" height="200px">
            <h5 class="mt-4" id="tiny"> {{$book->name}}</h5>
            <a href="{{route('bookdetail',$book->id)}}" class="btn btn-success"> Details</a>
          </div>
       @endforeach

   </div>
</div>

@endsection