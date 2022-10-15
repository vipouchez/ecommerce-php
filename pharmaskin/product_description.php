<html>
	<?php 
		session_start();
		
		if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
  		{
    		header('Location: register.php');
  		}
  		include "includes/css_header.php";
		include "includes/dbconnect.php";
	?>
	<body  style="background-image: url('images/bg3.jpg'); !important">
		<?php include "includes/header_postlogin.php"; 				
      	$product_id=$_GET['product_id'];
      	$query="SELECT * FROM `products` WHERE `product_id` LIKE '$product_id'";
      	$results=mysqli_query($connection,$query);
      	$row=mysqli_fetch_assoc($results);
      	
      	if(isset($_GET['msg']))
	    {	
	    	if ($_GET['msg']==1)
		    {
		    echo "<h4 class='text-center text-red'><i>Added to cart</i></h4><br>";
		    }
		    elseif($_GET['msg']==2)
		     {
		     	echo "<h4 class='text-center text-red'><i>You have Already added this to cart</i></h4><br>";
		     }
		   	elseif($_GET['msg']==11)
		   	{
				echo "<h4 class='text-center text-red'><i>Added to Wishlist</i></h4><br>";
		  	}
		    elseif($_GET['msg']==22)
		    {
		    	echo "<h4 class='text-center text-red'><i>You have Already added this to Wishlist</i></h4><br>";
		    }
		    else
		    {
		    	echo "<h4 class='text-center text-red'><i>Some error occured!</i></h4>";
		    }
		}
				echo '<div class="container">
			        	<div class="row padding30">  
			          		<div class="col-md-6">
			                	<div class="product-tab">
				           	  		<img src="images/'.$row['product_name'].'" class="img-size-lg">
				            	</div>
					    	</div>
				      	   	<div class="col-md-6">
				      	   		<div class="product-tab">
					                <h1 class="text-center"> '.$row['product_name'].'</h1>
					                <p> &nbsp&nbsp&nbsp&nbsp '.$row['product_description'].'<br>
					                <br> <b>&nbsp&nbsp&nbsp&nbspPrice: '.$row['product_price'].'.DT</b><br><br></p> 
					                <a href="add_to_cart.php?product_id='.$product_id.'" class="btn btn-lg btn-danger"> Add to Cart </a>
					        
				                </div>
				           	</div>
				        </div>
				    </div>';				
      	?>
      	
	</body>
</html>