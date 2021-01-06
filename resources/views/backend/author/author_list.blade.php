@extends('backend')

@section('active')
  active
@endsection

@section('content')

 <main class="app-content">
     <div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i> Authors </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <a href="{{route('author.create')}}" class="btn btn-outline-primary">
            <i class="icofont-plus">Add New</i>       
        </a>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTable" id="sampleTable">
                        <thead>
                            <tr>
                              <th>no</th>
                              <th>Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <?php
                      $j=1;
                      ?>

                      @foreach($authors as $row)

                      <tr>
                        <td>{{$j++}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                          <a href="{{route('author.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                          <a href="{{route('author.show',$row->id)}}" class="btn btn-success">Show</a>
                        </td>
                      </tr>

                      @endforeach

                      <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div> 
    </main>
@endsection