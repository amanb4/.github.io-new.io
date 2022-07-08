
<?php

include 'connect.php';

if(isset($_POST['submitdoc'])){

    $cv = $_FILES['cv'];
    $lor = $_FILES['lor'];
    $aadhar = $_FILES['aadhar'];
    $semester = $_FILES['semester'];

    $cvname = $cv['name'];
    $cvpath = $cv['tmp_name'];
    $cverror = $cv['error'];

    $lorname = $lor['name'];
    $lorpath = $lor['tmp_name'];
    $lorerror = $lor['error'];

    $aadharname = $aadhar['name'];
    $aadharpath = $aadhar['tmp_name'];
    $aadharerror = $aadhar['error'];

    $semestername = $semester['name'];
    $semesterpath = $semester['tmp_name'];
    $semestererror = $semester['error'];

    if( $cverror==0 && $lorerror==0 && $aadharerror==0 && $semestererror==0 ){

      $destcv = 'uploaded_doc/'.$cvname;
      move_uploaded_file($cvpath,$destcv);

      $destlor = 'uploaded_doc/'.$lorname;
      move_uploaded_file($lorpath,$destlor);

      $destaadhar = 'uploaded_doc/'.$aadharname;
      move_uploaded_file($aadharpath,$destaadhar);

      $destsemester = 'uploaded_doc/'.$semestername;
      move_uploaded_file($semesterpath,$destsemester);

      $insertuery = "insert into doc( cv, lor, aadhar, semester) values('$destcv', '$destlor', '$destaadhar', '$destsemester')" ;

      $query = mysqli_query($con,$insertuery) ;

      if($query){
            include 'elert1.php'; 
      }
      else
      echo "error submitting form !!";
    }

    mysqli_close($con);
}

?>

<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script> 
   

   
