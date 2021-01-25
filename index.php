<?php

$errName = $errAge = $errEmail = $errGender = $errComment = $errSubmit = "";
 

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- bootstrap -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/style.css">

  <title> </title>
</head>

<body>


  <div class="container">


    <header class="head">

      <div class="logo">
        <h1>PHP BODY</h1>
        <h2>This is Full PHP Server!</h2>
      </div>
      <hr>


    </header>

    <section class="body-section">

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

        <table>
        <p class="req">* Required</p>
          <tr class="">
            <td><p>Name</p></td>
            <td><input type="text" name="name" required> <span class="req1"> * <?php echo $errName ?> </span> </td>
          </tr>
          <tr class="">
            <td><p>Age</p></td>
            <td><input type="text" name="age"> <span class="req1"> * <?php echo $errAge ?> </span> </td>
          </tr>
          <tr class="">
            <td><p>E-mail</p></td>
            <td><input type="text" name="email"> <span class="req1" >* <?php echo $errEmail ?></span></td>
          </tr>
          <tr class="">
            <td><p>Gender</p></td>
            <td>
              <input type="radio" name="gender" value="male"> <label for="male">Male</label>
              <input type="radio" name="gender" value="female"> <label for="male">Female</label>
              <span class="req1"> *<?php echo $errGender ?></span>
            </td> 
          </tr>
          <tr class="">
            <td><p>Comment</p></td>
            <td><textarea name="comment" id="" cols="20" rows="5"></textarea></td>
          </tr>
          <tr class="">
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
          </tr>
        </table>
      </form>


      




<?php

$name = $age = $email = $gender =$comment =$submit = "";      
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $comment = $_POST["comment"];
        $submit = $_POST["submit"];

        echo "Name is : ".$name. "<br/>";
        echo "Age is : ".$age. "<br/>";
        echo "Email is : ".$email. "<br/>";
        echo "Gender is : ".$gender. "<br/>";
        echo "Comment is : ".$comment. "<br/>";        
      }     
      ?>




      
    </section>












    <footer class="footer">

      <h3>This is footer!</h3>
      <p>copy write 2021</p>


    </footer>





  </div>







  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <!-- bootstrap -->





</body>

</html>