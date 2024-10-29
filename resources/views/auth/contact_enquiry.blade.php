<!DOCTYPE html>
<html lang="en">
  <head>
   
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
        <!-- partial:partials/_sidebar.php -->
      
      <!--Nav Start-->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('img/pekka1.png') }}" width="70%" height="100px" alt="profile image">
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
                          <h4 class="card-title mb-0">Contacted Enquries</h4>
                          <br>
                        </div>
<!--  -->
  <!-- <form method="post" action="contact_enquiry.php">
    <input type="text" name="valueToSearch" placeholder="value To Search..">
    <input type="submit" name="search" value="Filter">
  </form> -->

<!--  -->



<!-- table Section -->

<div class="container">
    <h2>Contact Enquiries</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Query</th>
                <th>Date Submitted</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->Name }}</td>
                <td>{{ $contact->Email }}</td>
                <td>{{ $contact->Number }}</td>
                <td>{{ $contact->Query }}</td>
                <td>{{ $contact->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



          
          <!DOCTYPE html>
          <html lang="en">
          <head>
            
            
            <title>crude application</title>
            <linl rel="stylesheet" type="text/css" href="style_2.css">
          </head>
          <body>
            <!-- <h2>show data</h2> -->
           
          </body>
          </html>
    
                          </div>
<!-- Table Close -->

                      </div>
                    </div>
                  </div>


                </div>
              </div>


             
            

          <!-- partial:partials/_footer.php -->
          
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Dashboard 2024</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="#"></a> </span>
            </div>
          </footer>
        


          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

   
    <!--  -->


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="js/vendor.bundle.base.js"></script>
    <script src="js/vendor.bundle.addons.js"></script>


    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
  
    <script src="js/dashboard.js"></script>

    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>