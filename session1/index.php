<?php 


$name = "omar";
// $age = 20.5;
// echo gettype($age);

// if($name == "mohamed"):
//     echo "mohamed is true <br>";
// elseif($name == "ahmed"):
//     echo "ahmed is true";
// elseif($name == "eslam"):
//     echo "eslam is true";
// endif;



switch($name){
    case "mohamed":
        echo "mohamed is true <br>";
    break; 
    case "ahmed":
        echo "ahmed is true <br>";
    break;  
    default :
        echo "notfound";
}

