<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfdatabest.mysql.database.azure.com', 'torikung@itfdatabest', 'itf5544!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$Id = $_POST['Id'];
$name = $_POST['name'];
$text = $_POST['weight'];
$link = $_POST['height'];
$sql = "UPDATE guestbook SET name='$name', weight='$text', height='$height' WHERE Id='$Id'";
$url='/show.php';

if (mysqli_query($conn, $sql)) {
    echo "Record Update Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$url.'">';

mysqli_close($conn);
?>