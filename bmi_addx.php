<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfdatabest.mysql.database.azure.com', 'torikung@itfdatabest', 'itf5544!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$url='/bmi_show.php';


$sql = "INSERT INTO finaltest (Name , Weight , Height) VALUES ('$name', '$weight', '$height')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$url.'">';

mysqli_close($conn);
?>
