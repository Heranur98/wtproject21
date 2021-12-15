<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Appointment- Smart Health Consulting Service</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +8801713535615</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> pipashprottoy@gmail.com</a>
            </div>
          </div>
     
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Smart Health </span>-Consulting Service</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
        
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="login.php">Logout</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            
            <a class="nav-link" href="index.php">Home</a>
            
        
            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Appointment</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div>


  </div>
  <div class="page-section">
    <div class="container">
      
      <div>

        <h1 class="text-center wow fadeInUp">Your Appointment</h1>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Doctor Name</th>
      <th scope="col"> Address </th>
      <th scope="col">Contact Number</th>
      <th scope="col">Appointed Schedule</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Daniel Rosserio</th>
      <td>Ever Care Hospital</td>
      <td>0177896987</td>
      <td>1 Jan 2021 ; 12.45pm</td>
    </tr>
    <tr>
      <th scope="row">---</th>
      <td>---</td>
      <td>---</td>
      <td>---</td>
    </tr>
    <tr>
      <th scope="row">---</th>
      <td>---</td>
      <td>---</td>
      <td>---</td>
    </tr>
  </tbody>
</table>


      </div>
      <br>
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="Name" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name = "Email" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="Date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" >
          <input placeholder="Schedule">
            <select name="Schedule" id="Schedule" class="custom-select">
            <option value="09-11 am">09-11 am</option>
                            <option value="11-03 pm">11-03 pm</option>
                            <option value="03-06 pm">03-06 pm</option>
                            <option value="06-09 pm">06-09 pm</option>
            </select>
          </div>

          <div class="col-12 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input placeholder="Select Doctor">
            <select name="Doctor" id="doctor" class="custom-select"placeholder=" slect Doctor">
              <option value="Dr. Faysal Rana">Dr. Faysal Rana</option>
              <option value="Dr. Fadwana Islam">Dr. Fadwana Islam</option>
              <option value="dental">Dr. Md. Mahbubul Islam</option>
              <option value="neurology">Dr. Subarna Biswas</option>
              <option value="orthopaedics">Dr. Sanuar hossain</option>
              <option value="Dr. Md. Rafiqul Islam">Dr. Md. Rafiqul Islam</option>
            </select>
          </div>

       


          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" name="Phone" placeholder="Phone..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="Message" id="message" name="Messege" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  





  <footer class="page-footer">
    <p id="copyright" style="text-align: center;"> Copyright &copy;Smart Health Consulting Service 2021  All right reserved</p>
  </div>
</footer>




  
</body>
</html>