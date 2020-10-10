
<?php
  require_once('database.php');
  
 ?>

<?php
 
    
  if(isset($_POST['submit'])){
  
  $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $rePassword= $_POST['rePassword'];

    if(empty($username)|| empty($email)|| empty($password)|| empty($rePassword)) {
      header('Location: register.php?empty');
      exit();
    }else if(!preg_match("/^[a-zA-Z0-9]*/", $username)){
      header('Location: register.php?invalidname');
      exit();
    }else if( !preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
      header('Location: register.php?invalidemail');
      exit();

    }else if($password !== $rePassword ){

      exit();
    }else{
    	
      $sqldb= "SELECT guest_name FROM tbl_guest WHERE guest_name = ? ";

      $stmt= mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt,$sqldb)){
      	
        exit();
      }else{
        mysqli_stmt_bind_param($stmt, "s",$username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowcount= mysqli_stmt_num_rows($stmt);

        if ($rowcount >0) {
          session_start();
              $_SESSION['alreadySigned']=true;
              header('Location: form.php?userExist');
              exit();
        }else{
        	
          $hashPass= password_hash($password, PASSWORD_DEFAULT);

          $sql = "INSERT INTO tbl_guest (guest_name, guest_email, guest_password) 
          VALUES('{$username}', '{$email}', '{$hashPass}')";

          //mysqli_query($conn, $query);
          if ($conn->query($sql) === TRUE) {
            session_start();
              $_SESSION['sessionId']= $row['guest_id'];
              $_SESSION['sessionname']= $row['guest_name'];
              $_SESSION['signup']=true;
              header('Location: register.php?user_added=true');
              exit();
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
  
        }

      }
    }
  }



  ?>