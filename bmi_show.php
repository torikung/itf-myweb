<html>
<head>
    <title>BMI (Final Test)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body { 
            background-color: white; 
            background-image: url('https://wallpaperstock.net/old-style-gradient_wallpapers_36830_1920x1080.jpg'); 
            background-size: auto; 
            background-repeat: repeat; 
            background-attachment: scroll; 
        } 
    </style>
</head>
<body> 
<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'itfdatabest.mysql.database.azure.com', 'torikung@itfdatabest', 'itf5544!', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $res = mysqli_query($conn, 'SELECT * FROM finaltest');
?>
<div class="container">
    <div align="center" class="text-danger"><h1>BMI calculator</h1></div>
    <table width="400" border="1">
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th width="20%"> <div align="center" class="p-3 mb-2 bg-info text-white">ชื่อ</div></th>
                    <th width="20%"> <div align="center" class="p-3 mb-2 bg-info text-white">น้ำหนัก</div></th>
                    <th width="20%"> <div align="center" class="p-3 mb-2 bg-info text-white">ส่วนสูง</div></th>
                    <th width="20%"> <div align="center" class="p-3 mb-2 bg-info text-white">bmi</div></th>
                    <th width="20%"> <div align="center" class="p-3 mb-2 bg-info text-white">การจัดการ</div></th>
                </tr>
            </thead>
    <?php
        while($Result = mysqli_fetch_array($res))
        {
    ?>
        <tr>
            <td><?php echo $Result['name'];?></div></td>
            <td><?php echo $Result['weight'];?></td>
            <td><?php echo $Result['height'];?></td>
            <td><?php echo $Result['bmi'];?></td>
            <td><div align="center">
                    <form action="bmi_edit.php" method="post">
                        <input type="hidden" name="Id" value=<?php echo $Result['Id'];?>>
                        <button type="submit" class="btn btn-light">update</button></form></div>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
<div class="container">
    <tr>
        <div align="center"><button type="button" class="btn btn-dark" onclick="window.location.href='/bmi_add.php'">เพิ่ม</button></div>
    </tr>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>