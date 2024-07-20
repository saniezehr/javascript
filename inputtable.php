<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <form method="post">

        <div class="container p-5">
.<div class="mb-3">
    <label for="" class="form-label">table number</label>
    <input
        type="number"
        name="userNum"
        id=""
        class="form-control"
        placeholder="Enter Your Number"
    />
</div>
<button name="userData" type="submit" class="btn btn-info">Submit</button>

        </div>

</form>
       <h1 class="text-center">TABLE</h1>
  <div class="container p-5">
    <table class="table">
        <tbody>
<?php
if(isset($_POST['userData'])){
$userNum=$_POST['userNum'];

   

   
   for($i=1;$i<=10;$i++){
    ?>
    <tr>
    <td><?php echo $userNum?></td>
    <td><?php echo"x"?></td>
    <td><?php echo $i?></td>
    <td><?php echo"="?></td>
    <td><?php echo $i*$userNum?></td>

</tr>
    <?php
}}
?>
        </tbody>
    </table>
  </div>
    </body>
</html>

