<?php
// 
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 
  // $age = $_POST["userName"];
// 
// switch ($age) {
  // case '12':
    // echo "your age is 12";
    // break;
  // case '18':
    // echo '<script language="javascript">';
    // echo 'alert("You Are Awesome Boy");';
    // echo '</script>';
    // break;
  // case '24':
    // echo "your age is 24";
    // break;
// 
  // default:
    // echo " your age is unknown";
    // break;
// }
// }
// ?>
<?php 
/* code by webdevtrick ( https://webdevtrick.com ) */
session_start();
$connect = mysqli_connect("localhost", "root", "", "cart");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart In PHP and MySql | Webdevtrick.com</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Shoping Cart With PHP And MySql | Source Code By <a href="https://webdevtrick.com">Webdevtrick.com</a></h3><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<!--  -->
<!-- <head> -->
  <!-- <meta charset="UTF-8"> -->
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- <title>Document</title> -->
<!-- </head> -->
<!--  -->
<!-- <body> -->
  <!-- <div class="container"> -->
    <!-- <center> -->
      <!-- <div class="order__column order__column--right" id="order"> -->
        <!-- <h3 class="order__text"> what About your age</h3> -->
        <!-- <form action="" enctype="multipart/form-data" class="anchor order__form form" method="post"> -->
<!--  -->
<!--  -->
          <!-- <input class="form__element form__element--input" value="" name="userName" placeholder="नाम" type="tel" required=""> -->
        <!--  -->
          <!-- <button class="js_submit section__btn form__btn button__text btn anchor" type="submit" value=" अभी ऑर्डर करें " name="send"><span> 50% छूट पर ऑर्डर करें </span></button> -->
          <!-- <input type="hidden" name="time_zone" value="5.5"> -->
          <!--  -->
        <!-- </form> -->
      <!-- </div> -->
    <!-- </center> -->
    <!-- <style> -->
      <!-- /* #order { */ -->
        <!-- /* background-color: #942a1d; */ -->
        <!-- /* color: white; */ -->
        <!-- /* padding-top: 5 px; */ -->
      <!-- /* } */ -->
    <!-- /* </style> */ -->
  <!--  -->
<!--  -->
    <!-- <style> -->
      <!-- /* form { */ -->
        <!-- /* width: 100%; */ -->
        <!-- /* margin-left: auto; */ -->
        <!-- /* margin-right: 50px; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* @media (max-width: 767px) { */ -->
        <!-- /* form { */ -->
          <!-- /* max-width: 480px; */ -->
          <!-- /* margin: 0 auto; */ -->
        <!-- /* } */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__element { */ -->
        <!-- /* display: block; */ -->
        <!-- /* width: 100%; */ -->
        <!-- /* border: none; */ -->
        <!-- /* box-sizing: border-box; */ -->
        <!-- /* background: #dcdcdc; */ -->
        <!-- /* border-radius: 50px; */ -->
        <!-- /* padding: 12px 0; */ -->
        <!-- /* padding-right: 15px; */ -->
        <!-- /* margin: 0 auto; */ -->
        <!-- /* margin-bottom: 10px; */ -->
        <!-- /* position: relative; */ -->
        <!-- /* font-size: 16px; */ -->
        <!-- /* line-height: 19px; */ -->
        <!-- /* color: #000000; */ -->
        <!-- /* padding-left: 15px; */ -->
        <!-- /* position: relative; */ -->
        <!-- /* z-index: 5; */ -->
        <!-- /* outline: none; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__element--wrapper { */ -->
        <!-- /* padding: 0; */ -->
        <!-- /* border: none; */ -->
        <!-- /* position: relative; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__element--select { */ -->
        <!-- /* cursor: pointer; */ -->
        <!-- /* z-index: 1; */ -->
        <!-- /* white-space: nowrap; */ -->
        <!-- /* text-indent: 0.01px; */ -->
        <!-- /* background: transparent; */ -->
        <!-- /* -webkit-appearance: none; */ -->
        <!-- /* margin-bottom: 0; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__arrow { */ -->
        <!-- /* display: block; */ -->
        <!-- /* width: 45px; */ -->
        <!-- /* height: 100%; */ -->
        <!-- /* background: transparent; */ -->
        <!-- /* position: absolute; */ -->
        <!-- /* right: 0; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__arrow::before { */ -->
        <!-- /* content: ""; */ -->
        <!-- /* display: block; */ -->
        <!-- /* position: absolute; */ -->
        <!-- /* width: 0; */ -->
        <!-- /* height: 0; */ -->
        <!-- /* top: 3px; */ -->
        <!-- /* bottom: 0; */ -->
        <!-- /* right: 0; */ -->
        <!-- /* left: 0; */ -->
        <!-- /* margin: auto; */ -->
        <!-- /* border-right: 5px solid transparent; */ -->
        <!-- /* border-left: 5px solid transparent; */ -->
        <!-- /* border-top: 6px solid #5c5c5c; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* select::-ms-expand { */ -->
        <!-- /* display: none; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__select::-ms-expand { */ -->
        <!-- /* display: none; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .form__btn { */ -->
        <!-- /* width: 100%; */ -->
        <!-- /* border: none; */ -->
        <!-- /* position: relative; */ -->
        <!-- /* z-index: 5; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .order__column--right { */ -->
        <!-- /* max-width: 370px; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* @media (max-width: 991px) { */ -->
        <!-- /* .order__column--right { */ -->
          <!-- /* max-width: 100%; */ -->
        <!-- /* } */ -->
<!-- /*  */ -->
        <!-- /* .order__text p { */ -->
          <!-- /* font-size: 22px; */ -->
          <!-- /* line-height: 42px; */ -->
        <!-- /* } */ -->
<!-- /*  */ -->
        <!-- /* .order__columns { */ -->
          <!-- /* flex-direction: column; */ -->
        <!-- /* } */ -->
<!-- /*  */ -->
        <!-- /* .btn { */ -->
          <!-- /* font-size: 22px; */ -->
          <!-- /* line-height: 28px; */ -->
        <!-- /* } */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .order__columns { */ -->
        <!-- /* display: flex; */ -->
        <!-- /* align-items: center; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .btn { */ -->
        <!-- /* background: #ffba00; */ -->
        <!-- /* box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25); */ -->
        <!-- /* border-radius: 50px; */ -->
        <!-- /* font-weight: bold; */ -->
        <!-- /* font-size: 22px; */ -->
        <!-- /* line-height: 30px; */ -->
        <!-- /* text-align: center; */ -->
        <!-- /* color: #ffffff; */ -->
        <!-- /* display: block; */ -->
        <!-- /* padding: 9px 30px; */ -->
        <!-- /* cursor: pointer; */ -->
        <!-- /* transition: all 0.1s; */ -->
        <!-- /* max-width: 580px; */ -->
        <!-- /* transition: all 0.3s; */ -->
        <!-- /* outline: none; */ -->
        <!-- /* position: relative; */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* .btn:hover { */ -->
        <!-- /* transform: scale(1.05); */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* html { */ -->
        <!-- /* line-height: 1.15; */ -->
        <!-- /* -webkit-text-size-adjust: 100% */ -->
      <!-- /* } */ -->
<!-- /*  */ -->
      <!-- /* body { */ -->
        <!-- /* margin: 0 */ -->
      <!-- /* } */ -->
      <!-- /* .container{ */ -->
        <!-- /* background-color: #5c5c5c; */ -->
      <!-- /* } */ -->
    <!-- /* </style> */ -->
  <!-- </div> -->
<!-- </body> -->
<!--  -->
<!-- </html> -->