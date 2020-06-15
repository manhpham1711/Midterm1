<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index book</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style type="text/css" media="screen">
		#display{

			display: grid;
			grid-template-columns: 25% 25% 25% 25%;
			grid-gap: 10px;
		}
		.thumbnail a>img, .thumbnail>img {
			margin-right: auto;
			margin-left: auto;
			width: 250px;
			height: 220px;
		}

	</style>
</head>
<body>
	@include('partials\header')
	<br><hr>
	<a href="/index/add" class="btn btn-warning">add</a>
	<br>
	<?php
if (isset($_GET['add'])) {
	echo "<script> alert('" . $_GET['add'] . "'); </script>";
}
?>
	<div id="display">
		@foreach ($data as $infomation)

		<div class="container">
			<div id="products" class="row list-group">
				<div class="item  col-xs-3 col-lg-3">
					<div class="thumbnail">
						<img class="group list-group-image" src="{{'/storage/'.$infomation->image}}" alt="Card image cap">
						<span style="display: flex; font-size: 13px; margin-top: -10%;"> <p style="background-color: #24FF00; padding-top:2%;  padding-left: 2%; height: 30px; width: 140px; color: white" > Còn {{$infomation->number}} ngày nữa</p> <p style="background-color: #14FAEC; padding-top:2%; padding-left: 2%; height: 30px; width: 140px; color: #000000; ">{{$infomation->typetour}}</p> </span>

						<div class="caption">
							<h5 class="card-title"> <b>{{ $infomation->name}} </b></h5>
							<br>
							<p style="font-size: 11px;"><i class='far fa-clock'></i> lịch trình: {{ $infomation->number}}</p>
							<p style="font-size: 11px;"><i class='far fa-calendar-minus'></i> khởi hành: {{ $infomation->number}}</p>

							<div class="row">
								<div class="col-xs-12 col-md-7">
									<span style="font-size: 11px;"><i class='far fa-user'></i> số chổ còn nhận: {{ $infomation->number}}</span>
								</div>
								<div class="col-xs-12 col-md-5">
									<p style="color: #F345F1">{{ $infomation->getDisplayPrice()}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>

</body>
</html>
