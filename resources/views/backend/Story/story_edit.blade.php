@extends('backend')

@section('content')
  <main class="app-content">
   
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Comic New Edit Form</h2>
          <form method="post" action="{{route('story.update',$story->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control " value="{{$story->name}}">
            </div>

            <div class="form-group">
              <label>Photo</label>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#old" role="tab" aria-controls="home" aria-selected="true">Old</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new" role="tab" aria-controls="profile" aria-selected="false">New</a>
                </li>
              </ul>
              <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="old" role="tabpanel" aria-labelledby="home-tab">
                  <img src="{{asset($story->photo)}}" class="img-fluid" alt="">
                  <input type="hidden" name="oldphoto" value="{{$story->photo}}">
                </div>
                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">
                  <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                  @error('photo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>


            <div class="form-group">
              <label>Description:</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Item Detail Description...">{{$story->description}}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            

           


            <div class="form-group">
              <input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection