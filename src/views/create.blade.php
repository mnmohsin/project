<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-2 mt-5">
                    <div class="card">
                        <div class="card-header">
                        <h1 class="font-italic border-2 text-danger">Student Form</h1>
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            {{-- @error('name')
                             <span class="text-danger">{{$message}}</span>
                             @enderror --}}
                            <br>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                            {{-- @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror --}}
                            <br>
                            <input type="text" name="age" class="form-control" placeholder="Age">
                            {{-- @error('age')
                            <span class="text-danger">{{$message}}</span>
                            @enderror --}}
                            <br>
                            <input type="text" name="password" class="form-control" placeholder="Password">
                            {{-- @error('Password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror --}}
                            <br><br>
                            <button type="submit" class="btn btn-danger ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
