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
        <style>
            .form{
                border:3px solid rgb(13, 82, 95);
                height: 450px;
                width: 400px;
                border-radius:10%;
            }
        </style>
    </head>

    <body>
        <form method ="post" class="form container p-5 ">
       <div class="form-group">
         <label for="">Name</label>
         <input type="text" 
          name="name"
           id="" class="form-control" placeholder="" aria-describedby="helpId">
       </div>

       <div class="form-group">
         <label for="">Age</label>
         <input type="number" name="age" id="" class="form-control" placeholder="" aria-describedby="helpId">
       </div>

       <div class="form-group">
         <label for="">Salary</label>
         <input type="number" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">
       </div>

       <div class="form-group">
         <label for="">Loan Amount</label>
         <input type="number" name="loanamount" id="" class="form-control" placeholder="" aria-describedby="helpId">
       </div>

      <div class="mb-3">
        <label for="" class="form-label"></label>
        <select
            class="form-select form-select-lg"
            name="duration"
            id=""
        >
            <option selected>Select duration</option>
            <option value="">5years</option>
            <option value="">8years</option>
            <option value="">10years</option>
        </select>
      </div>

<button type="submit" class=" btn btn-info">SUBMIT</button>
</form>
<?php
if(isset($_POST['userData'])){
    $name=$_POST['name'] ;
    $age=$_POST['age'] ;
    $salary=$_POST['salary'] ;
    $loanamount=$_POST['loanamount'] ;
    $time=$_POST['duration'] ;
    $duration=$time*12;
    $installment= $loanamount/$duration;


if($age>=21 && $salary>=40000 &&
($loanamount>=200000 && $loanamount>=100000)){
    echo $name." your monthly instalment is ".
    $installment;
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
