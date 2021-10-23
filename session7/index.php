<?php
session_start();
$connection =  mysqli_connect("localhost","root","","lmsfs10");
$query = mysqli_query($connection,"SELECT * FROM `user`");

while($row =  mysqli_fetch_assoc($query)){
    $data[] = $row; 
}

// print_r($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <?php if(!empty($_SESSION['user'])): ?>
            <th>update</th>
            <th>delete</th>
            <?php endif; ?>    
        </tr>
        <?php foreach($data as $user): ?>
        <tr>
            <td> <?= $user['id']; ?> </td>
            <td> <?= $user['name']; ?> </td>
            <td> <?= $user['email']; ?> </td>
            <?php if(!empty($_SESSION['user'])): ?>
            <td><a href="update.php?id=<?= $user['id']; ?>">update</a></td>
            <td><a href="delete.php?id=<?= $user['id']; ?>">delete</a></td>
            <?php endif; ?>    

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>