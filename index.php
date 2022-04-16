<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Enter any string to count the number of words in it</h2>
<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="GET">
    <input type="text" id="myString" name="myString">
    <input type="submit" id="submit">
</form>

<br>
<br>
</body>
</html>





<?php

if(!empty($_GET)){
        if(isset($_GET['myString']) && !empty($_GET['myString'])){
            // my string
	        $str = $_GET['myString'];
            countWords(strtolower($str));
        }
    }
	
    function countWords($str) {
        // split string into words and put into an array
        $words = explode(' ', $str);
        $count = array();

        // Loop throgh the resulys and start counting
        foreach ($words as $value) {
            // Check to see if the word exists if so increment the count if not start the count at 1
            if (isset($count[$value])) {
                $count[$value]++;
            } else {
                $count[$value] = 1;
            }
    
        }

        // Display the results
        echo "<pre>".print_r($count, true)."</pre>";
        $frequency = array_count_values($words);
        arsort($frequency);
        echo '<table><tr><th>Word</th><th>Count</th></tr>';
                    foreach($frequency as $word => $count) {
                        echo '<tr><td>'.$word.'</td><td>'.$count.'</td></tr>';
                    }
        echo '</table>';
    }
?>





