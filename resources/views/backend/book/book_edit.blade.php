@extends('backend')

@section('content')
  <main class="app-content">
   
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Book Edit Form</h2>
          <form method="post" action="{{route('book.update',$book->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control " value="{{$book->name}}">
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
                  <img src="{{asset($book->photo)}}" class="img-fluid" alt="">
                  <input type="hidden" name="oldphoto" value="{{$book->photo}}">
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
              <label>Price: </label>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Current</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount</a>
                </li>
              </ul>
              <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <input type="number" name="price" class="form-control" value="{{$book->price}}">
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <input type="number" name="discount" class="form-control" value="{{$book->discount}}">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Book pdf</label>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#old1" role="tab" aria-controls="home" aria-selected="true">Old pdf</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new1" role="tab" aria-controls="profile" aria-selected="false">New pdf</a>
                </li>
              </ul>
              <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="old1" role="tabpanel" aria-labelledby="home-tab">
                 <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="{{$book->pdf}}" allowfullscreen></iframe>
                </div>
                  <input type="hidden" name="oldpdf" value="{{$book->pdf}}">
                </div>
                <div class="tab-pane fade" id="new1" role="tabpanel" aria-labelledby="profile-tab">
                  <input type="file" name="pdf" class="form-control-file @error('photo') is-invalid @enderror">
                  @error('photo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>


            <div class="form-group">
              <label>page:</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="page" placeholder="Item Detail Description...">{{$book->page}}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>series:</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="series" placeholder="Item Detail Description...">{{$book->series}}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Description:</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Item Detail Description...">{{$book->description}}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>published:</label>
              <input type="date" name="published" value="{{$book->published}}">
            </div>

            <div class="form-group">
              <label>Author:</label>
              <select name="author" class="form-control">
                <optgroup label="Choose Brand">
                  @foreach($authors as $author)
                  <option value="{{$author->id}}">{{$author->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <label>Category:</label>
              <select name="category" class="form-control">
                <optgroup label="Choose Category">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </optgroup>
              </select>
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