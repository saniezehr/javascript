<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>marksheet</title>
    <style>
        .container{
            border:7px solid green;
            height:1000px;
            width:60%;

        }
        .input-group-text{
            width: 100px;
        }
        .t_p{
            gap:100px;
        }
        /* .table{
    text-align: center;
    
        } */
    </style>
  </head>
  <body>
    <?php
if(isset($_POST['userSubmit'])){
    $name = $_POST['userName'];
    $fathername = $_POST['userFatherName'];
    $email = $_POST['userEmail'];
    $age = $_POST['userAge'];
    $class = $_POST['userClass'];
    $b_date = $_POST['userBirthdate'];
    $field = $_POST['userField'];
    $userbio = $_POST['userBio'];
    $usermath = $_POST['usermath'];
    $userurdu = $_POST['userurdu'];
    $usereng = $_POST['usereng'];
    $userisl = $_POST['userisl'];
    $userphy = $_POST['userphy'];
    $userchem = $_POST['userchem'];
    $total_marks=$userbio+$usermath+$userurdu+$usereng+$userisl+$userphy+$userchem;
$percentage=$total_marks/700*100;
    ?>

        <div class="container">
        <h2 class="text-center my-3">CONGRULATION THIS IS YOUR MARK SHEET !</h2>
        <br>
        <label>Name:-</label>
        <?php
        echo $name;
        ?>
        <br>
        <label>Father Name:-</label>
        <?php
       echo $fathername;
       ?><br>
       <label>Email:-</label>
        <?php
        echo $email;
        ?><br>
        <label>Age:-</label>
        <?php
        echo $age;
        ?><br>
        <label>Class:-</label>
        <?php
        echo $class;
        ?><br>
        <label>Birth Date:-</label>
        <?php
        echo $b_date;
        ?><br>
        <label>Field:-</label>
        <?php
        echo $field;
        ?>
        <br><br><br>
        <h4 class="text-center">YOUR MARKS</h4>
<table class="table">
        <tr >
            <td>Bio/Comp Marks :-</td>
            <td>
                <?php
                echo $userbio;
                ?>
            </td>
        </tr>
        <tr >
            <td> Maths Marks :-</td>
            <td>
                <?php
                echo $usermath;
                ?>
            </td>
        </tr> <tr >
            <td>Urdu Marks :-</td>
            <td>
                <?php
                echo $userurdu;
                ?>
            </td>
        </tr> <tr >
            <td> English Marks :-</td>
            <td>
                <?php
                echo $usereng;
                ?>
            </td>
        </tr> <tr >
            <td>Islamiat Marks :-</td>
            <td>
                <?php
                echo $userisl;
                ?>
            </td>
        </tr> <tr >
            <td>Physics Marks :-</td>
            <td>
                <?php
                echo $userphy;
                ?>
            </td>
        </tr> <tr >
            <td>Chemistry Marks :-</td>
            <td>
                <?php
                echo $userchem;
                ?>
            </td>
        </tr> 
    </table>
<div class="t_p d-flex">
<h4>TOTAL :-
<?php
    echo $total_marks;
    ?>
    /700
</h4>
<br><br>
<h4> PERCENTAGE :-<PERCENTAGE:-><?php
echo $percentage;
?></PERCENTAGE:->%</h4>
    </div>
    </div>
    
    <?php
      }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

   
  </body>
</html>

