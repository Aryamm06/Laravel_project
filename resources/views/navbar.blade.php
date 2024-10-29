<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Purple Navbar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* Custom Styles for Navbar */
    .navbar-custom {
      background-color: #6f42c1; /* Purple Color */
    }
    .navbar-toggler {
      border-color: white;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    .nav-link.active {
      color: #ffffff !important; /* White text for active link */
      background-color: #563d7c; /* Slightly darker purple for active state */
      border-radius: 5px;
    }
    .nav-link {
      color: #ffffff !important;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"><img src="{{ asset('img/pekka1.png') }}" width="20%" height="35px"  alt=""><strong style="font-size: 13px;">SKIN & HAIR CARE FOR WOMEN</strong></a></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="con">CONTACT US</a>
          </li>
          <li class="nav-item">
                    <a class="nav-link" href="/login">SIGN IN</a>
                </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle active class on click
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        navLinks.forEach(l => l.classList.remove('active')); // Remove active from all
        this.classList.add('active'); // Add to clicked one
      });
    });
  </script>

</body>
</html>