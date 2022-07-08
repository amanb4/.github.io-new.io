
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
         
      <a class="navbar-brand" href="index.php"><img src="images/drdo-official-logo-modified.png" width="90px"></a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active">General Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Documents</a>
              </li>
             
             
            </ul>

          </div>
      </nav>

  

  </section>
  <!-- Features -->

  <section class="white-section" id="features">

    <div class="row">
       
      <div class="feature-box col-lg-4">
        <h3 class="feature-title">Fill Your <br> General Details</h3>
      </div>
      
      <div class="feature-info col-lg">
      
        <form class="row needs-validation" action="doc.php" method="post" novalidate>
           
        <div class="input">
            <input type="text" class="form-control" id="validationCustom03 name" placeholder="Name" name="name" required>
          
            <input type="text" class="form-control" id="validationCustom03 fname" placeholder="Father's Name" name="fname" required>

            <input type="email" class="form-control" id="validationCustom03 email" placeholder="Email" name="email" required>

            <input type="number" class="form-control" id="validationCustom03 contact" placeholder="Contact" name="contact" required>

            <select class="form-select" id="validationCustom04 gender" name="gender" required>
              <option selected disabled value="">Gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>

            <select class="form-select" id="validationCustom04 grad" name="grad" required>
              <option selected disabled value="">Grad Level</option>
              <option value="1">UG</option>
              <option value="2">PG</option>
              <option value="3">PHD</option>
            </select>
         
            <input type="text" class="form-control" id="validationCustom03 degree" placeholder="Degree" name="degree" required>

            <input type="text" class="form-control" id="validationCustom03 college" placeholder="College" name="college" required>

            <input type="text" class="form-control" id="validationCustom03 dept" placeholder="Department" name="dept" required>

            <select class="form-select" id="validationCustom04 year" name="year" required>
              <option selected disabled value="">Year</option>
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
            </select>

            <input type="text" class="form-control" id="validationCustom03 nation" placeholder="Nationality" name="nation" required>

            <input type="text" class="form-control" id="validationCustom03 cid" placeholder="College ID" name="cid" required>

          
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
       
          <button class="btn btn-primary" name="submitgeneral" type="submit">Submit & Next</button>
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
