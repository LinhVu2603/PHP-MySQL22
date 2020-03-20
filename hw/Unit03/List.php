<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="jquery-3.4.1.min.js"></script>
	<style type="">
		p{
			font-size: 32px;
			font-weight: bold;
			text-align:center;
		}
		.bg-primary{
			color: white;
			margin-left: 2%;	
		}
		a{
			color: white;
			text-decoration: none;
		}
		.content{
			padding-left: 2%;
			padding-top: 2%;	
		}
		.first{
			font-weight: bold;
		}
		.row{
			border-bottom: solid 1px grey;
		}
		.btn1{
			color: white;
			width: 13%;
			height: 40px;
			border-radius: 20px;
			margin-bottom: 2%;
		}
	</style>
</head>
<body>
	<p>USER LIST</p>
	<button class="btn bg-primary" onclick=""><a href="Add.php">Add</a></button>
	<div class="row">
		<div class="col-1 content first">#</div>
		<div class="col-3 content first">Code</div>
		<div class="col-3 content first">Name</div>
		<div class="col-5 content first">Action</div>
	</div>
	<div class="row">
		<div class="col-1 content">1</div>
		<div class="col-3 content">BK01</div>
		<div class="col-3 content">Vu Thuy Linh</div>
		<div class="col-5 content">
			<button class="btn bg-success btn1">Details</button>
			<button class="btn bg-danger btn1">Delete</button>
		</div>
	</div>
	<div class="row">
		<div class="col-1 content">2</div>
		<div class="col-3 content">BK02</div>
		<div class="col-3 content">Zent Group</div>
		<div class="col-5 content">
			<button class="btn bg-success btn1">Details</button>
			<button class="btn bg-danger btn1">Delete</button>
		</div>
	</div>
	<div class="row">
		<div class="col-1 content">3</div>
		<div class="col-3 content">BK03</div>
		<div class="col-3 content">Viet Nam</div>
		<div class="col-5 content">
			<button class="btn bg-success btn1">Details</button>
			<button class="btn bg-danger btn1">Delete</button>
		</div>
	</div>
	<?php 
	 ?>
	 <table class="table">
	 	<thead>
	 		<tr>
	 			<th>#</th>
	 			<th>Code</th>
	 			<th>Name</th>
	 			<th>Action</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php 
	 		$i = 0;
	 		foreach ($data_arr as $value) {
	 			$i++;
	 		}
	 		 ?>
	 			<tr>
	 				<td><?php echo $i;?></td>
	 				<td><?php echo $value['Code'];?></td>
	 				<td><?php echo $value['name'];?></td>
	 				<td>
	 					<a href="detail.php?code=<?php echo $value['code'];?>" class = "btn btn-success">Details</a>
	 					<a href="detail.php?code=<?php echo $value['code'];?>" class = "btn btn-danger">Delete</a>
	 				</td>
	 			</tr>
	 	</tbody>
	 </table>
</body>
</html>