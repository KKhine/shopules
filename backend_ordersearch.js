 $(document).ready(function(){
	$('.searchBtn').on('click',function(){
		var startDate = $('#startDate').val();
		var endDate = $('#endDate').val();

		 //console.log(startdate);
		// console.log(enddate);
		$.ajax({
			type: 'POST',
			url: 'order_search.php',
			data:{
				start:startDate,
				end:endDate
			},
			success:function(response){
				// order_search uae search လုပ်လို့ရတဲ့ result ကို $.each နဲ့ loop 

				//console.log(response);
				var searchResults = JSON.parse(response);
				console.log(searchResults);
				var ordersearchresultDiv = '';

				ordersearchresultDiv += `<h3 class="tile-title">
				${startDate} - ${endDate} Order List </h3>
										<div class="table-responsive">
										<table class="table table-hover table-ordered display">
										<thead>
											<tr>
											<th>#</th>
											<th>Date</th>
											<th>Voucherno</th>
											<th>Total</th>
											<th>Status</th>
											<th>Action</th>
											</tr>
										</thead>
										<tbody>`;

				var a =1;
				$.each(searchResults,function(i,v){
					if(v){
						var id = v.id;
						var voucherno = v.voucherno;
						var total = v.total;
						var status = v.status;
						var date = v.order_date;

						if(status == "Order"){
							var actionBtn = `<a href="" class="btn btn-outline-info">
													<i class="icofont-into"></i>
												</a>

												<a href="orderstatus_change.php?id=${id}&status=0" class="btn btn-outline-info">
													<i class="icofont-ui-check"></i>
												</a>

												<a href="orderstatus_change.php?id=${id}&status=1" class="btn btn-outline-info">
													<i class="icofont-close"></i>
												</a>`;
						}
						else{
							var actionBtn = `<a href="" class="btn btn-outline-info">
													<i class="icofont-into"></i>
												</a>`;
						}

						$('#todayorderlistDiv div.tile-body').hide();

						ordersearchresultDiv +=`<tr>
												<td> ${a++} </td>
												<td> ${date} </td>
												<td> ${voucherno} </td>
												
												<td> ${total} </td>
												<td> ${status} </td>
												<td> ${actionBtn} </td>
												</tr>`;
					}
				});
				ordersearchresultDiv += `</tbody>
										</thead>
										</table>
										</div>`;

				$('#todayorderlistDiv').html(ordersearchresultDiv);
			}
		});

	});

	$.ajax({
			type: "POST",
			url: "getEarning.php",
			success: function(response){

				var earningResult = JSON.parse(response);

				var data = {
      	labels: ["Jan", "Feb", "May", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		}
      		
      	]
      };

      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      // var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      // var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);


	}

});
      
      




});