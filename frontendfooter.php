 
	<!-- Footer -->
	<div class="container-fluid bg-light p-5 align-content-center align-items-center mt-5">
		
		<div class="row">
	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class="icofont-fast-delivery serviceIcon maincolor"></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6>Door to Door Delivery</h6>
		        		<p class="text-muted" style="font-size: 12px">On-time Delivery</p>
			    	</div>
			  	</div>
	  		</div>
	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class="icofont-headphone-alt-2 serviceIcon maincolor"></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6> Customer Service </h6>
		        		<p class="text-muted" style="font-size: 12px">  09-779-999-915 ၊ <br> 09-779-999-913 </p>
			    	</div>
			  	</div>
	  		</div>
	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class='bx bx-undo serviceIcon maincolor'></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6 > 100% satisfaction </h6>
		        		<p class="text-muted" style="font-size: 12px"> 3 days return </p>
			    	</div>
			  	</div>
	  		</div>
	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class="icofont-credit-card serviceIcon maincolor"></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6> Cash on Delivery </h6>
		        		<p class="text-muted" style="font-size: 12px"> Door to Door Service </p>
			    	</div>
			  	</div>
	  		</div>
	  	</div>
	</div>
	
	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h1> News Letter </h1>
				<p>
					Subscribe to our newsletter and get 10% off your first purchase
				</p>
			</div>
			
			<div class="offset-2 col-8 offset-2 mt-5">
				<form>
					<div class="input-group mb-3">
						<input type="text" class="form-control form-control-lg px-5 py-3" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-left-radius: 15rem; border-bottom-left-radius: 15rem">
					  	
					  	<div class="input-group-append">
					    	<button class="btn btn-secondary subscribeBtn" type="button" id="button-addon2"> Subscribe </button>
					  	</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
	
  	<footer class="py-3 mt-5">
    	<div class="container">
    		<div class="text-center pb-3">
				<a href="#myPage" title="To Top" class="text-white to_top text-decoration-none">
				    <i class="icofont-rounded-up" style="font-size: 20px"></i>
				</a>
			</div>
      		<p class="m-0 text-center text-white">Copyright &copy; <img src="logo/logo_wh_transparent.png" style="width: 30px; height: 30px"> 2019</p>
    	</div>
  	</footer>
	<script type="text/javascript" src="frontend/js/jquery.min.js"></script>
	<!-- BOOTSTRAP JS -->
    <script type="text/javascript" src="frontend/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript" src="frontend/js/custom.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="frontend/js/owl.carousel.js"></script>
    <!-- cart -->
    <script type="text/javascript">
	$(document).ready(function(){
		showdata();
			cartNoti();
		$(".addtocartBtn").click(function(){
			//alert('ok');
			
			var id=$(this).data('id');
			var name=$(this).data('name');
			var price=$(this).data('price');
			var discount=$(this).data('discount');
			var photo=$(this).data('photo');
			// alert(price);
			var cart={
				id : id,
				name : name,
				price : price,
				discount : discount,
				photo : photo,
				qty:1 
			}
			// console.log(item);
			var cartlist=localStorage.getItem('cart');

			var cartArray;
			if(cartlist==null){
				cartArray=[];
			}else{
				cartArray=JSON.parse(cartlist);
			}
			
			var status=false;
			cartArray.forEach(function(v, i){
				if(id==v.id){
					v.qty++
					status=true;
				}

			});

			if(status==false){
				cartArray.push(cart);
			}

			// cartArray.push(cart);
			var cartstring=JSON.stringify(cartArray);
			localStorage.setItem('cart', cartstring);
			showdata();
			cartNoti();
		});


		function showdata(){
			var cartlist = localStorage.getItem('cart');
			if(cartlist){
				var cartArray=JSON.parse(cartlist);
				console.log(cartArray);
				var html="";
				var j=1;
				var total=0;
				var subtotal=0;
				cartArray.forEach(function(v,i){
					if(v.discount){
						subtotal=v.qty*v.discount;
					}else{
						subtotal=v.price;
					}
					total+=subtotal;
					html+=`<tr class="text-center">
					<td>${j++}</td>
					<td>${v.name}</td>
					<td colspan="3"><img src="${v.photo}" width="100" height="100"></td>
					<td colspan="2"><button class="btnIncrease" data-id="${i}"> + </button>${v.qty}
									<button class="btnDecrease" data-id="${i}"> - </button></td>
					<td>${v.price}</td>
					<td>${v.discount}</td>
					<td>${subtotal}</td>
					</tr>`
					
				});

				html+=`<tr>
				<td colspan="9">all total</td>
				<td class='text-center'>${total}</td></tr>` 
				$("tbody").html(html);
			}
		}


		function cartNoti(){
			var cart = localStorage.getItem("cart");
			if(cart){
				var cartArray = JSON.parse(cart);
				var total = 0;
				var noti = 0;
				$.each(cartArray, function(i,v){
					var unitprice = v.price;
					var discount = v.discount;
					var qty = v.qty;
					if(discount){
						var price = discount;
					}
					else{
						var price = unitprice;

					}
					var subtotal = price * qty;

					noti += qty ++;
					total += subtotal++;
				})
				$('.cartNoti').html(noti);
				$('.cartTotal').html(total + ' ks');
			}
			else{
				$('.cartNoti').html(0);
				$('.cartTotal').html(total + ' ks');
			}
			// // var total = 0;
			// // if(cartlist){
			// // 	var cartArray = JSON.parse(cartlist);
			// // 	cartArray.forEach(function(v,i){
			// // 		total+=v.qty;
			// // 	});
			// // 	 console.log(total);
			// // 	$('.cartNoti').html(total);
			// }
		}
		$("tbody").on('click','.btnIncrease',function(){
			// alert('ok');
			var id=$(this).data('id');
			var cartlist=localStorage.getItem("cart");
			if(cartlist){
				var cartArray=JSON.parse(cartlist);

				cartArray.forEach(function(v,i)
				{
					if(i==id){
						// alert("ok");
						v.qty++;
					}

				});

				var cartstring=JSON.stringify(cartArray);
				localStorage.setItem("cart",cartstring);
				showdata();
				cartNoti();
			}
		})

		$("tbody").on('click','.btnDecrease',function(){
			// alert('ok');
			var id=$(this).data('id');
			var cartlist=localStorage.getItem("cart");
			if(cartlist){
				var cartArray=JSON.parse(cartlist);

				cartArray.forEach(function(v,i)
				{
					if(i==id){
						// alert("ok");
						v.qty--;
						if(v.qty==0){
							cartArray.splice(id, 1);
						}
					}

				});

				var cartstring=JSON.stringify(cartArray);
				localStorage.setItem("cart",cartstring);
				showdata();
				cartNoti();
			}
		})

		$("tfoot").on('click','.checkoutBtn',function(){
			//alert("hello");
			var cart = localStorage.getItem('cart');
			var cartArray = JSON.parse(cart);

			var note= $('#notes').val();
			var total = 0;

			$.each(cartArray, function(i,v){

			var unitprice = v.price;
			var discount = v.discount;
			var qty = v.qty;
			if (discount) {
				var price = discount*qty;
			}
			else{
				var price = unitprice;
			}
			var subtotal = price * qty;

			total += subtotal ++;
			});

			$.post('storeorder.php',{
				carts:cartArray,
				note:note,
				total:total
			}, function(response){
				localStorage.clear();
				location.href="ordersuccess.php";
			});

		}); 
	})
	</script>
</body>
</html>