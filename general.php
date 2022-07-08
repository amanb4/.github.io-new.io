
<?php
 
include 'connect.php';

if(isset($_POST['submitdoc'])){
    session_start();
    $name =  $_SESSION['sname'];
    $fname =  $_SESSION['sfname'];
    $email =  $_SESSION['semail'] ;
    $contact = $_SESSION['scontact'];
    $gender =  $_SESSION['sgender'] ;
    $grad = $_SESSION['sgrad'] ;
    $degree = $_SESSION['sdegree'];
    $college = $_SESSION['scollege'];
    $dept = $_SESSION['sdept'] ;
    $year = $_SESSION['syear'] ;
    $nation = $_SESSION['snation'] ;
    $cid = $_SESSION['scid'] ;
  

    $insertuery = "insert into general(name, fname, email, contact, gender, grad, degree, college, dept, year, nation, cid) values( '$name', '$fname', '$email', '$contact', '$gender', '$grad', '$degree', '$college', '$dept', '$year', '$nation', '$cid')" ;

    $query = mysqli_query($con,$insertuery) ;

      mysqli_close($con);
}
   ?>

<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script> 
   
