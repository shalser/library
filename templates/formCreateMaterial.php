<?php require 'function.php';
$types = getTypes();
$categories = getCategory();
?>
<form method="post" action="../actions/addMaterials.php">

    <div class="form-floating mb-3">
        <select name="type_id" class="form-select" id="floatingSelectType">
            <option selected>Выберите тип</option>
            <?php foreach ($types as $type): ?>
                <option value="<?= $type['id'] ?>"><?= $type['type'] ?></option>
            <?php endforeach; ?>
        </select>
        <label for="floatingSelectType">Тип</label>
        <div class="invalid-feedback">
            Пожалуйста, выберите значение
        </div>
    </div>

    <div class="form-floating mb-3">
        <select name="category_id" class="form-select" id="floatingSelectCategory">
            <option selected>Выберите категорию</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['category'] ?></option>
            <?php endforeach; ?>
        </select>
        <label for="floatingSelectCategory">Категория</label>
        <div class="invalid-feedback">
            Пожалуйста, выберите значение
        </div>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="title" class="form-control" placeholder="Напишите название" id="floatingName">
        <label for="floatingName">Название</label>
        <div class="invalid-feedback">
            Пожалуйста, заполните поле
        </div>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="authors" class="form-control" placeholder="Напишите авторов" id="floatingAuthor">
        <label for="floatingAuthor">Авторы</label>
        <div class="invalid-feedback">
            Пожалуйста, заполните поле
        </div>
    </div>

    <div class="form-floating mb-3">
                    <textarea name="description" class="form-control" placeholder="Напишите краткое описание"
                              id="floatingDescription"
                              style="height: 100px"></textarea>
        <label for="floatingDescription">Описание</label>
        <div class="invalid-feedback">
            Пожалуйста, заполните поле
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Добавить</button>
</form>
