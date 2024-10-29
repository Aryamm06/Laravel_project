<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    .img:hover{
        border: 5px solid black;
    }
   

</style>
<body>
    @include('navbar')
    
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div  class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('img/mygallery.png') }}"class="img-fluid" >
           
     </div>

    </div>
</div> <br><br>

<!--  -->
<center>
<div class="container">
    <div class="row">

        <div class="col-md-4"> 
            <div class="zoom">
            <img src="{{ asset('img/g1.jpg') }}" width="300px" height="250px" class="img">
            </div>
        </div>

        <div class="col-md-4">
            <div class="zoom">
            <img src="{{ asset('img/g2.jpg') }}" width="300px" height="250px" class="img" >
            </div>
        </div>

        <div class="col-md-4">
            <div class="zoom">
            <img src="{{ asset('img/g3.jpg') }}" width="300px" height="250px" class="img">
            </div>
        </div>

        
    </div>
  </div> <br>


  <div class="container">
    <div class="row">

        <div class="col-md-4"> 
            <div class="zoom">
            <img src="{{ asset('img/g4.jpg') }}" width="300px" height="250px" class="img">
            </div>
        </div>

        <div class="col-md-4">
            <div class="zoom">
            <img src="{{ asset('img/g5.jpg') }}" width="300px" height="250px" class="img">
            </div>
        </div>

        <div class="col-md-4">
            <div class="zoom">
            <img src="{{ asset('img/g6.jpg') }}" width="300px" height="250px" class="img">
            </div>
        </div>

        
    </div>
  </div> <br>
  

  <div class="container">
    <div class="row">

        <div class="col-md-4"> 
            <div class="zoom">
            <img src="{{ asset('img/g7.jpg') }}"  width="300px" height="250px" class="img">
            </div>
        </div>

        <div class="col-md-4">
            <div class="zoom">
            <img src="{{ asset('img/g8.jpg') }}" width="300px" height="250px" class="img">
            </div>
        </div>

        <div class="col-md-4">
            <div class="zoom">
                <img src="{{ asset('img/pexels-asadphoto-1654834.jpg') }}"width="300px" height="250px" class="img">
               
            </div>
        </div>

        
    </div>
  </div> 

  </center>
  <!--  -->
<br><br>
@include('footer')
</body>
</html>