

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

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  </head>
  <body>


    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +91 Lucky </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    
              </div>
            </li>

        
              
        

        </button>

          
          
         
        </a>
               
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


     
              <div class="dropdown-header text-center">
                  
                  <p class="mb-1 mt-3 font-weight-semibold"></p>
              </div>
                
              <a class="dropdown-item" href="login.php">Sign Out</a> 
              </div>

            </li>
          </ul>
          
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <!--   <i class="mdi mdi-menu"></i> -->
            <i class="fa fa-bars"></i>

          </button>

        </div>
      </nav>
      <!-- partial -->
      <!-- Section-1 End -->



      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      
      <!--Nav Start-->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('img/pekka1.png') }}"  width="70%" height="100px" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">PEKKA</p>
                  <p class="designation">Skin & Hair Care</p>
                </div>
              </a>
            </li>


            <li class="nav-item nav-category">Menus</li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard Home</span>
              </a>
            </li>
    

            
            <li class="nav-item">
              <a class="nav-link" href="/contacts">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Contacted Enquries</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="/add_service">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Add Services</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/list_add">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">View Services</span>
              </a>
            </li>
            
          </ul>
        </nav>
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


              <div class="col-md-12">
                <div class="page-header-toolbar">
                 
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                     
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                   
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





  <form action="services"  method="POST" enctype="multipart/form-data">
         @csrf 
         
         
            <input type="file" name="images" required >
            <br><br>
            <div class="form-group">
              <label class="label"> Title</label>
               <div class="input-group">

                  <input type="text" class="form-control" placeholder="" name="title"  required>


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

                      <input type="text" class="form-control" placeholder="" name="description" required>



                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-check-circle-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                 
                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block" name="submit">Submit</button>
                  </div>

                  
  </form>
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

