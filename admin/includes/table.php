<table>
    <caption style="display:none;">All book in the database</caption>
    <thead>
        <th>
        <td>
            <p>
                Name
            </p>
        </td>
        <td>
            <p>Author</p>
        </td>
        <td>
            <p>Image</a>
        </td>
        <td>
            <p>File</p>
        </td>
        <td>
            <p>Desc</p>
        </td>
        <td>
            <p>CatID</p>
        </td>
        <td colspan="2">
            <p>Operations</p>
        </td>
        </th>
    </thead>

    <tbody>

        <?php foreach ($books as $book) : ?>
            <tr>
                <td>
                    <p><?= substr($book['name'], 0, 5); ?>..</p>
                </td>
                <td>
                    <p><?= substr($book['author'], 0, 5); ?>..</p>
                </td>
                <td>
                    <p><img src="../images/<?= $book['image']; ?>" alt="<?= $book['name'], 0, 5; ?> image" /></p>
                </td>
                <td>
                    <p><?= substr($book['file'], 0, 5); ?></p>
                </td>
                <td>
                    <p><?= substr($book['description'], 0, 5); ?>..</p>
                </td>
                <td>
                    <p><?= $book['category']; ?></p>
                </td>
                <td>
                    <p>
                        <button type="submit" class="edit__icon">
                            <a href="edit_book.php?id=<?= $book['id']; ?>">
                                <em class="fa-regular fa-pen-to-square"></em>
                            </a>
                        </button>
                    </p>
                </td>
                <td>
                    <p>
                        <button type="submit" class="showDeleteModal delete__icon">
                            <a href="delete_book.php?id=<?= $book['id']; ?>">
                                <em class="fa-regular fa-trash-can"></em>
                            </a>
                        </button>
                    </p>
                </td>
            </tr>
        <?php endforeach; ?>
</table>