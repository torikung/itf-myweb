<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfdatabest.mysql.database.azure.com', 'torikung@itfdatabest', 'itf5544!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$name = $_POST['name'];
$text = $_POST['comment'];
$link = $_POST['link'];
$sql = "UPDATE guestbook SET Name='$name', Comment='$text', Link='$link' WHERE ID='$ID'";

if (mysqli_query($conn, $sql)) {
    echo "Record Update Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>