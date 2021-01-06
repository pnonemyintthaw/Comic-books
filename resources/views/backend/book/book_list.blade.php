@extends('backend')

@section('active')
  active
@endsection

@section('content')

 <main class="app-content">
     <div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i> Books </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <a href="{{route('book.create')}}" class="btn btn-outline-primary">
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
                              <th>Category</th>
                              <th>Authors</th>
                              <th>Price</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <?php
                      $j=1;
                      ?>

                     @foreach($books as $row)
                      <tr>
                        <td>{{$j++}}</td>
                        <td><img src="{{$row->photo}} " width="50px" height="50px">{{$row->name}}</td>

                        
                        <td>{{$row->category->name}}</td>
                        <td>{{$row->author->name}}</td>
                        
                        <td> 
                        <?php if($row->discount > 0):?>
                            <del class="d-block">{{$row->price}}MMK</del>
                            {{$row->discount}}MMk
                        <?php else: ?>
                            {{$row->price}}MMk
                        <?php endif ?>
                          
                       </td>



                      <td>
                        <a href="{{route('book.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('book.show',$row->id)}}" class="btn btn-success">Show</a>
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