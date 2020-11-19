<!DOCTYPE html>
<html>
<head>
<style>
	.form {
  		align: center;
	}
</style>
    	<title>Edited Form</title>
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
    
$id = $_POST['id'];
$sql = "SELECT * FROM guestbook WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$comment = mysqli_fetch_array($res);
?>
<form action="edit.php" method="post" class="mt-4">
    <div class="container">
        <div align="center"><h1>Edit comment</h1></div>
            <input type="hidden" name="id" value=<?php echo $comment['id'];?>>
            <div class="form-group row">
    		<label for="inputName" class="col-sm-2 col-form-label">Name</label>
    		<div class="col-sm-10", "form">
                	<?php
                    		echo '<input type="text" name="name" id="inputName" class="form-control" placeholder="Enter Name" value="'.$comment["name"].'">'
                	?>
		</div>
	    </div>
            <div class="form-group row">
    		<label for="inputComment" class="col-sm-2 col-form-label">Comment</label>
    		<div class="col-sm-10", "form">
                	<textarea name="comment" class="form-control" id="inputComment" row="3" placeholder="Enter Comment"><?php echo $comment['comment'];?></textarea>
		</div>
            </div>
            <div class="form-group row">
                <label for="inputComment" class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10", "form">
                	<?php
                    		echo '<input type="text" name="link" id="inputLink" class="form-control" placeholder="Enter Link" value="'.$comment["link"].'">'
                	?>
		</div>
            </div>
            <div class="container">
		<div align="center"><button type="submit" class="btn btn-dark">Save</button>&nbsp;
                <a role="button" class="btn btn-secondary" href="show.php">Back</a></div>
            </div>
	</div>
    </div>
</form>
<?php
mysqli_close($conn);
?>
</body>
</html>
