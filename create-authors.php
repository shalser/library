<?php require 'templates/header.php'; ?>
<?php require 'function.php';
?>
<div class="main-wrapper">
    <div class="content">

        <?php require 'templates/nav.php'; ?>

        <div class="container">
            <h1 class="my-md-5 my-4">Добавить автора</h1>
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <form method="post" action="actions/addAuthor.php">
                        <div class="form-floating mb-3">
                            <input type="text" name="author" class="form-control" placeholder="Напишите название" id="floatingName">
                            <label for="floatingName">Автор</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
<?php require 'templates/footer.php'; ?>