<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itfdatabest.mysql.database.azure.com', 'torikung@itfdatabest', 'itf5544!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <p>
        <input type="submit" name="submit" value="del">
    </p>
    <p>
        <input type="submit" name="submit" value="fix">
    </p>
    </form>
</form>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<form action="form.html" method="POST"
    <p>
        <input type="submit" name="submit" value="hi">
    </p>
</form>
</body>
</html>
