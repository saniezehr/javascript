<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container p-5">
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                name="userName"
                id=""
                class="form-control"
                placeholder="enter your name"
                aria-describedby="helpId"/>
        </div>
        <div class="mb-3">

        <label for="" class="form-label">Password</label>
            <input
                type="password"
                name="userPassword"
                id=""
                class="form-control"
                placeholder="enter your password"
                aria-describedby="helpId"/>
        </div>
        <div class="mb-3">

        <label for="" class="form-label">Email</label>
            <input
                type="text"
                name="userEmail"
                id=""
                class="form-control"
                placeholder="enter your email"
                aria-describedby="helpId"/>
        </div>
        <button name="userData" type="submit" class="btn btn-info">Submit</button>
    </form>
</div>
<?php
if(isset($_POST['userData'])){
    $userName=$_POST['userName'] ;
    $userPassword=$_POST['userPassword'] ;
    $userEmail=$_POST['userEmail'] ;
    echo $userName."".$userPassword."".$userEmail;

}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>