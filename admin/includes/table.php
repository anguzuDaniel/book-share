<table>
    <thead>
        <tr>
            <td>Name</td>
            <td>Author</td>
            <td>Image</td>
            <td>File</td>
            <td>Description</td>
            <td>Category</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= substr($book['name'], 0, 5); ?>..</td>
                <td><?= substr($book['author'], 0, 6); ?>..</td>
                <td><?= $book['image']; ?></td>
                <td><?= $book['file']; ?></td>
                <td><?= substr($book['description'], 0, 10); ?>..</td>
                <td><?= $book['category']; ?></td>
                <td>
                    <a href="edit_book.php?id=<?= $book['id']; ?>" class="edit__icon">
                        <em class="fa-regular fa-pen-to-square"></em>
                    </a>
                </td>
                <td>
                    <button class="showDeleteModal delete__icon">
                        <em class="fa-regular fa-trash-can"></em>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
</table>