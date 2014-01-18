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
    </div>

    <div class="styleguide__elements">
        <div class="styleguide__element">
            <div class="alert">
                Body
            </div>
        </div>
        <?php foreach ($section->getModifiers() as $modifier) { ?>
            <div class="styleguide__element styleguide__element--modifier">
                <span class="styleguide__element__modifier-label"><?= $modifier->getName(); ?></span>
                <div class="alert <?= $modifier->getClassName(); ?>">
                    Body
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="styleguide__html">
        <pre class="styleguide__code"><code>&lt;div class="alert $modifierClass"&gt;
    Body
&lt;/div&gt;</code></pre>
    </div>
</div>

<?php
require_once('../includes/footer.php');
