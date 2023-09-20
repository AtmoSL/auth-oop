<?php include 'layouts/header.php' ?>

    <div class="container">
        <h1>Вход</h1>

        <form action="/auth" class="form" method="post">
            <label for="email" class="form-label">Введите email</label>
            <input type="email" name="email" id="email" class="form-control">
            <label for="password" class="form-label">Введите пароль</label>
            <button type="submit" class="btn btn-primary form__btn">Войти</button>
        </form>
    </div>

<?php include 'layouts/footer.php' ?>