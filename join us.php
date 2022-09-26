
<?php 

include('template/mailing.php');

$name = $email = $birthdate = $description = $phoneNumber = '';

$errors = array('name'=>'','email'=>'','birthdate'=>'','phoneNumber'=>'','description'=>'');
$valid = 0;

if(isset($_POST['submit'])){
  if(empty($_POST['name'])){
    $errors['name'] = 'a name is required <br>';
  }else{
    // echo htmlspecialchars($_POST['title']);
    $name = $_POST['name'];
    
    if(!preg_match('/^[a-zA-Z\s]+$/', $name)){ // argumen yg pertama itu regex, nanti bisa coba liat di playlist yg udh di save
      $errors['name'] = 'name must be letters and spaces only';

    }
  }

  // check email
  if(empty($_POST['email'])){
    $errors['email'] = 'an email is required <br>';
  }else{
    // echo htmlspecialchars($_POST['email']); 
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // jadi ya ini semacam function buat nge check apakah inputannya itu email ato bukan. Dan ini emg udh built in di php jadi kalem aja bisa langsung pake
      $errors['email'] = 'email must be a valid email address <br>';
    }
  }


  // birthdate
  if(empty($_POST['birthdate'])){
    $errors['birthdate'] = 'birthdate is required <br>';
  }else{
    $birthdate = $_POST['birthdate'];
    // echo $birthdate;
  }

  // phoneNumber
  if(empty($_POST['phoneNumber'])){
    $errors['phoneNumber'] = 'phone number is required <br>';
  }else{
    $phoneNumber = $_POST['phoneNumber'];
  }
 
  // phoneNumber
  if(empty($_POST['description'])){
    $errors['description'] = 'description is required <br>';
  }else{
    $description = $_POST['description'];
  }




  if(!array_filter($errors)){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
      $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
      $description = mysqli_real_escape_string($conn, $_POST['description']);


      $insert_sql = "INSERT INTO pelamar(name,email,phoneNumber,birthDate,description) VALUES ('$name','$email','$phoneNumber','$birthdate','$description')";




        if(mysqli_query($conn, $insert_sql)){
        // echo 'sucess'
        

        $valid = 1;
     }else{
        echo 'query error : ' . mysqli_error($conn);
      }

  }

  
}


?>

<!-- pop up message -->





<?php include 'template/header.php' ?>
</header>
<!-- JOIN OUR TEAM -->
<div class="joinErigo">
    <div class="joinOurTeam Team">
      <h1>Join Our Team!</h1>
      <h6>Be a part of the Erigo team</h6>
      
    </div>
</div>

<!-- Form -->

<section class="title">
  <h1>Let us know more about you</h1>
  <h6>Please fill in the form so we can contact you</h6>

<form class="theForm" action="join us.php" method="POST">
  <div class="joinOurTeamForm">

    <br>
    <br>

    <h6>Name</h6>
    <p class="text-danger"><?php echo $errors['name']; ?></p>
    <input type="text" placeholder="Name..." name="name" value="<?php echo htmlspecialchars($name) ?>">
   

    <h6>Email</h6>
    <p class="text-danger"><?php echo $errors['email']; ?></p>
    <input type="text" placeholder="example@mail.com" name="email" value="<?php echo htmlspecialchars($email) ?>">
    <div class="red-text">
       
      </div>

    <h6>Birthdate</h6>
    <p class="text-danger"><?php echo $errors['birthdate']; ?></p>
    <input type="date" name="birthdate" value="<?php echo $birthdate ?>">
    

    <h6>Indonesian Phone Number</h6>
    <p class="text-danger"><?php echo $errors['phoneNumber']; ?></p>
    <input type="text" placeholder="08XX-XXXX-XXXX" name="phoneNumber" value="<?php echo htmlspecialchars($phoneNumber) ?>">
    

    <h6>Tell us about yourself</h6>
    <p class="text-danger"><?php echo $errors['description']; ?></p>
    <textarea placeholder="Max 300 characters." style="height: 150px" maxlength="300" name="description"><?php if(!empty($description)) echo htmlentities ($description);?></textarea>
 
    

    <input type="submit" value="Submit" name="submit">

    

    
  </div>
  </form>




<?php include 'template/footerjoinus.php' ?>







