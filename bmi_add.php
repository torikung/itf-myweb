<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
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
  	<form action = "bmi_addx.php" method = "post" id="CommentForm" >
		<div class="container">
			<div align="center" class="text-danger"><h1>Insert Form</h1></div>
				<div class="form-group row">
    					<label for="inputName" class="col-sm-2 col-form-label text-light">name</label>
    					<div class="col-sm-10">
      						<input type="text" name = "name" class="form-control" id="inputName" placeholder="Enter Name">
    					</div>
  				</div>
    				<div class="form-group row">
    					<label for="inputWeight" class="col-sm-2 col-form-label text-light">weight</label>
    					<div class="col-sm-10">
      						<input type="float" name = "weight" class="form-control" id="inputWeight" placeholder="Enter weight">
    					</div>
  				</div>
    				<div class="form-group row">
    					<label for="inputHeight" class="col-sm-2 col-form-label text-light">height</label>
    					<div class="col-sm-10">
      						<input type="float" name = "height" class="form-control" id="idHeight" placeholder="Enter height">
    					</div>
  				</div>
			</div>
			<div class="container">
				<tr>
					<div align="center"><button type="submit" class="btn btn-dark">ส่ง</button></div>
				</tr>
			</div>
		</div>
  	</form> 
</body>
</html>
