<?php
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

    <title>Updation form PDO</title>
</head>

<body>
    <?php include 'partials/nav.php' ?>

    <h2 class="text-center">Updation form</h2>
    <!-- this is a select query  -->
    <?php
    $id = $_GET['id'];
    $selectSql = "select *from formdata where id=?";
    $smt = $conn->prepare($selectSql);
    $smt->execute([$id]);
    $result = $smt->fetch(PDO::FETCH_ASSOC);
    ?>

    <!-- This is a update query -->
    <?php
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $qly = $_POST['qly'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ref = $_POST['ref'];
    $webdeveloper = $_POST['webdeveloper'];

    $updateSql = "update `formdata` set `name`='$name' , `qualification`='$qly' , `mobile`='$phone' , `email`='$email' , `reference`='$ref' , `post`='$webdeveloper' where id=?";
    $upd = $conn->prepare($updateSql);
    $result = $upd->execute([$id]);
    if($result){
        header("location:view.php");
    }
    else{
        echo 'error';
    }
}
?>
    <div class="container my-4">
        <form class="row g-3" method="post">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $result['name']?>"
                    required>
            </div>
            <div class="col-md-6">
                <label for="qly" class="form-label">Qualification</label>
                <input type="text" name="qly" class="form-control" id="qly"
                    value="<?php echo $result['qualification']?>" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Mobile Number</label>
                <input type="number" name="phone" class="form-control" id="phone" value="<?php echo $result['mobile']?>"
                    required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Id</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $result['email']?>"
                    required>
            </div>
            <div class="col-md-6">
                <label for="ref" class="form-label">Any Reference</label>
                <input type="text" name="ref" class="form-control" id="ref" value="<?php echo $result['reference']?>"
                    required>
            </div>
            <div class="col-md-6">
                <label for="webdev" class="form-label">Web Developer</label>
                <input type="text" name="webdeveloper" value="WebDeveloper" class="form-control" id="webdev"
                    value="<?php echo $result['post']?>" required>
            </div>

            <div class="col-12">
                <input type="submit" name="submit" class="btn btn-primary" value="Update Now">
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