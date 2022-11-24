

            <?php foreach ($books as $book) : ?>
                <!-- book start | start here -->
                <article>
                    <div class="book__image">
                        <img src="images/<?= $book['image']; ?>" alt="image">
                    </div>
                    <div class="book__description">
                        <h3 class="book__title"><?= substr($book['name'], 0, 18); ?></h3>
                        <span class="book__author">by <?= $book['author']; ?></span>
                        <p class="book__text"><?= substr($book['description'], 0, 150); ?>..</p>
                        <a href="includes/download.php?<?= $book['id']; ?>" class="book__download">Download PDF</a>
                    </div>
                </article>
                <!-- book start | ends here -->
            <?php endforeach ?>