{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers</title>
</head>
<body>
    <h1>Teachers</h1>
    @foreach ($teachers as $data)
        <p>{{$data->id . '.' .$data->name. ' ' .$data->religion}}</p>

    @endforeach
    {{-- <p>{{$teachers->id . '.' .$teachers->name. ' ' .$teachers->religion}}</p> --}}
    
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <h1>Hello, world!</h1>
      <div class="d-flex flex-wrap">
       @foreach ( $teachers as $data )
        <div class="d-flex justify-content-between">
            <div class="card mt-4 ms-5 col-12" style="width: 30rem;">
                <img src="" class="card-img-top" alt="">
                
                <div class="card-body ">
                    <h2 class="card-title">Card {{ $data->name }}</h2>
                    <p class="card-text">{{ $data->name }}</p>
                    <p class="card-text">{{ $data->age }}</p>
                    <p class="card-text">{{ $data->address }}</p>
                    <p class="card-text">{{ $data->phone }}</p>
                    <p class="card-text">{{ $data->email }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                 
            </div>
         </div>   
         @endforeach
      </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  
  </body>
</html>
