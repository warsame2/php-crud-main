<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php"   method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>

		   <?php } ?>
		   <div class="form-group">
		     <label for="name">donor_id</label>
		     <input type="text"  class="form-control"  id="donor_id"  name="donor_id"  value="<?=$row['donor_id'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name"  class="form-control"  id="name"  name="name"  value="<?=$row['name'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="name">gender</label>
		     <input type="text"  class="form-control"  id="gender"  name="gender"  value="<?=$row['gender'] ?>" >
		   </div>



		   <div class="form-group">
		     <label for="name">age</label>
		     <input type="number"  class="form-control"  id="age"  name="age"  value="<?=$row['age'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="name">address</label>
		     <input type="text"  class="form-control"  id="address"  name="address"  value="<?=$row['address'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="name">mobile</label>
		     <input type="mobile"  class="form-control"  id="mobile"  name="mobile"  value="<?=$row['mobile'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="name">alternate_mobile</label>
		     <input type="mobile"  class="form-control"  id="alternate_mobile"  name="alternate_mobile"  value="<?=$row['alternate_mobile'] ?>" >
		   </div>


		  


		   <div class="form-group">
		   <label for="name">blood_group</label>
		   <select name="blood_group" id="blood_group"   value="<?=$row['blood_group'] ?>"   class="form-control">
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="AB+">AB+</option>
    <option value="O+">O+</option>
	<option value="A-">A-</option>
    <option value="B-">B-</option>
    <option value="AB-">AB-</option>
    <option value="O-">O-</option>
  </select>
  </div>





		   <div class="form-group">
		     <label for="name">disease</label>
		     <input type="disease"  class="form-control"  id="disease"  name="disease"  value="<?=$row['disease'] ?>" >
		   </div>



		   <div class="form-group">
		     <label for="name">units</label>
		     <input type="units"  class="form-control"  id="units"  name="units"  value="<?=$row['units'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="name">created_at</label>
		     <input type="date"  class="form-control"  id="created_at"  name="created_at"  value="<?=$row['created_at'] ?>" >
		   </div>




		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>