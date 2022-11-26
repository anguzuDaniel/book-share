<footer class="footer">
    <nav class="navigation__secondary">
        <ul>
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href=""><?= $category['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div class="footer__cta">

        <form>
            <input type="text" placeholder="Join our email list.." class="footer__input" />
            <button class="btn footer__btn">Submit</button>
        </form>
    </div>

    <div class="footer__copyright">
        <p>Copyright <a href="#">Anguzu Daniel</a> <?php echo date("Y"); ?></p>
    </div>
</footer>

</body>

</html>