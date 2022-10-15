<?php
	session_start();	
	if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
	{
    	header('Location: register.php');
	}
	include "includes/dbconnect.php";
	$product_id=$_GET['product_id'];
	$user_id=$_SESSION['user_id'];
	

?>
<!DOCTYPE html>
<html>
	<?php include "includes/css_header.php" ?>
	<body  style="background-image: url('images/bg3.jpg'); !important">
		<?php include "includes/header_postlogin.php" ?>
		
		<div class="row">
			<div class="col-md-6">
				<h1 class="text-center"> <b>Veuillez entrer les données de livraison</b> </h1><br>
				<i class="text-center"><b>Le paiment sera effectué à la livraison .. </b></i>
			</div>
			<div class="col-md-6">

				<form class="text-center" action="add_to_details.php" method="POST">
					<input type="hidden" name="product_id" value=" <?php echo $product_id; ?>">
					<label><h3><b>Entrer votre Addresse: </b></h3></label>
					<input type="text" name="address" class="form-control" placeholder="Address..."><br>
					<label><h3><b>Quantité : </b></h3></label>
					<input type="number" step="0.01" name="quantity" class="form-control" placeholder="..."><br>
					<input type="submit" value="Submit Details" class="btn btn-danger btn-lg">
				</form>
			</div>
		</div>
	</body>
</html>