 @extends('layouts.app')
 @section('content')

 <form action="{{route('create.user')}}" enctype="multipart/form-data" method="post" >
            @csrf
            <div class="row">
                <div class="form-group col-lg-3 col-sm-1">
                    <label for="first_name">First name:</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" required>
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-lg-3 col-sm-1">
                    <label for="last_name">Last name:</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" required>
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-lg-3 col-sm-1">
                    <label for="image">Image:</label>
                    <input class="form-control" id="image_input" type="file" name="image" accept="image/jpg, image/png, image/jpeg">
                    <div id="display_image" class="img-thumbnail"></div>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group col-lg-3 col-sm-1 col-md-1" style="margin-top: 2%;">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>  
        </form>
@endsection