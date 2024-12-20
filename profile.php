<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="col-12" style="background-color: #171A21;">
		<div class="col-8 mx-auto">
			<div class="row py-2">
				<div class="col-3">
					<img src="logo.png">
				</div>
				<div class="my-auto col-9">
					<a href="#" class="text-uppercase text-light">магазин</a>
					<a href="#" class="text-uppercase text-light ms-3">сообщество</a>
					<a href="#" class="text-uppercase text-light ms-3">о steam</a>
					<a href="#" class="text-uppercase text-light ms-3">поддержка</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 bg-dark" style="height: 850px;">
		<div class="col-8 mx-auto d-flex" style="background-color: #222431; height: 850px;">
			<div class="col-7 d-flex">
				<div class="col-3 m-5">
					<img src="profile.jfif">
				</div>
				<div class="col-4 m-5">
					<h1 class="text-uppercase text-light fw-light"><?php echo $_GET['name'];?></h1>
					<p class="text-light">Электронная почта: <?php echo $_GET['email'];?></p>
					<p class="text-light">Возраст: <?php echo $_GET['age'];?>
						<p>
							<?php
								if($_GET['age'] >=18){
									echo "<h4 class='text-success'>органичений нет</h4>";
								}else{
									echo "<h4 class='text-danger'>органичения есть</h4>";
								}
							?>
						</p>
					</p>
				</div>
			</div>
			<div class="col-5">
				<h1 class="text-light fw-light m-5 mb-2">Уровень 1</h1>
				<p class="text-light ms-5 mb-0">Вы можете отобразить один из ваших значков здесь.</p>
				<p class="text-light ms-5">Выберите его на странице редактирования профиля.</p>
				<button class="btn btn-dark ms-5">
					<a href="edit.php" class="text-light text-decoration-none">Редактировать профиль</a>
				</button>
			</div>
		</div>

	</div>
</body>
</html>