<?php
	require_once('database.php');
	
 ?>
<?php
session_start();
if (isset($_POST['submit1'])) {


	$loginName = $_POST['loginName'];
	$loginPassword = $_POST['loginPassword'];

	if(empty($loginName)|| empty($loginPassword)) {
    	header('Location: user.php?errorempty');
     	exit();
    }else{
    	$sql= "SELECT * FROM tbl_guest WHERE guest_name = ?";
    	$stmt= mysqli_stmt_init($conn);

    	if(!mysqli_stmt_prepare($stmt,$sql)){
	      	header('Location: user.php?errorquery');
	      	exit();
      	}else{
	        mysqli_stmt_bind_param($stmt, "s",$loginName);
	        mysqli_stmt_execute($stmt);
	        $result = mysqli_stmt_get_result($stmt);
      
      		if ($row = mysqli_fetch_assoc($result)) {
      			$passCheck = password_verify($loginPassword, $row['guest_password']);
      
      			if ($passCheck== false) {
		      		header('Location: user.php?errorinvalidpass');
		      		exit();
		      	}else if($passCheck== true){
		      		session_start();
		      		$_SESSION['sessionId']= $row['guest_id'];
		      		$_SESSION['sessionUser']= $row['guest_name'];
		      		$_SESSION['logged']=true;
		      		header('Location: login.php?logged');
		      		exit();
		      	}else{
		      	
		      		header('Location: user.php?errorwronpass'. $loginPassword);
		      		exit();
		      	}

	     	}else{
	      		header('Location: user.php?errorwronpass');
	      		exit();
	      	}
      	
    	}

	}
}





?>