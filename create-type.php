<?php require 'templates/header.php'; ?>
<?php require 'function.php';
?>
<div class="main-wrapper">
    <div class="content">

        <?php require 'templates/nav.php'; ?>

        <div class="container">
            <h1 class="my-md-5 my-4">Добавить тип</h1>
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <form method="post" action="actions/addType.php">
                        <div class="form-floating mb-3">
                            <input type="text" name="type" class="form-control" placeholder="Напишите название" id="floatingName">
                            <label for="floatingName">Название</label>
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