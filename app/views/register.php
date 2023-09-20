<?php include 'layouts/header.php' ?>

<div class="container">
    <h1>Регистрация</h1>

    <form action="/createuser" class="form" method="post">
        <label for="email" class="form-label">Введите email</label>
        <input type="email" name="email" id="email" class="form-control">
        <label for="password" class="form-label">Введите пароль</label>
        <input type="password" name="password" id="password" class="form-control">
        <label for="password-repeat" class="form-label">Повторите пароль</label>
        <input type="password" name="password-repeat" id="password-repeat" class="form-control">
        <button type="submit" class="btn btn-primary form__btn">Зарегистрироваться</button>
    </form>
</div>

<?php include 'layouts/footer.php' ?>