    <?php
    $name =["ali","sani","fatima"];
    $age = 14;

    ?>
    <ul>
        <?php
        for($i=0 ; $i<count($name); $i++){
    ?>
    <li><?php echo $name [$i]?></li>
    <?php

        }   
        ?>
    </ul>




<?php
$student=["ali","fizza","ghazi"];
?>
<ul>
    <?php
    foreach($student as $std){
    ?>
    <li> 
        <?php 
     echo $std
     ?></li>
     <?php
    }

?>
</ul>
<!-- nested loops -->
 <?php
$aptect_students = [

["ali","ali@gmail.com",12,"karcahi"],
["ahmed","ahmed@gmail.com",34,"lahore"],
["sani","sani@gmail.com",27,"multan"],
["fizza","fizza@gmail.com",23,"peshawar"],

]

 ?>
 <table border="1">
    <thead>
        <tr>
            <th>NAME :-</th>
            <th> EMAIL:-</th>
            <th>AGE:-</th>
            <th>CITY;:-</th>

        </tr>
    </thead>

 
 <tbody>
    <?php
    
    for($i=0;$i<count($aptect_students);$i++){
        ?>
        <tr>
            <?php   
            for($j=0;$j<count($aptect_students[$i]);$j++){
            ?>
            <td><?php echo $aptect_students [$i][$j]?></td>
        
            <?php
            }
            ?>
        </tr>
        <?php

    }
    
    ?>
 </tbody>
</table>

<h1> by for each loop</h1>
<table border="1">
    <thead>
        <tr>
            <th>NAME :-</th>
            <th> EMAIL:-</th>
            <th>AGE:-</th>
            <th>CITY;:-</th>

        </tr>
    </thead>

 
 <tbody>
    <?php
foreach($aptect_students as $i){
    ?>
    <tr>
        <?php
        foreach($i as $j){
            ?>
            <td>
                
                <?php echo $j
            
            ?>
            </td>
            <?php
        }
        ?>
    </tr>
    <?php
}

    ?>
</table>


