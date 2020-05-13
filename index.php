<?php 
  include("db.php")
 ?>
 <?php include("includes/header.php") ?>
 <div class="container p-4">
 	<div class="row">
 		<div class="col-md-4">

 			<?php if(isset($_SESSION['message'])){ ?>
 				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?=$_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert"   aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
 			<?php session_unset();} ?>


 			<div class="card card-body">
 				<form action="save_task.php" method="POST">
 					<div class="form-group">
 						<input type="text" name="title" class="form-control" placeholder="Titulo" autofocus>
 					</div>
 					<div class="form-group">
 						<textarea name="description"  rows="2" class="form-control" placeholder="Descripcion"></textarea>
 					</div>
 					<input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
 				</form>
 			</div>


 		</div>
 		<div class="col-md-8">
 			<table class="table table-bordered">
 				<thead>
 					<tr>
 						<th>Titulo</th>
 						<th>Descripcion</th>
 						<th>Creado</th>
 						<th>Accion</th>
 					</tr>
 				</thead>
 				<body>
 					<?php 
 					$query ="SELECT *FROM task";
 					$result_tasks=mysqli_query($conn,$query);

 					while ($row =mysqli_fetch_array($result_tasks)) { ?>
 						<tr>
 							<td><?php echo $row['title'] ?></td>
 							<td><?php echo $row['description'] ?></td>
 							<td><?php echo $row['created_at'] ?></td>
 							<td>
 								
 							</td>
 						</tr>
 						
 					<?php  }?>
 					 
 				</body>
 				
 			</table>
 			
 		</div>
 	</div>
 	
 </div>

 
 <?php include("includes/footer.php") ?>

 