
<?php 

include('template/db_connect.php');




$emailMailing = '';
$errorsMailing = '';
$validMailing = 0;
if(isset($_POST['submitEmail'])){
  if(empty($_POST['emailMailing'])){
    $errorsMailing = 'an email is required';
    $validMailing = 1;
  }else{
   
    $emailMailing = $_POST['emailMailing'];
    if(!filter_var($emailMailing, FILTER_VALIDATE_EMAIL)){ // jadi ya ini semacam function buat nge check apakah inputannya itu email ato bukan. Dan ini emg udh built in di php jadi kalem aja bisa langsung pake
      $errorsMailing = 'email must be a valid email address';
      $validMailing = 2;
    }
  }


  if($errorsMailing == ''){
    $emailMailing = mysqli_real_escape_string($conn, $_POST['emailMailing']);

    $insert_sql = "INSERT INTO mailinglist(email) VALUES ('$emailMailing')";


    if(mysqli_query($conn, $insert_sql)){
    
     }else{
      echo 'query error : ' . mysqli_error($conn);
    }
  }


}

?>