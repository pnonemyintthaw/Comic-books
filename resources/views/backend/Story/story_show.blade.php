@extends("backend")

@section('content')

<main class="app-content">
      <div class="app-title">
       <div>
        <h1> <i class="icofont-list"></i>Comic New </h1>
    </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="{{route('story.create')}}" class="btn btn-outline-primary">
            <i class="icofont-plus">Add New</i>       
        </a>
    </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h2>Comic New Details</h2>
            
            <p>{{$story->name}}</p>

            <img src="{{$story->photo}}">
            
            <P>{{$story->description}}</P>
            
          </div>
        </div>
      </div>
    </main>
    @endsection