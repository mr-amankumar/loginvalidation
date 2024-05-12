<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 style="color: blueviolet">Add New Employee</h3>
           {{-- <pre>          
             @php
               print_r($errors->all()) 
            @endphp --}}
            {{-- </pre> --}}
 
            {{-- @if($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                   <li>{{$error}}</li> 
                @endforeach
            </ul>
            @endif --}}
            <form action="{{route('add.user')}}" method="post">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}"  class="form-control @error('name') is-invalid @enderror">
                    <span class="danger text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{old('email')}}"  class="form-control  @error('email') is-invalid @enderror">
                   <span class="danger text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                   </span>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" value="{{old('password')}}"  class="form-control  @error('password') is-invalid @enderror">
                   <span class="danger text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                   </span>
                </div>

                <div>
                    <label for="age">Age</label>
                    <input type="number" name="age"  value="{{old('age')}}"   class="form-control  @error('age') is-invalid @enderror ">
                    <span class="danger text-danger">
                        @error('age')
                        {{$message}}
                        @enderror
                    </span>
                </div>


                <div>
                    <label class="form-label">City</label>
                    <select name="empCity" class="form-control @error('empCity') is-invalid @enderror">
                        <option value="Delhi">Delhi</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Mumbai">Goa</option>

                    </select>
                        <span class="danger text-danger">
                            @error('empCity')
                            {{$message}}
                            @enderror
                        </span>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
  </div>
</body>
</html>