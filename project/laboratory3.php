<!DOCTYPE html>

new change here
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <label>Name: </label>
    <i>Karel Jiro Villafranca</i>
    <br> -->
    <form method ="post" action = "">
        <label>number: </labe>
        <input type ="text" name ="number">
        <br><br>
        <input type ="submit" name ="submit" value ="Multiply">
        <br>
    </form>
    <?php
        // WHILE LOOP
        $i = 1;
        while ($i <= 10) {
            echo "$i<br>";
            $i++;
        }
        // WHILE LOOP

        // DO WHILE LOOP
        $j = 10;

        do {
            echo "$j<br>";
            $j--;
        } while ($j >= 1);
        // DO WHILE LOOP

        // FOREACH LOOP
        $numbers = [3, 7, 9, 12, 5];
        $sum = 0;
        echo "The array is:  [3, 7, 9, 12, 5] <br>";
        foreach ($numbers as $number) {
            $sum += $number;
        }
        
        echo "The sum of the array is: $sum<br>";
        // FOREACH LOOP

        // FOR LOOP
        if(isset($_POST['submit'])){
            //data here
            $number =  $_POST['number'];
            for ($k = 1; $k <= 10; $k++) {
                $result = $number * $k;
                echo "$number x $k = $result<br>";
            }
        }
       // FOR LOOP
    ?>
        <!-- <h2> Jiro - 25 </h2> -->
</body>
</html>