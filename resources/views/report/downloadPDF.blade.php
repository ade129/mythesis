<!DOCTYPE html>
<html>
<head>
	<title>{{$orders->code}}</title>
</head>
<style type="text/css">
	.container{
		width: 1020px;
	}
	/*body{
		font-size: 12px;
	}*/
	.tabel2{
		border-collapse: collapse;
	}
	</style>
<body>
	<div class="container" style="text-align: center;">
		<table width="100%" >
			<tbody>
				<tr>
					<td width="20%"><img src="https://image.ibb.co/nOpO9U/dpi.jpg" width="200;" alt=""></td>
					<td style="margin:40px;">
						<h2 >PT. Dana Purna Investama</h2>	
						<p>Jl. Tanah Abang I No.27A <span style="display: block;"> RT.8/RW.7, Petojo Sel., Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</span><span style="display: block">Telpon : (021) 3811149</span></p>
						<p></p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<hr>
	<div class="container">
		<h1 style="text-align: center;">Delivery Slip</h1>
	</div>

	<div class="container">
		<table width="100%" border="0">
			<tbody>
				<tr>
					<td width="15%">Purhase Order</td>
					<td>: {{$orders->code}}</td>
				</tr>
				<tr>
					<td width="15%">Date</td>
					<td>: {{date('d M Y' , strtotime($orders->date_orders))}}</td>
					
				</tr>
				<tr>
					<td width="15%">Due Date</td>
					<td>: {{date('d M Y' , strtotime($orders->due_date))}}</td>
				</tr>
				<tr>
					<td width="15%">Di Tunjukan Untuk</td>
					<td>: </td>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<div class="container">
		<table width="100%" border="1" class="tabel2">
			<thead>
				<tr>
					<th style="text-align: center;">No</th>
					<th style="text-align: center;">Item</th>
					<th style="text-align: center;">Quantity</th>
				</tr>
			</thead>
			<tbody>
				@php
					$no = 1;
				@endphp
				@foreach ($orders->orders_details as $od)
				<tr>
					<td style="text-align: center;">{{$no++}}</td>
					<td style="text-align: center;">{{$od->items->name}}</td>
					<td style="text-align: center;">{{$od->quantity}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<br>
	<div class="container">
		<table class="tabel2" border="1" width="100%"> 
			<tbody>
				<tr>

					<td><center>Created By <br><br><br><br><br><br>{{$orders->users->name}}</center></td>
					<td><center>Received By <br><br><br><br><br><br>{{$orders->received->users->name}}</center></td>
					<td><center>Accepted By <br><br><br><br><br><br>{{$orders->accepted->users->name}}</center></td>
				</tr>
			</tbody>	
		</table>
	</div>

</body>
</html>