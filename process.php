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

            <?php




$errName = $errAge = $errEmail = $errGender = $errComment = $errSubmit = "";

$name = $age = $email = $gender =$comment =$submit = ""; 

            echo "Name is : ".$_POST["name"]. "<br/>";
            echo "Age is : ".$_POST["age"]. "<br/>";
            echo "Email is : ".$_POST["email"]. "<br/>";
            
            echo "Gender is : ".$_POST["gender"]. "<br/>";
            echo "<ol>";
            foreach($_POST['book'] as $books){
                echo "<li> $books </li>";
            }echo "</ol>";
            echo "Other Option is : ".$_POST["book"]. "<br/>";
            echo "Comment is : ".$_POST["comment"]. "<br/>";        

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