<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	

	


	$donor_id = validate($_POST['donor_id']);
	$name = validate($_POST['name']);
        $gender = validate($_POST['gender']);
	$age = validate($_POST['age']);
        $address = validate($_POST['address']);
	$mobile = validate($_POST['mobile']);
        $alternate_mobile = validate($_POST['alternate_mobile']);
	$blood_group = validate($_POST['blood_group']);
        $disease = validate($_POST['disease']);
	$units = validate($_POST['units']);
        $created_at = validate($_POST['created_at']);




		$user_data ='donor_id='.$donor_id. '&name='.$name.'&gender='.$gender. '&age='.$age. 
		'&address='.$address. '&mobile='.$mobile. '&alternate_mobile='.$alternate_mobile. '&blood_group='.$blood_group.  '&disease='.$disease. 
		'&units='.$units. '&created_at='.$created_at;



		if (empty($donor_id)) {
			header("Location: ../index.php?error=donor_id is required&$user_data");
		}
			
			
			else if (empty($name)) {
			header("Location: ../index.php?error=name is required&$user_data");
	
	
		}
			
			else if (empty($gender)) {
			header("Location: ../index.php?error=gender is required&$user_data");
	
	
		}
			
			
			else if (empty($age)) {
			header("Location: ../index.php?error=age is required&$user_data");
	
	
		}
			
			
			else if (empty($address)) {
			header("Location: ../index.php?error=address is required&$user_data");
	
	
		}
			
			
			else if (empty($mobile)) {
			header("Location: ../index.php?error=mobile is required&$user_data");
	
	
		}
	
	
			else if (empty($alternate_mobile)) {
			header("Location: ../index.php?error=alternate_mobile is required&$user_data");
	
	
		}
	
	
	
			
			else if (empty($blood_group)) {
			header("Location: ../index.php?error=blood_group is required&$user_data");
	
	
		}
			
	
			else if (empty($disease)) {
			header("Location: ../index.php?error=disease is required&$user_data");
	
	
		}
			
	
			else if (empty($units)) {
			header("Location: ../index.php?error=units is required&$user_data");
	
	
		}
	
	
	
			else if (empty($created_at)) {
			header("Location: ../index.php?error=created_at is required&$user_data");
	
	
		}


	else {

       $sql ="INSERT INTO donors(id,donor_id, name , gender, age, address, mobile, alternate_mobile, blood_group, disease, units, created_at) 
               VALUES(NULL,'$donor_id', '$name' , '$gender' ,'$age','$address','$mobile','$alternate_mobile','$blood_group', 
			   '$disease' ,'$units' ,'$created_at')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}