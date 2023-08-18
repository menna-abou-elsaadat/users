<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <script src="{{asset('assets/scripts.js')}}"></script>
    
    <body class="container">
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
                    <div id="display_image"></div>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group col-lg-3 col-sm-1" style="margin-top: 2%;">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
            
            
        </form>
    </body>
</html>