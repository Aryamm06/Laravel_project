
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard </title>


    <!-- inject:css -->
    <link rel="stylesheet" href="css/style_2.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style_1.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  </head>
  <body>


    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          
        </div>
        
      <!-- partial -->
      <!-- Section-1 End -->



      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      
     
        <!--Nav End--->



      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  
                </div>
              </div>


             


                 
                
              </div>
            </div>




            <!-- Page Title Header Ends-->
           
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  

            
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Add services</h4>
                          <br>           
                        </div>


      <!--Content--->
 <div class="content-wrapper d-flex align-items-center auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-6 mx-auto">
              <div class="auto-form-wrapper">



<!-- Form -->





<form action="/edit"  method="POST" enctype="multipart/form-data">
         @csrf 
         <input type="hidden" name="id" value="{{$service['id']}}">
         <img src="{{ url('public/img/'.$service['images'])}}" style="height: 100px; width: 150px;">
            <input type="file" name="images"  >
            <br><br>
            <div class="form-group">
              <label class="label"> Title</label>
               <div class="input-group">

                  <input type="text" class="form-control" placeholder="" name="title" value="{{$service['title']}}">


                      <div class="input-group-append">
                      <span class="input-group-text">
                          
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>


              


                   <div class="form-group">
                    <label class="label"> Content</label>
                    <div class="input-group">

                      <input type="text" class="form-control" placeholder="" name="description" value="{{$service['description']}}">



                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                 
                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block" name="submit">Update</button>
                  </div>

    
<!-- Form Close -->



              </div></div></div></div>

    



<!----------------------------------->

                      </div>
                    </div>
                  </div>


                </div>
              </div>



          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Dashboard 2024</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="#"></a> </span>
            </div>
          </footer>
        
         
       </div>
      </div>
    </div></div>  

  </div>

    <!-- plugins:js -->
    <script src="js/vendor.bundle.base.js"></script>
    
    <script src="js/vendor.bundle.addons.js"></script>

    <script src="js/off-canvas.js"></script>

    <script src="js/misc.js"></script>
    
    <script src="js/dashboard.js"></script>






  </body>
</html>

