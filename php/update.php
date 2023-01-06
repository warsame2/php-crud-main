<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM donors WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$donor_id = validate($_POST['donor_id']);
	$name = validate($_POST['name']);
	$id = validate($_POST['id']);
        $gender = validate($_POST['gender']);
	$age = validate($_POST['age']);
        $address = validate($_POST['address']);
	$mobile = validate($_POST['mobile']);
        $alternate_mobile = validate($_POST['alternate_mobile']);
	$blood_group = validate($_POST['blood_group']);
        $disease = validate($_POST['disease']);
	$units = validate($_POST['units']);
        $created_at = validate($_POST['created_at']);
	
	

	if (empty($donor_id)) {
		header("Location: ../update.php?id=$id&error=donor_id is required");
	}
        
        
        else if (empty($name)) {
		header("Location: ../update.php?id=$id&error=name is required");


	}
        
        else if (empty($gender)) {
		header("Location: ../update.php?id=$id&error=gender is required");


	}
        
        
        else if (empty($age)) {
		header("Location: ../update.php?id=$id&error=age is required");


	}
        
        
        else if (empty($address)) {
		header("Location: ../update.php?id=$id&error=address is required");


	}
        
        
        else if (empty($mobile)) {
		header("Location: ../update.php?id=$id&error=mobile is required");


	}


        else if (empty($alternate_mobile)) {
		header("Location: ../update.php?id=$id&error=alternate_mobile is required");


	}



        
        else if (empty($blood_group)) {
		header("Location: ../update.php?id=$id&error=blood_group is required");


	}
        

        else if (empty($disease)) {
		header("Location: ../update.php?id=$id&error=disease is required");


	}
        

        else if (empty($units)) {
		header("Location: ../update.php?id=$id&error=units is required");


	}



        else if (empty($created_at)) {
		header("Location: ../update.php?id=$id&error=created_at is required");


	}




        
        else {

       $sql = "UPDATE donors
               SET donor_id='$donor_id', name='$name',gender='$gender',
               age='$age',address='$address',mobile='$mobile',alternate_mobile='$alternate_mobile',
               blood_group='$blood_group',disease='$disease',units='$units',created_at='$created_at'


               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}