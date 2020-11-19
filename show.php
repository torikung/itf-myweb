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
?>
<?php 
        if(isset($_SESSION["id"])){
            $editt = "SELECT * FROM guestbook WHERE ID='".$_SESSION["id"]."'";
            $res = mysqli_query($conn, $editt);
            $Reedit = mysqli_fetch_array($res)
            ?>
            
            <form action="" method="post">
                <div style="opacity:0%;">.</div>
                Name:<br>
                    <input type="text" name = "ename" id="idName" placeholder="Enter Name" value="<?php echo $Reedit['Name'];?>"><br>
                Comment:<br>
                <textarea rows="10" cols="20" name = "ecomment" id="idComment" placeholder="Enter Comment"><?php echo $Reedit['Comment'];?></textarea><br>
                Link:<br>
                <input type="text" name = "elink" id="idLink" placeholder="Enter Link" value="<?php echo $Reedit['Link'];?>"><br><br>
                <button type="submit" name="editBtn">Submit</button><br><br>
                <div style="opacity:0%;">.</div>
            </form>
        
        <?php
        }else{
        if(isset($_SESSION['dire'])){
    if($_SESSION['dire'] == "View"){
        ?>
        <table width="600" border="1">
              <tr>
                <th width="100"> <div align="center">Name</div></th>
                <th width="350"> <div align="center">Comment </div></th>
                <th width="150"> <div align="center">Link </div></th>
                <th width="150"> <div align="center">Action </div></th>
              </tr>
            <?php
            $res = mysqli_query($conn, 'SELECT * FROM guestbook');
            while($Result = mysqli_fetch_array($res))
            {
            ?>
              <tr>
                    <td><?php echo $Result['name'];?></div></td>
                    <td><?php echo $Result['comment'];?></td>
                    <td><?php echo $Result['Link'];?></td>
                    <td>
                        <form  action="" method="post">
                            <button type="submit" name="edit" value="<?php echo $Result['ID'];?>">แก้ไข</button>
                            <button type="submit" name="del" value="<?php echo $Result['ID'];?>">ลบออก</button>
                        </form>
                    </td>
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
        <input type="submit" name="submit" value="เพิ่ม">
    </p>
</form>
}
}
</body>
</html>
