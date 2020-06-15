<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen"></style>
</head>
<body>
	<a href="/index"><h1 style="margin-left: 80%;">Hủy Bỏ</h1></a>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif


	<div class="container-fluid mt-3">
		<h2 class="mb-2">Add BookTour</h2><hr>
		<form action='/admin/add' method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-row">
				<div class="form-group col-sm-6">
					<label for="name">Name Booktour</label>
					<input type="text" class="form-control"class="@error('title') is-invalid @enderror"
					id="name" name="name" placeholder="Tên tour">
				</div>
				<div class="form-group col-sm-6">
					<label for="price">Price</label>
					<input type="number" class="form-control"
					id="price" name="price" placeholder="Giá">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-sm-6">
					<label for="name">Number</label>
					<input type="number" class="form-control"
					id="name" name="number" placeholder="Bao nhiêu người">
				</div>
				<div class="form-group col-sm-6">
					<label for="price">Typetour</label>
					<input type="text" class="form-control"
					id="price" name="typetour" placeholder="Loại Chuyến đi, vd: Từ Hồ Chí Minh">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-sm-6">
					<label for="name">Schedule</label>
					<input type="text" class="form-control"
					id="name" name="schedule" placeholder="Bao Nhiêu Ngày Đêm, vd: 3 ngày 4 đêm">
				</div>
				<div class="form-group col-sm-6">
					<label for="price">Depart</label>
					<input type="text" class="form-control"
					id="price" name="depart" placeholder="Ngày Bắc Đầu, vd: 10/02/2000 ">
				</div>
			</div>

			<div class="form-group">
				<label for="inputAddress">Image</label>
				<input type="file" class="form-control"
				id="myAddress" name="photo">
			</div>
			<button type="submit" id="save" class="btn btn-primary">Add</button>
		</form>
	</div>



</body>
</html>
