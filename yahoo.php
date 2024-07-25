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
     <form  method="post">
   <div class="input-group mb-3">
          <span class="input-group-text" id="input1">Email</span>
          <input
            type="email"
            class="form-control"
            placeholder="Enter Your email"
            name="useremail"
            required
          />
    </div> 
    <button name="userbtn">submit</button>
</form>
    <?php
    if(isset($_POST['userbtn'])){
        $email=$_POST['useremail'];
        $final=explode("@",$email);
        $user = $final[count($final)-1];
        $restrict_data="yahoo.com";
       $output = strcmp($user,$restrict_data);
       
       if($output==0){
        echo "restricted domain";
       }
       else{
        echo "allow";
       }
    }
    
    ?>


    
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
