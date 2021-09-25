<?php 

// $number = [20,10,"mohamed"];



// while($num = array_pop($number)){
//     echo $num."<br>";
// }




// $i=0;
// while($i<count($number)){
    
//     echo $number[$i]."<br>";
//     $i++;
// }






















$persons_api1 = [
   [
    'firstname' => 'mohamed',
    'lastname' => 'amr',
    'age' => 26
   ],
   [
    'firstname' => 'ahmed',
    'lastname' => 'amr',
    'age' => 26
   ],
   [
    'firstname' => 'eslam',
    'lastname' => 'amr',
    'age' => 26
   ]
];

$persons_api2 = [
    [
     'fname' => 'said',
     'lname' => 'soliman',
     'age' => 26
    ],
    [
     'fname' => 'sara',
     'lname' => 'ahmed',
     'age' => 26
    ],
    [
     'fname' => 'radwa',
     'lname' => 'awed',
     'age' => 26
    ]
 ];

echo "<pre>";
print_r($persons_api1);
echo "<hr>";
print_r($persons_api2);
// foreach($number as  $k => $key){
//     echo $k."<br>";
// }
// $keys = array_keys($person);
// $size = count($keys);
// for($i=0;$i<$size;$i++){
//     echo  $keys[$i]." : ".$person[$keys[$i]]."<br>";
// }

// print_r($keys);