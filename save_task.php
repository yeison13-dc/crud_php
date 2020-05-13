<?php 
  include("db.php");

if(isset($_POST['save_task'])){
	$title=$_POST['title'];
	$description=$_POST['description'];
	
   $query = "INSER INTO task(title,description) VALUES ('$title', '$description')";
    $result=mysqli_query($conn,$query);
    if(!result){
    	die("Consulta Fallida");
    }

    $_SESSION['message']='Tarea Guardada Satisfactoriamente';
    $_SESSION['message_type']=''success';
    header("Location: index.php");

 }
?>
