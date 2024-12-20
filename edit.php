<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="col-12  p-3" style="background-color: #171A21;">
    <div class="col-8 mx-auto" >
        <div class="row">
            <div class="col-3" >
                <a href="index.php">
                    <img src="logo.png" class="w-100">
                </a>
            </div>
            <div class="col-6 pt-4" >
                <a href="" class="text-light ms-4 text-uppercase">Магазин</a>
                <a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
                <a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
                <a href="" class="text-light ms-4 text-uppercase">Поддержка</a>
                                
            </div>
        </div>			
    </div>
</div>
<div class="col-12" style="background-color: #212429; height: 100%;">
    <div class="col-8 mx-auto  p-5" style="background-color: #222431; height: 100%;">
        <form action="profile.php" method="GET">
            <h1 class="text-light text-uppercase">основное</h1>
            <p class="text-light">Укажите имя профиля и другую информацию - например настоящее имя. Это поможет найти вас в сообществе Steam</p>
                <p class="text-light m-0">Имя аккаунта Steam</p>
                <input type="" name="name" class="bg-dark w-25 form-control text-light">

                <p class="text-light mt-3 m-0">Электронная почта</p>
                <input type="" name="email" class="bg-dark w-25 form-control text-light">

                <p class="text-light mt-3 m-0">Возраст</p>
                <input type="" name="age" class="bg-dark w-25 form-control text-light">

                <button class="btn btn-primary mt-3">Сохранить</button>
        </form>
    </div>
</div>
</body>
</html>