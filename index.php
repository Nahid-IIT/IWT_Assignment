<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
    
<?php


	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "iwt";

	//Create Connection
	$conn =mysqli_connect($host, $user, $pass, $db);

?>

<table>
    <th>ID</th>
    <th>Name</th>
    <th>Department</th>


<?php

$sql="select * from student";
$query=mysqli_query($conn,$sql);
while($info=mysqli_fetch_array($query)){

    ?>

    <tr>
        <td><?php echo $info['id'];?></td>
        <td><?php echo $info['name'];?></td>
        <td><?php echo $info['dept'];?></td>
    </tr>
    <?php

}


?>
</table>

</body>
</html>