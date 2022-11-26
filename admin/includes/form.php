<!-- error handler start | checks if inputs are empty and prints message -->
<?php if (!empty($errors)) : ?>
    <ul class="error">
        <?php foreach ($errors as $error) : ?>
            <li class="error__info"><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<!-- error handler end -->

<!-- form start -->
<form method="post" enctype="multipart/form-data">

    <div class="form__row--container">
        <div class="form__row">
            <label for="book_title" class="form__row--label">Title</label>
            <input type="text" name="book_title" placeholder="Book title" value="<?= htmlspecialchars($book_title); ?>" />
        </div>

        <div class=" form__row">
            <label for="book_author" class="form__row--label">Author</label>
            <input type="text" name="book_author" placeholder=" Book author" src="../../images/<?= htmlspecialchars($book_author); ?>" value="<?= htmlspecialchars($book_author); ?>" />
        </div>
    </div>

    <div class="form__row--container">
        <div class="form__row">
            <label for="book_cover" class="form__row--label">Book cover</label>
            <input type="file" class="form__row--img" name="book_cover" src="../uploads/pdf/<?= $book_author; ?>" value="<?= $book_cover; ?>" />
        </div>

        <div class="form__row">
            <label for="book_pdf" class="form__row--label">Pdf file</label>
            <input type="file" class="form__row--img" name="book_pdf" accept="application/pdf" src="<?= $upload_pdf; ?>" value="<?= $upload_pdf; ?>" />
        </div>
    </div>

    <div class="form__row">
        <label for="book_category" class="form__row--label">Category</label>
        <select name="book_category">
            <option value="">select a book category</option>
            <?php foreach ($categories as $category) : ?>
                <option value=" <?= $category['id']; ?>"><?= $category['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form__row">
        <label for="book_description" class="form__row--label">Content</label>
        <textarea name="book_description" id="" cols="30" rows="10" style="resize: none" placeholder="Book description"><?= htmlspecialchars($book_description); ?></textarea>
    </div>

    <button class="btn btn--submit">Save</button>
</form>
<!-- form end -->