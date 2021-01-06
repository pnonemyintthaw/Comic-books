@extends('backend')

@section('active')
  active
@endsection

@section('content')

 <main class="app-content">
     <div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i> Comic New </h1>
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
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTable" id="sampleTable">
                        <thead>
                            <tr>
                              <th>no</th>
                              <th>Name</th>
                              <th>description</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        $j=1;
                        ?>
                        @foreach($stories as $row)
                        <tr>

                        <td>{{$j++}}</td>
                        <td>{{$row->name}}
                            <img src="{{$row->photo}}" class="img-fluid"></td>
                        <td>{{$row->description}}</td>

                       

                        <td>
                          <a href="{{route('story.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                          <a href="{{route('story.show',$row->id)}}" class="btn btn-success">Show</a>
                        </td>
                      </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div> 
    </main>
@endsection