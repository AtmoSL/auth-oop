<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация ООП</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../resources/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark"  data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Авторизация ООП</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(!\service\Auth::isAuth()){ ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/register">Регистрация</a>
                    </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/profile">Профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/logout">Выход</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>