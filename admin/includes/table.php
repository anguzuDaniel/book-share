<table>
    <caption style="display:none;">All book in the database</caption>
    <thead>
        <tr>
            <th>

                Name

            </th>
            <th>
                Author
            </th>
            <th>
                Image
            </th>
            <th>
                File
            </th>
            <th>
                Desc
            </th>
            <th>
                CatID
            </th>
            <th colspan="2">
                Operations
            </th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($books as $book) : ?>
            <tr>
                <td>
                    <?= substr($book['name'], 0, 5); ?>..
                </td>
                <td>
                    <?= substr($book['author'], 0, 5); ?>..
                </td>
                <td>
                    <img src="../images/<?= $book['image']; ?>" alt="<?= $book['name'], 0, 5; ?> image" />
                </td>
                <td>
                    <?= substr($book['file'], 0, 5); ?>
                </td>
                <td>
                    <?= substr($book['description'], 0, 5); ?>..
                </td>
                <td>
                    <?= $book['category']; ?>
                </td>
                <td>

                    <button type="submit" class="edit__icon">
                        <a href="edit_book.php?id=<?= $book['id']; ?>">
                            <em class="fa-regular fa-pen-to-square"></em>
                        </a>
                    </button>

                </td>
                <td>

                    <button type="submit" class="showDeleteModal delete__icon">
                        <a href="delete_book.php?id=<?= $book['id']; ?>">
                            <em class="fa-regular fa-trash-can"></em>
                        </a>
                    </button>

                </td>
            </tr>
        <?php endforeach; ?>
</table>