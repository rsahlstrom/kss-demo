<nav role="main">
    <ul>
        <li><a href="index.php">Home</a></li>
        <?php
            foreach ($kss->getTopLevelSections() as $section) {
                echo '<li><a href="index.php?ref='.$section->getReference().'">'.$section->getTitle().'</a></li>';
            }
        ?>
    </ul>
</nav>
