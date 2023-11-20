<header>

    <section class="flex">

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">Biblioteca Portatil<span>.</span></a>

        <nav class="navbar">
            <?php foreach ($menu as $item):?>
                <a href="<?=$item['link'];?>"><?=$item['label'];?></a>
            <?php endforeach; ?>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="meu_perfil.php" class="fas fa-user"></a>
        </div>

    </section>

</header>
