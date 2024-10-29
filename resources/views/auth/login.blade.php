<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>


 <div class="container">
   <form action="{{route('login-user')}}" method="post" style="width: 50%;border: 3px solid black;margin: 2%;padding: 2%;" >
    
    @csrf
        <div class="form-group">
            <label>Email</label>

            
            <input type="email" class="form-control"  placeholder="Email" name="email" value="">
             <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"  placeholder="Password" name="password" value="{{old('password')}}">
             <span class="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        
    </form>
</div>
</body>
</html>