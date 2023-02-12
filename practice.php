<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>
    <div class="coding">

        <section class="header">
            <h1>PHP Fundamentals Trainning</h1>
        </section>

        <section class="main">
            <!-- string function -->
            <h1>
                <?php
                    function name($fname, $lname){
                        echo "my name is, $fname $lname";
                    }
                    name("sagar","biswas");
                ?>
            </h1>

            <!-- variable and operators -->
            <p>
                <?php
                    $a = 5;
                    $b = 7;
                    $addition = $a + $b;
                    $subtraction = $b - $a;
                    $multiplication = $a * $b;
                    $division = $b / $a;
                    echo "the addition of 5 and 7 is: $addition";
                    echo "<br>";
                    echo "the subtraction of 7 and 5 is: $subtraction";
                    echo "<br>";
                    echo "the multiplication of 5 and 7 is: $multiplication";
                    echo "<br>";
                    echo "the division of 7 and 5 is: $division";
                ?>
            </p>

            <!-- string methodes -->
            <p>
                <?php
                    $string = "america is a bad country";
                    echo "length of the $string is: " . strlen($string);
                    echo "<br>";
                    echo "reverse of the $string is: " , strrev($string);
                    echo "<br>";
                    echo "amrica is replaced by pakistan: " . str_replace("america", "pakistan", $string);
                    echo "<br>";
                    echo "this line will be repeat: " . str_repeat($string, 5);
                    echo "<br>";
                ?>
            </p>

            <!-- condition -->
            <p>
                <?php
                    function age($age){
                        if($age < 18){
                            echo "you are still a boy";
                        }
                        elseif($age >= 18 && $age < 100){
                            echo "you can purchase alcohol";
                        }
                        else{
                            echo "you are too old to consume alcohol";
                        }
                    }
                    age(100);
                ?>
            </p>

            <!-- switch case condition -->
            <p>
                <?php
                    function HowOld($age){
                        switch($age){
                            case ($age <= 10):
                                echo "you are between 00-10 year <br>";
                                break;

                            case ($age >=11 && $age <=20):
                                echo "you are between 11-20 year <br>";
                                break;
                            
                            case ($age >=21 && $age <= 30):
                                echo "you are between 21-30 year <br>";
                                break;

                            default:
                                echo "you are older than 30 year <br>";
                                break;

                        }
                    }
                    HowOld(10);
                    HowOld(15);
                    HowOld(25);
                    HowOld(100);
                ?>
            </p>

            <!-- while loop -->
            <p>
                <?php
                    $i = 0;
                    while($i < 5){
                        echo $i+1;
                        echo "<br>";
                        $i++;
                    }
                ?>
            </p>

            <!-- while loop with functional increment -->
            <p>
                <?php
                    function increment($digit){
                        $i = 0;
                        echo "incrementof 0 to $digit is";
                        echo "<br>";
                        while($i < $digit){
                            
                            echo $i + 1;
                            echo "<br>";
                            $i++;
                        }
                    }
                    increment(10);
                    increment(15);
                ?>
            </p>

            <!-- for loop with functional increment -->
            <p>
                <?php
                    function ForIncrement($digit){
                        for($i = 0; $i < $digit; $i++){
                            echo $i + 1;
                            echo "<br>";
                        }
                    }
                    ForIncrement(5);
                ?>
            </p>

            <!-- do while loop -->
            <!-- VVI. condition prothom bar false holeo do while loop ekbar run hoy -->
            <p>
                <?php
                    $i = 8;
                    do{
                        echo $i;
                        $i++;
                    }
                    while($i < 5);
                ?>
            </p>

            <!-- foreach loop -->
            <!-- VVI foreach loop array er moddhe iteration a beshi karjokori -->

            <p>
                <?php
                    $array = array("angur", "kola", "pepe", "peyara");

                    echo "array iteration with for loop <br>";
                    for($i = 0; $i < count($array); $i++){
                        echo $array[$i];
                        echo"<br>";
                    }

                    echo"<br>";
                    // for each loop diye array take aro valovabe iterate kora jay
                    echo "array iteration with foreach loop <br>";
                    foreach ($array as $value) {
                        echo "$value <br>";
                    }
                ?>
            </p>

            <!-- function example -->
            <p>
                <?php
                    function ProcessMark($MarkArray){
                        $sum = 0;
                        foreach ($MarkArray as $value) {
                            $sum = $sum + $value;
                        }
                        return $sum;
                    }
                    $sagar = [30, 55, 68, 92, 70];
                    $sum_sagar = ProcessMark($sagar);
                    $sajib = [30, 45, 78, 98, 55];
                    $sum_sajib = ProcessMark($sajib);
                    echo "total marks scored by sagar out of 500 is $sum_sagar <br>";
                    echo "total marks scored by sajib out of 500 is $sum_sajib <br>";
                ?>
            </p>

            <!-- date example -->
            <p>
                <?php
                    $d = date('l');
                    echo "today is $d <br>";
                ?>
            </p>

            <!-- associative array -->
            <p>
                <?php
                    // this is normal array
                    $fruits = array("apple", "orange", "papaya");
                    echo "$fruits[0] <br>";
                    echo "$fruits[1] <br>";
                    echo "$fruits[2] <br>";
                    echo "<br>";

                    //this is associative array (key => value)
                    $favColor = array('sagar' => 'red',
                                    'sajib' => 'gren',
                                    'saikat' => 'blue',
                                    8 => 'black');
                    
                    foreach ($favColor as $key => $value) {
                        echo "fav color of $key is $value <br>";
                    }

                    // echo "sagars fav color is $favColor[sagar] <br>";
                    // echo "sajib fav color is $favColor[sajib] <br>";
                    // echo "saikat fav color is $favColor[saikat] <br>";
                ?>
            </p>

            <!-- multi dimentional (array in another array) array example -->
            <p>
                <?php
                    $MulDimArray = array(array(1, 2, 3),
                                        array(4, 5, 6),
                                        array(7, 8, 9));
                    echo $MulDimArray[0][0]; 
                    echo $MulDimArray[0][1];
                    echo $MulDimArray[0][2];
                    echo"<br>";
                    echo $MulDimArray[1][0];
                    echo $MulDimArray[1][1];
                    echo $MulDimArray[1][2];
                    echo"<br>";
                    echo $MulDimArray[2][0];
                    echo $MulDimArray[2][1];
                    echo $MulDimArray[2][2]; 
                    echo"<br>";
                    echo"<br>";

                    //we can iterate it too
                    for($i = 0; $i < count($MulDimArray); $i++){
                        for($j = 0; $j < count($MulDimArray[$i]); $j++){
                            echo $MulDimArray[$i][$j];
                            echo " ";
                        }
                        echo "<br>";
                    }

                ?>
            </p>

        </section>

        <section class="footer">
            <h1>This is Footer Section</h1>
        </section>
    </div>


</body>
</html>