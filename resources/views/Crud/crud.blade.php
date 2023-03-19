<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel crud</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
                  <h4>Add New Record | Input</h4>
                  <hr>
                        @if (Session::get('Success'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('Success')}}
                                </div>
                        @endif

                        @if (Session::get('fail'))
                            <div class="alert alert-danger" role="alert">
                            {{Session::get('fail')}}
                            </div>
                        @endif

                  <form action="add" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="InputName" class="form-label">Name:</label>
                      <input type="text" name="name" class="form-control" id="InputName" value="{{old('name')}}">
                      <span style="color:red">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" value="{{old('email')}}">
                        <span style="color:red">@error('email'){{$message}}@enderror</span>
                      </div>
                    <div class="mb-3">
                      <label for="inputType" class="form-label">Type:</label>
                      <input type="text" name="type" class="form-control" id="inputType" value="{{old('type')}}">
                      <span style="color:red">@error('type'){{$message}}@enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
            </div>
        </div>
    </div>

</body>
</html>
