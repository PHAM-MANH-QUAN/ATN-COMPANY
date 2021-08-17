<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ATN SHOP</title>
<!-- Import Boostrap css, js, font awesome here -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- CSS -->
<link href="./style.css" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-branch" href="#">
				<img src="https://media.sketchfab.com/models/c5f623f23d324e19a12c387c8d182dcd/thumbnails/5b6791ac224a46e8b482ce7ca99dba89/ce59ea75607c427a9fad68b9aa4e3512.jpeg" height="50">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Log in</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Sign up</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Carousel -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://wallpaperaccess.com/full/1475817.jpg" height="500px">
			</div>
			<div class="carousel-item">
				<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b495be95-5f48-4cec-8eaf-481217c7d6ab/de0admi-30e5e5e6-a8f9-4b0f-a2c5-3fe6eb267197.png/v1/fill/w_1024,h_637,q_80,strp/indoraptor_jurassic_world_fallen_kingdom_by_wolfhooligans_de0admi-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjM3IiwicGF0aCI6IlwvZlwvYjQ5NWJlOTUtNWY0OC00Y2VjLThlYWYtNDgxMjE3YzdkNmFiXC9kZTBhZG1pLTMwZTVlNWU2LWE4ZjktNGIwZi1hMmM1LTNmZTZlYjI2NzE5Ny5wbmciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.tXdEwyAf7krIkUjrbwXyjI1P48gRKIYZlrfonu1dSqs" height="500px">
			</div>
			<div class="carousel-item">
				<img src="http://bizweb.dktcdn.net/thumb/grande/100/098/550/products/mo-hinh-khung-long-t-rex-jurassic-park-w-dragon-tyrannosaurus-135-3.jpg?v=1620985011447" height="500px">
			</div>
			<div class="carousel-item">
				<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d71ebdbe-1349-4975-98a0-44d53ff9a5fc/dekz3ad-29dd0dbe-3b1e-4f74-8ecc-d2b504052088.jpg/v1/fill/w_1920,h_851,q_75,strp/jurassic_world_rebirth__indoraptor_by_hellraptorstudios_dekz3ad-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODUxIiwicGF0aCI6IlwvZlwvZDcxZWJkYmUtMTM0OS00OTc1LTk4YTAtNDRkNTNmZjlhNWZjXC9kZWt6M2FkLTI5ZGQwZGJlLTNiMWUtNGY3NC04ZWNjLWQyYjUwNDA1MjA4OC5qcGciLCJ3aWR0aCI6Ijw9MTkyMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.7O9HkiTEbAq1pGwsG6rUJct0YaH_9q0kRyqOH0l82C0" height="500px">
			</div>
		</div>
	</div>
	<!-- jumbotron -->
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<div id="form_search">
					<form>
						<input type="text" name="user_query" placeholder="Enter product name">
						<input type="submit" value="Search">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">WELCOME TO ATN SHOP</h1>
			</div>
			<!-- Horizontal Rule -->
			<hr>
			<div class="col-12">
				<h1>TOP BEST SELLING</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<img src="https://bizweb.dktcdn.net/thumb/large/100/098/550/products/mo-hinh-khung-long-indominus-rex-w-dragon-jurassic-world-135-3.jpg?v=1624708927147" height="350px">
				<h3>200.000VNĐ</h3>
				<p>SOLD: 2402 Ps</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="https://bizweb.dktcdn.net/thumb/grande/100/098/550/files/mo-hinh-khung-long-t-rex-jurassic-park-w-dragon-tyrannosaurus-135-1.jpg?v=1617441659813" height="350px">
				<h3>350.000VNĐ</h3>
				<p>SOLD: 3500 Ps</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="https://hazomi.com/wp-content/uploads/2020/09/fc53cdc9c0925050bc02635b76e51016.jpg" height="350px">
				<h3>400.000VNĐ</h3>
				<p>SOLD: 3800 Ps</p>
			</div>
		</div>
		<hr class="my-4">
	</div>
	<h1 class="jumbotron text-center">
		SHOPPING SPACE
	</h1>
	<div class="container">
		<div class="row">
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						GodZila</div>
					<div class='panel-body'><img src='./images//GODZILA.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 250.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						SPINOSAURUS</div>
					<div class='panel-body'><img src='https://ae01.alicdn.com/kf/H09e76a9d2e0e401bb26263527632e643T/M-h-nh-Kh-ng-long-ch-i-Tr-Em-ch-i-kh-ng-long-c.jpg_Q90.jpg_.webp' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b>125.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						MULTI HEAD</div>
					<div class='panel-body'><img src='http://sc04.alicdn.com/kf/H396249b18ba64f2da1fee71dca97b9b4Y.jpg' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 145.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						DINOSAUR</div>
					<div class='panel-body'><img src='https://i.pinimg.com/originals/96/45/e5/9645e53d3ca7ea7fb5266df651b8a8f5.gif' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 320.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						PUNKSTYLE</div>
					<div class='panel-body'><img src='https://cf.shopee.vn/file/3798f13a5ad94c53b366b102c3c6653f' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 300.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						KUNGLONG</div>
					<div class='panel-body'><img src='https://cf.shopee.vn/file/443ecaf198b96fdf43f8122be52dc8fb_tn' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 290.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						STERASAUR</div>
					<div class='panel-body'><img src='http://dochoicholon.com/image/data/DV/do-choi-mo-hinh-khung-long-phien-sung-Stegosaurus-cao-su-1.jpg' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 290.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						DA XUA</div>
					<div class='panel-body'><img src='./images/MH ys.jpg' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 290.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>

		</div>

	</div>
	<hr class="my-4">
	</div>
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Contact us</h2>
			</div>
			<div class="col-12 social padding">
				<a href="https://www.facebook.com/profile.php?id=100050909333275"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<!-- <img src="./images/logo5.jpg"> -->
					<hr class="light">
					<p>111-222-3333</p>
					<p>hungtokinoway@gmail.com</p>
					<p>Cổ Nhuế street, Hanoi, Vietnam</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Working hours</h5>
					<hr class="light">
					<p>Monday-Friday: 8am - 5pm</p>
					<p>Weekend: 8am - 12am</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Services</h5>
					<hr class="light">
					<p>Outsourcing</p>
					<p>Website Shopping</p>
					<p>Moki Shopping</p>
				</div>
				<div class="col-12">
					<hr class="light-100">
					<h5>&copy; WebPro</h5>
				</div>
			</div>
		</div>
	</footer>
</body>