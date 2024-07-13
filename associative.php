<?php
$associative =
    ["name"=>"sani","age"=>23,"city"=>"karachi"]  


?>
<ul>
    <?php
    foreach($associative  as $key=>$associative2){
        ?>
        <li><?php echo $key  . "  : " .  $associative2
        ?></li><?php
    }
    ?>

</ul>

<?php
$aptech=[
    ["name"=> "sani ","age"=>23,"city"=>"karachi"],
    ["name"=> "ali","age"=>18,"city"=>"lahore"],
    ["name"=> "ahmed ","age"=>27,"city"=>"multan"],
    ["name"=> "daniyal ","age"=>19,"city"=>"karachi"],

]
?>
<table border="1">
    <thead>
        <th>NAME:-</th>
        <th>AGE:-</th>
        <th> CITY:-</th>
        

    </thead>
    <tbody>
        <?php
        foreach($aptech as $i){
            ?>
            <tr>
                <?php
                foreach($i as $j){
                    ?>
                    <td><?php echo $j?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
