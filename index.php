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
		<div class="col-8 mx-auto">
			<form action="profile.php" method="GET">
				<h1 class="text-light text-uppercase fw-light pt-5">создание аккаунта</h1>
				<p class="text-light m-0">Имя аккаунта Steam</p>
				<input type="" name="name" class="bg-dark w-25 form-control text-light">

				<p class="text-light mt-3 m-0">Электронная почта</p>
				<input type="" name="email" class="bg-dark w-25 form-control text-light">

				<p class="text-light mt-3 m-0">Возраст</p>
				<input type="" name="age" class="bg-dark w-25 form-control text-light">

				<p class="text-light mt-5  m-0">Введите Пароль</p>
				<input type="" name="password" class="bg-dark w-25 form-control text-light">

				<button class="btn btn-primary mt-3">Готово</button>
			</form>
		</div>
	</div>
</body>
</html>