@extends("backend")

@section('content')

<main class="app-content">
      <div class="app-title">
       <div>
        <h1> <i class="icofont-list"></i> Categories </h1>
    </div>
        <ul class="app-breadcrumb breadcrumb side">
        <a href="{{route('category.create')}}" class="btn btn-outline-primary">
            <i class="icofont-plus">Add New</i>       
        </a>
    </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h2>Category Details</h2>
            

            <p>{{$category->name}}</p>
            
          </div>
        </div>
      </div>
    </main>
    @endsection