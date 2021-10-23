<?php

// echo "<pre>";
// print_r($_FILES);die;
// $count = count($_FILES['img']['name']);
// for($i=0;$i<$count;$i++){
//     $tmp = $_FILES['img']['tmp_name'][$i];
//     $imgname = $_FILES['img']['name'][$i];
//     move_uploaded_file($tmp,$imgname);
// }

// foreach($_FILES['img'] as $key => $value){
//     if($key == 'tmp_name'){
//        $tmp =  $value;
//     }
//     if($key == 'name'){
//         $imgname =  $value;
//      }
//     move_uploaded_file($tmp,$imgname);
// }


// $type = $_FILES['img']['type'];

// $ext = explode("/",$type);

// $ext = end($ext);
// $img_name = $_FILES['img']['name'];


$username = $_POST['username'];

// mysqli 

// open connection 
$connection =  mysqli_connect("localhost","root","","lmsfs10");
mysqli_query($connection,"INSERT into `user` (`name`) VALUES ('$username')");

