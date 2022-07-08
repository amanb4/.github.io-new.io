
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <link rel="icon" href="images/drdo-official-logo-modified.png">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <section class="colored-section-header" id="">

    

      <!-- Nav Bar -->
      <div>
        <h3>Instruments Research & Development Establishment (IRDE)</h3>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark">

    <a href="index.php"><img src="images/drdo-official-logo-modified.png" width="90px"></a>
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.drdo.gov.in/" target="_blank">DRDO Official</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Info</a>
            </li>
          </ul>

        </div>
      </nav>

    
  </section>

  <?php
   include 'general.php';
   include_once 'upload.php';
  
?>
      <!-- Title -->
      <section class="colored-section" id="title">

        <div class="container-fluid">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2 class="big-heading">Scheme of Internship of Students - IRDE (DRDO)</h2>
          <a href="form.php" target="_blank"><button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Apply</button></a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
          <img class="title-image" src="images/title img.png" alt="student-img">
        </div>

      </div>

    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">

      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Program <br> Objectives</h3>
        </div>

        <div class="feature-box feature-info col-lg">
          <p>Scheme of Internship of student to DRDO Labs/Estts is to provide an opportunity and 
            exposure to the would be Graduates/Post Graduates in Engineering/General Sciences to
             the Research and Development activities carried out by DRDO in state of art technology 
             in the fields relevant to defence sector.</p>
        </div>

      </div>
    </div>
 
  <!-- Call to Action -->

    <div class="container-fluid">

      <div class="row"> 

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-bullseye fa-4x"></i>
          <h3 class="feature-title">Program <br> Features</h3>
        </div>

        <div class="feature-box feature-info col-lg">
          <p>• Internship Training is provided in the areas relevant to DRDO.</p>
          <p>• Provide opportunity to interns to be associated with projects.</p>
          <p>• The students to make correspondence with concerned Lab/Estts as per their discipline through their Institute/College.</p>
          <p>• Provisions of Apprentices Act 1961 do not apply to this scheme.</p>
          <p>• Internship Training will be permitted subject to vacancies at Labs and approval by Lab Director.</p>
          <p>• Interns will be permitted only to UNCLASSIFIED areas of DRDO Labs/Establishments.</p>
          <p>• DRDO will in no way be obliged to offer employment to the students on completion of their training.</p>
          <p>• DRDO will not be liable for any compensation in case of personal injury caused by accident arising out of and in the course of the students' attachment to DRDO Labs/Establishments.</p>
          <p>• The period of training generally is 4 weeks to 6 Months, depending upon the type of course. However, it will be at the discretion of Lab Director.</p>
        </div>

      </div>
    </div>

  </section>

  <!-- Footer -->

  <footer class="footer">
    <div class="">
    
      <p class="footer">© Copyright 2022 IRDE Internship</p>
    </div>
  </footer>


</body>

</html>
