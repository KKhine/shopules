<?php require'frontendheader.php' ?>

<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
</div>
<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="index.php" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead class="text-center">
						<tr>
							<th> No </th>
							<th> Name </th>
							<th colspan="3"> Product </th>
							<th colspan="2"> Qty </th>
							<th> Price </th>
							<th> Discount </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						
					</tbody>
					<tfoot id="shoppingcart_tfoot">
						<tr> 
							<td colspan="8"> 
								<textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="4">
								<?php
									if(isset($_SESSION['login_user'])) {
								?>
								<a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutBtn"> 
									Check Out 
								</a>
								<?php
									}else{
									?>
								<a href="login.php" class="btn btn-secondary btn-block mainfullbtncolor"> 
									Check Out 
								</a>
								<?php } ?>

							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<a href="index.php" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>

		</div>
		

	</div>
	
<?php require'frontendfooter.php' ?>