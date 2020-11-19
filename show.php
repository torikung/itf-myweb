<html>
<head>
    <title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
<div class="container">
    <div align="center" class="text-primary"><h1>DataBase Table</h1></div>
    <table width="400" border="1">
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th width="100"> <div align="center" class="p-3 mb-2 bg-primary text-white">Name</div></th>
                    <th width="300"> <div align="center" class="p-3 mb-2 bg-primary text-white">Comment</div></th>
                    <th width="150"> <div align="center" class="p-3 mb-2 bg-primary text-white">Link</div></th>
                    <th width="10%"> <div align="center" class="p-3 mb-2 bg-primary text-white">Edit</div></th>
                    <th width="10%"> <div align="center" class="p-3 mb-2 bg-primary text-white">Delete</div></th>
                </tr>
            </thead>
    <?php
        while($Result = mysqli_fetch_array($res))
        {
    ?>
            <td><?php echo $Result['Name'];?></div></td>
            <td><?php echo $Result['Comment'];?></td>
            <td><?php echo $Result['Link'];?></td>
            <td><div align="center">
                    <form action="edit_form.php" method="post">
                        <input type="hidden" name="ID" value=<?php echo $Result['ID'];?>>
                        <button type="submit" class="btn btn-light">แก้ไข</button></form></div>
            </td>
            <td><div align="center">
                    <form action="delete.php" method="post">
                        <input type="hidden" name="ID" value=<?php echo $Result['ID'];?>>
                        <button type="submit" class="btn btn-light">ลบ</button></form></div>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
<div class="container">
    <form action="form.html" method="POST"
        <p>
            <div align="center"><input type="submit" class="btn btn-dark" name="submit" value="เพิ่ม"></div>
        </p>
    </form>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
