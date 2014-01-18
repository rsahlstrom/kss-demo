<?php

require_once('../vendor/autoload.php');

$kss = new \Scan\Kss\Parser('\css');
$section = $kss->getSection('1.1');

require_once('../includes/header.php');

?>

<div class="styleguide">
    <h3 class="styleguide__header">
        <span class="styleguide__title">Alert</span>
    </h3>

    <div class="styleguide__description">
        <p><?= $section->getDescription(); ?></p>

        <?php if (count($section->getModifiers()) > 0) { ?>
            <ul class="styleguide__modifiers">
                <?php foreach ($section->getModifiers() as $modifier) { ?>
                    <li>
                        <span class="styleguide__modifier-name">
                            <?= $modifier->getName(); ?>
                        </span>
                        <?php if ($modifier->getDescription()) { ?>
                            &mdash; <?= $modifier->getDescription(); ?>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <div class="styleguide__elements">
        <div class="styleguide__element">
            <?= $section->getMarkupNormal(); ?>
        </div>
        <?php foreach ($section->getModifiers() as $modifier) { ?>
            <div class="styleguide__element styleguide__element--modifier">
                <span class="styleguide__element__modifier-label"><?= $modifier->getName(); ?></span>
                <?= $modifier->getExampleHtml(); ?>
            </div>
        <?php } ?>
    </div>

    <div class="styleguide__html">
        <pre class="styleguide__code"><code><?= htmlentities($section->getMarkupNormal('{class}')); ?></code></pre>
    </div>
</div>

<?php
require_once('../includes/footer.php');
