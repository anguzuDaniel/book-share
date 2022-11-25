<!-- error handler start | checks if inputs are empty and prints message -->
<?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<!-- error handler end -->


<!-- form start -->
<form method="post" enctype="multipart/form-data">
    <?php if (!$id) : ?>
        <h1>No book with that id found, please provide a valid id in the record.</h1>
    <?php else : ?>
        <?php foreach ($books as $book) : ?>
            <div class="form__row--container">
                <div class="form__row">
                    <label for="book_title" class="form__row--label">Title</label>
                    <input type="text" name="book_title" value="" placeholder=" Book name" value="<?= $book['name']; ?>" />
                </div>

                <div class="form__row">
                    <label for="book_author" class="form__row--label">Author</label>
                    <input type="text" name="book_author" value="" placeholder="Book author" value="<?= $book['author']; ?>" />
                </div>
            </div>

            <div class="form__row--container">
                <div class="form__row">
                    <label for="book_cover" class="form__row--label">Book cover</label>
                    <input type="file" class="form__row--img" name="book_cover" value="<?= $book['image']; ?>" />
                </div>

                <div class="form__row">
                    <label for="book_pdf" class="form__row--label">Pdf file</label>
                    <input type="file" class="form__row--img" name="book_pdf" value="" accept="application/pdf" value="uploads/pdf/<?= $book['file']; ?>" />
                </div>
            </div>

            <div class="form__row">
                <select name="book_category">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form__row">
                <label for="book_description" class="form__row--label">Content</label>
                <textarea name="book_description" id="" cols="30" rows="10" style="resize: none" placeholder="Book description"><?= $book['description']; ?></textarea>
            </div>

            <button class="btn btn--submit">Save</button>
        <?php endforeach; ?>
    <?php endif; ?>
</form>
<!-- form end -->