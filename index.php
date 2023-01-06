<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Create</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>


		   <div class="form-group">
		     <label for="name">donor_id</label>
		     <input type="donor_id" class="form-control"  id="donor_id"   name="donor_id"  value="<?php if(isset($_GET['donor_id']))  echo($_GET['donor_id']); ?>" 
		     placeholder="Enter donor_id">
		   </div>

		   <div class="form-group">
		     <label for="name">name</label>
		     <input type="text"  class="form-control"    id="name"  name="name"  value="<?php if(isset($_GET['name']))  echo($_GET['name']); ?>"
		      placeholder="Enter name">
		   </div>




		  
		   <div class="form-group">
		   <label for="name">gender</label>
		   <select name="gender" id="gender"   value="<?php if(isset($_GET['gender']))  echo($_GET['gender']); ?>"   class="form-control">
	 <option value=" " salected>select gender</option>
	 <option value="male">male</option>
    <option value="female">female</option>
   
  </select>
		   </div>





		   <div class="form-group">
		     <label for="email">age</label>
		     <input type="number"  class="form-control"    id="age"  name="age"  value="<?php if(isset($_GET['email']))  echo($_GET['email']); ?>"
		      placeholder="Enter age">
		   </div>





		   <div class="form-group">
		     <label for="name">address</label>
		     <input type="address" class="form-control"  id="address"   name="address"  value="<?php if(isset($_GET['address']))  echo($_GET['address']); ?>" 
		     placeholder="Enter address">
		   </div>

		   <div class="form-group">
		     <label for="email">mobile</label>
		     <input type="mobile"  class="form-control"    id="mobile"  name="mobile"  value="<?php if(isset($_GET['mobile']))  echo($_GET['mobile']); ?>"
		      placeholder="Enter mobile">
		   </div>




		   <div class="form-group">
		     <label for="name">alternate_mobile</label>
		     <input type="alternate_mobile" class="form-control"  id="alternate_mobile"   name="alternate_mobile"  value="<?php if(isset($_GET['alternate_mobile']))  echo($_GET['alternate_mobile']); ?>" 
		     placeholder="Enter alternate_mobile">
		   </div>

		



		   <div class="form-group">
		     <label for="email">blood_group</label>

	 <select name="blood_group" id="blood_group"   value="<?php if(isset($_GET['blood_group']))  echo($_GET['blood_group']); ?>"   class="form-control">
	 <option value=" " salected>select blood_group</option>
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
		     <label for="email">disease</label>
		     <input type="disease"  class="form-control"    id="disease"  name="disease"  value="<?php if(isset($_GET['disease']))  echo($_GET['disease']); ?>"
		      placeholder="Enter disease">
		   </div>


		   <div class="form-group">
		     <label for="email">units</label>
		     <input type="units"  class="form-control"    id="units"  name="units"  value="<?php if(isset($_GET['units']))  echo($_GET['units']); ?>"
		      placeholder="Enter units">
		   </div>


		   <div class="form-group">
		     <label for="email">created_at</label>
		     <input type="date"  class="form-control"    id="created_at"  name="created_at"  value="<?php if(isset($_GET['created_at']))  echo($_GET['created_at']); ?>"
		      placeholder="select created_at">
		   </div>


		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>