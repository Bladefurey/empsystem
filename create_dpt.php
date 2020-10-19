<?php
    include_once("controller/deptcontroller.php");
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $deptController=new DeptController();
        $result=$deptController->createDepartment($name,$email,$phone);
        if($result){
            echo "<div class='alert alert-success'>Department Was Created</div>";
            Database::disconnect();
        }
        else{
            echo "<div class='alert alert-success'>Unable to create Department</div>";
            Database::disconnect();
        }
    }
?>
<!DOCTYPE>
<html>
<head>
<title>Test </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="container bg-light">
<h2> Department Information </h2>
<form class="form-login" method="post">
	        <div class="form-group input-group">
		        <div class="input-group-prepend">
		        <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		         </div>
				 <input name="name" id="name" class="form-control" placeholder="Department name" type="text">
				 
			</div> <!-- form-group// -->
			<div><span id="nameerror" style="color:red"></span></div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
		<input name="email" id="email" class="form-control" placeholder="Email address" type="email">
		
	</div> <!-- form-group// -->
	<div><span id="emailerror"></span></div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+95</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
		<input name="phone" id="phone" class="form-control" placeholder="Phone number" type="text">
		
	</div> <!-- form-group// -->
	<div><span id="phoneerror"></span></div>
    <input type="submit" id="submit" name="submit" class="btn btn-primary">
    <button type="submit" class="btn btn-danger">Cancel</button>
   
                                                                    
</form>	  

</div>
</body>
</html>
