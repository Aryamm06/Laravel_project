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
<body>
@include('navbar')

<!-- carousel -->
<div>
<div id="demo" class="carousel slide" data-interval="2000" data-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" ></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" ></button>
      
 </div>
<div class="carousel-inner">
<div class="carousel-item active slideimg">
             <img src="{{ asset('img/salon1.jpg') }}" class="img-fluid" alt="First Slide">
<div class="carousel-caption d-none d-md-block">
    
    </div>
    </div>
<div class="carousel-item slideimg">
            <img src="{{ asset('img/salon2.jpg') }}" class="img-fluid" alt="Second Slide">
<div class="carousel-caption d-none d-md-block">
           
</div>
</div>
<div class="carousel-item slideimg">
             <img src="{{ asset('img/salon3.jpg') }}" class="img-fluid" alt="Third Slide">
<div class="carousel-caption d-none d-md-block">
          
</div>
</div>

<div class="carousel-caption">
            <h2 style="font-size: 50px; font-weight: bolder;">
            <span style="color: aliceblue;">BEAUTY</span>
            <span style="color: green" >SALON</span>
            </h2>
        <P id="p">The world has always admired Indian women for their beauty. </P>
        <P> Nowhere else is beauty honored and worshipped more than in India.</P>
        <a href="aboutus.html" style="text-decoration: none;">
        <button type="click" class="btn  mx-auto d-block " style=" background-color: green; color: aliceblue;">know More </button></a>
</div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            

            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>


</div>           
</div> 
        

<!--  -->

<!-- about -->

<div class="container-fluid" style="background-color: white;">
    <div class="row">
        <div class="col-lg-5"> <br><br>
        <img src="{{ asset('img/about img.jpeg') }}" width="95%" height="250px" style="padding-left: 8%;" >
        </div>
        <div class="col-lg-7" style="padding-left: 10%;text-align: justify; "><br>
        <h2 style="color: rgb(144, 8, 87);">ABOUT US</h2>
        <p style="color: black;">The world has always admired Indian women for their beauty.
                 Nowhere else is beauty honored and worshipped more than in India.
                  The ancient skills of beauty and skin care passed on through centuries,
                 stressed on pure natural and organic ingredients to highlight the beauty of women.
                 We are committed to delivering the best personalized treatments for you and offer a wide range of services
                  to enable you to look and feel your beautiful best.
                  Once you visit pekka and avail our exclusive services,
                  you will enjoy the compliments and envious looks of others.The world has always admired Indian women for their beauty.
                 Nowhere else is beauty honored and worshipped more than in India.
                  The ancient skills of beauty and skin care passed on through centuries,
                 stressed on pure natural and organic ingredients to highlight the beauty of women.
                 We are committed to delivering the best personalized treatments for you and offer a wide range of services
                  
                 .</p>
        </div>
    </div>
</div>



<br><br>
 <!--  -->

 <!-- cards -->

 


<br><br>


<div class="container-fluid" style="padding-left:7%;">
    <div class="row">
        @foreach($services as $item)
        <div class="col-md-4"> <!-- Changed 'col' to 'col-md-4' for a 3-column layout -->
            <div class="card" style="width: 80%;"> <!-- Set width to 100% for responsiveness -->
                <img src="{{ url('public/img/'.$item->images) }}" alt="" style="height: 270px;">
                <div class="card-body">
                    <center>
                        <h5>{{ $item->title }}</h5>
                    </center>
                    <p style="font-size: 12px;">{{ $item->description }}</p>
                </div>
                <div class="card-footer">
                    <center><button class="btn btn-success">Read More</button></center>
                </div>
            </div>
        </div>

        @if($loop->iteration % 3 == 0)
            </div><br><div class="row">
        @endif
        @endforeach
    </div>
</div>



  <!--  -->

  <!-- testimonial  -->
<div class="testimonial-container">
  <div class="progress-bar"></div>
  
 
  <p class="testimonial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia repellendus, vitae suscipit culpa molestiae possimus voluptate consequuntur odit nulla saepe obcaecati dolorem laudantium praesentium aspernatur mollitia aperiam laborum rem cum commodi doloremque asperiores officia hic similique. Sint ad nobis quos?</p>
  <div class="user">
    <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="user" class="user-image">
    <div class="user-details">
      <h4 class="username">Lola Smith</h4>
      <p class="role">Marketing</p>
    </div>
  </div>
</div>

<!--  -->
@include('footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>