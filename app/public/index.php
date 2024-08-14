<?php

// $array = [
//     'Russia' => ['capital' => 'Moscow', 'citizen'=> 140000],
//     'China' => ['capital' => 'Beijin', 'citizen'=> 1400000],
//     'Belorussia' => ['capital' => 'Minsk', 'citizen'=> 10000],
// ];

// foreach ( $array as $key => list('capital' => $capital, 'citizen' => $citizen)) {
//     var_dump($key);
//     var_dump( $capital );
//     var_dump( $citizen );
// }

// $var = 'val1';

// $return = '';

// switch ($var) {
//     case "val1":
//         $return = "foo_for_var1";
//         break;
//     case "val2":
//         $return = "foo_for_var2";
//         break;
//     case "val3":
//         $return = "foo_for_var3";
//         break;
//     default:
//     $return = 'defualt';
//         break;
// }

// print_r($return);

// $return = match($var) {
//     "val1" => "foo_for_var1",
//     "val2" => "foo_for_var2",
//     "val3" => "foo_for_var3",
//     "val4" => "foo_for_var4",
//     default => "default",
// };

// print_r($return);

// $micro =  microtime(true);


// for ( $i = 0; $i < 5000000; $i++ ) {
//     $var = 'val1';

//     $return = '';

//     switch ($var) {
//         case "val1":
//             $return = "foo_for_var1";
//             break;
//         case "val2":
//             $return = "foo_for_var2";
//             break;
//         case "val3":
//             $return = "foo_for_var3";
//             break;
//         default:
//         $return = 'defualt';
//             break;
//     }
// }

// echo PHP_EOL;
// echo microtime(true) - $micro;


// $micro =  microtime(true);

// for( $i = 0; $i < 5000000; $i++ ) {
//     $var = 'val1';

//     $return = '';

//     $return = match($var) {
//         "val1" => "foo_for_var1",
//         "val2" => "foo_for_var2",
//         "val3" => "foo_for_var3",
//         "val4" => "foo_for_var4",
//         default => "default",
//     };
// }

// echo PHP_EOL;
// echo microtime(true) - $micro;


include('../src/Main.php');

// $main = new Main();

// var_dump($main->var);
// var_dump($main::$ps);
// $main->func();


// $int = 5;

// Main::statFunc($int);

// echo $int;

// echo "<html> $int </html>";


//echo "h1";

print_r($_GET);

print_r(1);
