<?php
session_start();
include 'partials/dbconnect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration form PDO</title>
</head>

<body>
    <?php include 'partials/nav.php' ?>
    <?php
        if(isset($_SESSION['msg'])){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>'.$_SESSION['msg'].'</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        else{
            echo '<h2 class="text-center">Registration form</h2>';
        }
     ?>

    <div class="container my-4">
        <form class="row g-3" action="partials/registration.php" method="post">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="col-md-6">
                <label for="qly" class="form-label">Qualification</label>
                <input type="text" name="qly" class="form-control" id="qly" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Mobile Number</label>
                <input type="number" name="phone" class="form-control" id="phone" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Id</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="col-md-6">
                <label for="ref" class="form-label">Any Reference</label>
                <input type="text" name="ref" class="form-control" id="ref" required>
            </div>
            <div class="col-md-6">
                <label for="webdev" class="form-label">Web Developer</label>
                <input type="text" name="webdeveloper" value="WebDeveloper" class="form-control" id="webdev" required>
            </div>

            <div class="col-12">
                <input type="submit" name="submit" class="btn btn-primary" value="Register Now">
            </div>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>