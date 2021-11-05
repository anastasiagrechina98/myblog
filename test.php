<?php

$str = "puk";
echo "str = " . $str . "<br>";
$x = 3;
$y = 5;
$name =  "x = " . $x . "<br>";
$sum = $x + $y;
$array = [
    "0" => ["name" =>  "Aimur", "age" => 20],
    "1" => ["name" => "Nastya" , "age" => 18],
];

echo $array[0];
echo $array[1];
?>

<html>
    <head>
        <title>Main page</title>
    </head>
    <body>
        <h1><?php echo $str; ?></h1>
        <div> <?php echo $name; ?> </div>
        <h3> <?php echo $sum; ?><h3>
          <?php  foreach($array as $user): ?>
                <h2> 
                   Name:  <?php echo $user['name']; ?> 
                <h2>
                <h2> 
                   Age:  <?php echo $user['age']; ?> 
                <h2>
            <?php endforeach; ?>
    </body>
</html>