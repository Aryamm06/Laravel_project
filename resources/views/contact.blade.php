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

    <style>

.bg{
background-image: url('img/Untitled-1.png');
   background-size: cover;
   background-attachment: fixed;
}  






     </style>
</head>
<body>
    @include('navbar')

    
<div class="bg" >


<div class="concap"  >
     <span style="color: aliceblue;">Contact</span>
     <span style= " color: rgb(77, 167, 32) ">_</span>
</div> 

<div> <br><br><br><br><br><br><br>
<div class="row">
      <div class="col-lg-6">
            <img src="{{ asset('img/pekka1-removebg-preview.png') }}" width="50%" height="100px" style="padding-left: 10%;">

     <div class="location" style="font-size: 23px;">
                <span style="color: aliceblue; text-align: justify;">
                <i class="fa fa-map-marker" style="color: white;"></i>
       
                calicut palayam 
               <p style="padding-left: 7%;"> Railway Link Road <br>
                     Kozhikode,Kerala-673002 <br></p></span>
                  <p style="color: aliceblue;">
                      <a href="#" class="fa fa-phone" style="color: #ece6e6;"></a>
                      +914842912200 <br>
                      <span class="me-2">
                      <a href="#" class="fa fa-envelope" style="color: #ece6e6;" ></a>
                    pekka@gmail.com </span><br>
                    <a href="#" class="fa fa-globe" style="color: #ece6e6;" ></a>
                    www.pekkasalon.com
                  </p>

              </p>
          
 </div>

</div>
    <div class="col-lg-6" >
         <p style="color: antiquewhite; font-size: 30px; ">Getting in touch is easy!</p>


                          
                          <form action="{{ route('Contact.store') }}" method="POST"  >
                         @csrf
                         <div class="form-group">
                             <label style= "color: white; font-size: 20px"  > Name</label>
                             <input type="text" class="form-control" name="Name" placeholder="Your name" style="width: 60%; 
                              background-color: rgba(0, 0, 0, 0.5) ; color: white;" >
                         
                         </div>
                         <br>
                         <div class="form-group">
                             <label style=" color: white;font-size: 20px">Email</label>
                             <input type="text" class="form-control" name="Email" placeholder="Your name" style="width: 60%; 
                              background-color: rgba(0, 0, 0, 0.5) ; color: white;">
                         
                         </div>
                         <br>
             
                         <div class="form-group">
                             <label style=" color: white;font-size: 20px"> MobileNo</label>
                             <input type="text" class="form-control" name="Number" placeholder="Your name" style="width: 60%; 
                              background-color: rgba(0, 0, 0, 0.5) ; color: white;">
                         
                         </div>
                         <br>
             
                         <div class="form-group">
                             <label style=" color: white;font-size: 20px"> Query</label>
                             <input type="text" class="form-control" name="Query" placeholder="Your name" style="width: 60%; 
                              background-color: rgba(0, 0, 0, 0.5) ; color: white;" >
                         
                         </div>
                         <br>
             
                         <input type="submit" name="" value="submit" style="background-color:yellow;" class="round-rectangle-button">
                    
                        </form> 
                        <?php
// if(isset($_GET['s_msg']))
// {
//    echo '<label style="color:red;margin-left:30px;margin-top:30px;">submitted not successfully</label>';
// }
// if(isset($_GET['f_msg']))
// {
//    echo '<label style="color:orange;margin-left:30px;margin-top:30px;">submitted successfully</label>';
// }

?>
</div>

</div> 


<br><br><br> 
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15652.805600216889!2d75.7843628!3d11.2465899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba6590722a91fdd%3A0x9dda6cc3bf53ce47!2sZONEMAC%20SOLUTIONS!5e0!3m2!1sen!2sin!4v1717138999981!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    @include('footer')
</body>
</html>