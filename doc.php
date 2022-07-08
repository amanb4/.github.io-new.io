
<?php
  
  session_start();
         

  $_SESSION['sname'] = $_POST['name'];
  $_SESSION['sfname'] = $_POST['fname'];
  $_SESSION['semail'] = $_POST['email'];
$_SESSION['scontact'] = $_POST['contact'];
$_SESSION['sgender'] = $_POST['gender'];
$_SESSION['sgrad'] = $_POST['grad'];
$_SESSION['sdegree'] = $_POST['degree'];
$_SESSION['scollege'] = $_POST['college'];
$_SESSION['sdept'] = $_POST['dept'];
$_SESSION['syear'] = $_POST['year'];
$_SESSION['snation'] = $_POST['nation'];
$_SESSION['scid'] = $_POST['cid'];
             
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>IRDE Internship</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&family=Ubuntu&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">

  <link rel="icon" href="images/drdo-official-logo-modified.png">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


  <!-- Bootstrap Scripts -->
  
  
</head>

<body>

  <section class="colored-section-header" id="">

    

      <!-- Nav Bar -->
   
      <nav class="navbar navbar-expand-lg navbar-dark">
       
          <a href="index.php"><img src="images/drdo-official-logo-modified.png" width="90px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link">General Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">Documents</a>
              </li>
             
             
            </ul>
          </div>
       
      </nav>
    
   
  </section>
 
  <?php
   include 'elert.php';
  ?>

  <!-- Features -->

  <section class="white-section" id="features">

    <div class="row">
       
      <div class="feature-box col-lg-4">
        <h3 class="feature-title">Upload <br> Documents</h3>
      </div>
      
      <div class="feature-info col-lg">
      
        <form class="row needs-validation" action="index.php" method="post" enctype="multipart/form-data" novalidate>
            
          <div class="input">
            <label for="validationTextarea" class="form-label">Upload CV/Resume</label>
              <input type="file" class="form-control" aria-label="file example" name="cv" required>
              
              
              <label for="validationTextarea" class="form-label">Upload LOR</label>
              <input type="file" class="form-control" aria-label="file example" name="lor" required>
              
              <label for="validationTextarea" class="form-label">Upload Aadhar card</label>
              <input type="file" class="form-control" aria-label="file example" name="aadhar" required>
              
              <label for="validationTextarea" class="form-label">Upload Semester scorecard</label>
              <input type="file" class="form-control" aria-label="file example" name="semester" required>
              
           

          
          <div class="mx-auto">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Given all the information is correct
              </label>
            </div>
          </div>
        </div>
          <div class="col-12">
            <button class="btn btn-primary mx-auto" name="submitdoc" id="submitdoc" type="submit">Submit Application</button>
          </div>
        </form>
        
    </div>
    </div>

  </section>

  <script src="valid.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
