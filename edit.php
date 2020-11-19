<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfdatabest.mysql.database.azure.com', 'torikung@itfdatabest', 'itf5544!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_POST['id'];
$name = $_POST['name'];
$text = $_POST['comment'];
$link = $_POST['link'];
$sql = "UPDATE guestbook SET name='$name', comment='$text', link='$link' WHERE id='$id'";
$url='/show.php';

if (mysqli_query($conn, $sql)) {
    echo "Record Update Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

echo '<META HTTP-EQUIV=REFRESH CONTENT="3; '.$url.'">';

mysqli_close($conn);
?>
