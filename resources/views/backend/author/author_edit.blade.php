@extends("backend")

@section('content')
<main class="app-content">


<div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Author Edit Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="" class="btn btn-outline-primary">
                        <i class="icofont-double-left">Back</i>
                    </a>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{route('author.update',$author->id)}}" method="POST" >
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name_id" name="name" 
                                        value="{{$author->name}}">
                                      @error('name')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                              </div>

                             

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icofont-save"></i>
                                            Update
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </main>

@endsection
