
<?php 
//php 7.1.14
//FizzBuzz loop 

echo nl2br("FizzBuzz loop: \n\n"); 

for($k = 1; $k <= 20 ; $k ++) {
    if($k % 3 == 0 && $k % 5 == 0) {
        echo " FizzBuzz ";
    } elseif ($k % 5 == 0) {
        echo " Buzz ";
    } elseif ($k % 3 == 0) {
        echo " Fizz ";
    }else {
        echo ' ' . $k . ' ';
    }
}

?>
