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
<!--  -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div  class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('img/about2ps.png') }}" class="img-fluid" >
            
            
        </div>

    </div>
</div>

<!--  -->
<!--  -->
<div class='container my-5'>
                <div class='row'>
                    <div class='col-lg-6 d-flex justify-content-center  d-lg-flex'>
                        <img src="{{ asset('img/abtgirl.png') }}" class='' alt="about img"  />
                    </div>
                    <div class='col-lg-6 d-flex flex-column align-items-center justify-content-center'>
                        <h2 class='fs-1 mb-5 text-uppercase fw-bold'>About Pekka</h2>
                        <h2 style="color: rgb(30, 189, 30);">Key to Beautiful You</h2> 
                    
                        <p class='mb-5' style="text-align: justify;" >
                        The world has always admired Indian women for their beauty. 
                    Nowhere else is beauty honored and worshipped more than in India. 
                    The ancient skills of beauty and skin care passed on through centuries, 
                    stressed on pure natural and organic ingredients to highlight the beauty of women. 
                    Our traditional beauty creams and treatments are based on Ayurvedic principles and the use of organic formulations ensure health and enhance the beauty of the woman.
                     Now, La bliss is using the same ancient skills and the latest technology by blending them together to deliver amazing results at your doorstep in Hyderabad. 
                     We are committed to delivering the best personalized treatments for you and offer a wide range of services to enable you to look and feel your beautiful best.
                      Once you visit La bliss and avail our exclusive services,
                     you will enjoy the compliments and envious looks of others.Our traditional beauty creams and treatments are based on Ayurvedic principles and the use of organic formulations ensure health and enhance the beauty of the woman.
                     Now, La bliss is using the same ancient skills and the latest technology by blending them together to deliver amazing results at your doorstep in Hyderabad.
                        </p>
                        
                    </div>
                </div>
            </div>
@include('footer')
    
</body>
</html>