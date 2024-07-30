<?php
   session_start();
   include("includes/sqlconnection.php");
	
    if(isset($_POST['save_record'])) {
        $studname = $_POST['txtname'];
        $contact = $_POST['txtcontact'];
        $email = $_POST['txtemail'];
        $pic = $_FILES['txtpic']['name'];
        
		$sql = "INSERT INTO studinfo(fullname, contact, email, pic) VALUES ('$studname', '$contact', '$email', '$pic')";
        
		if($conn->query($sql)===TRUE){
			move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
            $_SESSION['status'] = "Record insert Successfully";
            header('location:view.php');        
        }
		else{
             $_SESSION['status'] = "Error: Insert failed.....";
             header('location:view.php');        
        }
        $conn->close();		
    }

     if(isset($_POST['update_record'])) {
        $id = $_POST['txtid'];
        $studname = $_POST['txtname'];
        $contact = $_POST['txtcontact'];
        $email = $_POST['txtemail'];
        $pic_new = $_FILES['txtpic']['name'];
        $pic_old = $_POST['txtpic_old'];

        if($pic_new != ''){
            $update_pic = $pic_new;
        }
        else{
            $update_pic = $pic_new;
        }

        echo "$update_pic";

        $sql = "UPDATE studinfo SET fullname = '$studname', contact = '$contact', email = '$email', pic = '$update_pic' WHERE id='$id'";

        if($conn->query($sql)===TRUE){
			move_uploaded_file($_FILES["txtpic"]["tmp_name"],"uploads/".$_FILES['txtpic']['name']);
            $_SESSION['status'] = "Record Update Successfully";
            header('location:view.php');        
        }
		else{
             $_SESSION['status'] = "Error: Update failed.....";
             header('location:edit.php');        
        }
        $conn->close();	
     }

     if(isset($_GET['id'])){
        $id = $_GET['id'];
        $pic = $_GET['pic'];

        $sql = "DELETE FROM studinfo WHERE id = '$id'";

        if($conn->query($sql) === TRUE){
            unlink("uploads/".$pic);
            $_SESSION['status'] = "Record Deleted Successfully";
            header('location:view.php');
        }else{
            $_SESSION['status'] = "Deletion failed....";
            header('location:view.php');
        }
          $conn->close();	
     }
?>